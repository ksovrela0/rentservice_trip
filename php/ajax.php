<?php
GLOBAL $db;
include("../class.Mysqli.php");
$db = new dbClass();
$act = $_REQUEST['act'];
$data = array();
switch($act){
    case 'order_car':
        $car_id = $_REQUEST['car'];
        $fullname = $_REQUEST['fullname'];
        $phone = $_REQUEST['phone'];
        $email = $_REQUEST['email'];
        $address = $_REQUEST['address'];
        $comment = $_REQUEST['comment'];

        $origin = $_REQUEST['origin_base'];
        $destination_base = $_REQUEST['destination_base'];
        $waypoints = $_REQUEST['waypoints'];
        $trip_days = $_REQUEST['trip_days'];
        $trip_start_date = $_REQUEST['trip_start'];

        $googledData = calculate_data_between_points($origin, $destination_base, $waypoints);
        $trip_distance = $googledData['tripDistanceKM'];
        $tripDuration = $googledData['tripDuration'];
        $db->setQuery(" SELECT  cars.id,
                                cars.image,
                                cars.car_name,
                                cars.car_type,
                                cars.seats,
                                IF(cars.air_conditioner = 1, 'კი', 'არა') AS air_conditioner,
                                IF(cars.wifi = 1, 'კი', 'არა') AS wifi,
                                cars.fuel_per_100,
                                IFNULL(users.avatar, 'no-avatar.jpg') AS avatar,
                                users.firstname_geo,
                                users.languages_geo,
                                fuel_type.name_geo AS fuel_type,
                                users.salary_per_day,
                                
                                CASE
                                    WHEN cars.fuel_type = 1 THEN CEIL(((($trip_distance * 2)*cars.fuel_per_100)/100 * (SELECT fuel_price_benz FROM system WHERE id = 1)) + (users.salary_per_day * $trip_days))
                                    WHEN cars.fuel_type = 2 THEN CEIL(((($trip_distance * 2)*cars.fuel_per_100)/100 * (SELECT fuel_price_diesel FROM system WHERE id = 1)) + (users.salary_per_day * $trip_days))
                                    WHEN cars.fuel_type = 3 THEN CEIL(((($trip_distance * 2)*cars.fuel_per_100)/100 * (SELECT fuel_price_gas FROM system WHERE id = 1)) + (users.salary_per_day * $trip_days))
                                END AS total_price

                        FROM 	cars
                        JOIN	fuel_type ON fuel_type.id = cars.fuel_type
                        JOIN	users ON users.id = cars.user_id
                        WHERE   cars.actived = 1 AND cars.id = '$car_id'");

        $cars = $db->getResultArray();
        break;
    case 'get_cars':
        $trip_distance = $_REQUEST['distance'];
        $trip_days = $_REQUEST['trip_days'];
        $car_type = $_REQUEST['car_type'];

        if($car_type != 0){
            $car_type_filt = " AND cars.car_type = $car_type";
        }
        $db->setQuery(" SELECT  cars.id,
                                cars.image,
                                cars.car_name,
                                cars.car_type,
                                cars.seats,
                                IF(cars.air_conditioner = 1, 'კი', 'არა') AS air_conditioner,
                                IF(cars.wifi = 1, 'კი', 'არა') AS wifi,
                                cars.fuel_per_100,
                                IFNULL(users.avatar, 'no-avatar.jpg') AS avatar,
                                users.firstname_geo,
                                users.languages_geo,
                                fuel_type.name_geo AS fuel_type,
                                users.salary_per_day,
                                
                                CASE
                                    WHEN cars.fuel_type = 1 THEN CEIL(((($trip_distance * 2)*cars.fuel_per_100)/100 * (SELECT fuel_price_benz FROM system WHERE id = 1)) + (users.salary_per_day * $trip_days))
                                    WHEN cars.fuel_type = 2 THEN CEIL(((($trip_distance * 2)*cars.fuel_per_100)/100 * (SELECT fuel_price_diesel FROM system WHERE id = 1)) + (users.salary_per_day * $trip_days))
                                    WHEN cars.fuel_type = 3 THEN CEIL(((($trip_distance * 2)*cars.fuel_per_100)/100 * (SELECT fuel_price_gas FROM system WHERE id = 1)) + (users.salary_per_day * $trip_days))
                                END AS total_price

                        FROM 	cars
                        JOIN	fuel_type ON fuel_type.id = cars.fuel_type
                        JOIN	users ON users.id = cars.user_id
                        WHERE   cars.actived = 1 $car_type_filt");

        $cars = $db->getResultArray();

        $db->setQuery(" SELECT  cur_dollar,
                                cur_euro
                        FROM    system
                        WHERE   id = 1");
        $curr = $db->getResultArray();


        
        $carData = array();

        foreach($cars['result'] AS $car){
            $priceGEL = ceil($car['total_price'] + ($car['total_price'] * 0.2));
            $priceUSD = ceil(($car['total_price'] + ($car['total_price'] * 0.2))/$curr['result'][0]['cur_dollar']);
            $priceEUR = ceil(($car['total_price'] + ($car['total_price'] * 0.2))/$curr['result'][0]['cur_euro']);
            array_push($carData, array( 'id' => $car['id'],
                                        'image' => $car['image'],
                                        'car_name' => $car['car_name'],
                                        'driver_name' => $car['firstname_geo'],
                                        'driver_avatar' => $car['avatar'],
                                        'languages' => $car['languages_geo'],
                                        'seats' => $car['seats'],
                                        'fuel_type' => $car['fuel_type'],
                                        'wifi' => $car['wifi'],
                                        'air_conditioner' => $car['air_conditioner'],
                                        'price_gel' => $priceGEL,
                                        'price_usd' => $priceUSD,
                                        'price_eur' => $priceEUR));
        }

        $data['cars'] = $carData;
        break;
    case 'get_additional_options':
        $db->setQuery(" SELECT  * 
                        FROM    `locations`
                        WHERE actived = 1");

        $locations = $db->getResultArray();
        $options = '';
        foreach($locations['result'] AS $location){
            $options .= '<option value="'.$location['id'].'">'.$location['name_geo'].'</option>';
        }

        $data['options'] = $options;
        break;
    case 'calculate_distance_data':

        $origin = $_REQUEST['origin_base'];
        $destination_base = $_REQUEST['destination_base'];
        $waypoints = $_REQUEST['waypoints'];

        $googledData = calculate_data_between_points($origin, $destination_base, $waypoints);
        
        $data['tripDistanceKM'] = $googledData['tripDistanceKM'];
        $data['tripDuration'] = $googledData['tripDuration'];

        $data['markers'] = $googledData['markers'];
        break;
}


echo json_encode($data);

function calculate_data_between_points($origin, $destination_base, $waypoints){
    GLOBAL $db;
    $markers = array();
    $db->setQuery(" SELECT  coordinates
                    FROM    locations
                    WHERE   actived = 1 AND id = '$origin'");
    $originData = $db->getResultArray();

    $db->setQuery(" SELECT  coordinates
                    FROM    locations
                    WHERE   actived = 1 AND id = '$destination_base'");
    $destinationData = $db->getResultArray();
    $addr = array(
        'origin' => $originData['result'][0]['coordinates']
    );
    
    
    $waypointsData = array();
    if($waypoints != ''){
        $originCoord = explode(',', $originData['result'][0]['coordinates']);
        array_push($markers, array('latitude' => $originCoord[0], 'longitude' => $originCoord[1]));

        array_unshift($waypoints, $destination_base);
        $lastWaypoint = count($waypoints) - 1;
        $db->setQuery(" SELECT  coordinates
                        FROM    locations
                        WHERE   actived = 1 AND id = '$waypoints[$lastWaypoint]'");
        $lastWaypoint = $db->getResultArray();
        $addr['destination'] = $lastWaypoint['result'][0]['coordinates'];


        $destinationCoord = explode(',', $lastWaypoint['result'][0]['coordinates']);
        
        array_pop($waypoints);

        foreach($waypoints AS $point){
            $db->setQuery(" SELECT  coordinates
                            FROM    locations
                            WHERE   actived = 1 AND id = '$point'");
            $middleData = $db->getResultArray();
            array_push($waypointsData, $middleData['result'][0]['coordinates']);

            $waypointsCoord = explode(',', $middleData['result'][0]['coordinates']);
            array_push($markers, array('latitude' => $waypointsCoord[0], 'longitude' => $waypointsCoord[1]));
        }
        $addr['waypoints'] = implode('|', $waypointsData);
        array_push($markers, array('latitude' => $destinationCoord[0], 'longitude' => $destinationCoord[1]));
    }
    else{
        $addr = array(
            'origin' => $originData['result'][0]['coordinates'],
            'destination' => $destinationData['result'][0]['coordinates']
        );

        $originCoord = explode(',', $originData['result'][0]['coordinates']);
        $destinationCoord = explode(',', $destinationData['result'][0]['coordinates']);

        array_push($markers, array('latitude' => $originCoord[0], 'longitude' => $originCoord[1]));
        array_push($markers, array('latitude' => $destinationCoord[0], 'longitude' => $destinationCoord[1]));
    }
    //die(var_dump($addr));
    $db->setQuery(" SELECT  google_api_key
                    FROM    system
                    WHERE   id = '1'");
    $api_key = $db->getResultArray();
    $api_key = $api_key['result'][0]['google_api_key'];
    $fields = 'units=metric&key='.$api_key.'&mode=driving&'.http_build_query($addr);
    $tripData = json_decode(file_get_contents('https://maps.googleapis.com/maps/api/directions/json?'.$fields),true);

    $tripDistanceKM = 0;
    $tripDuration   = 0;

    foreach($tripData['routes'][0]['legs'] AS $leg){
        $tripDistanceKM += $leg['distance']['value'];
        $tripDuration += $leg['duration']['value'];
    }

    $toReturn = array();

    $toReturn['tripDistanceKM'] = floor($tripDistanceKM/1000);
    $toReturn['tripDuration'] = gmdate("H:i", $tripDuration);
    $toReturn['markers'] = $markers;

    return $toReturn;

}
?>