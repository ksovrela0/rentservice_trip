<?php
GLOBAL $db;
include("../class.Mysqli.php");
$db = new dbClass();
$act = $_REQUEST['act'];
$data = array();
switch($act){
    case 'get_tour':
        $tour_id = $_REQUEST['tour_id'];

        $db->setQuery(" SELECT  location_id
                        FROM    tour_locations
                        WHERE   tour_id = '$tour_id'
                        ORDER BY position ASC");
        $locations = $db->getResultArray();

        $data['start_location'] = $locations['result'][0]['location_id'];
        $data['end_location'] = $locations['result'][$locations['count']-1]['location_id'];

        $lastIndex = $locations['count']-1;

        array_shift($locations['result']);
        array_pop($locations['result']);

        foreach($locations['result'] AS $loc){
            $data['waypoints'] .= $loc['location_id'].',';
        }

        $data['waypoints'] = substr($data['waypoints'], 0, -1);
        
        break;
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
        $tripRoute = $googledData['route'];
        $db->setQuery(" SELECT  cars.id,
                                cars.image,
                                cars.car_name,
                                cars.car_type,
                                cars.seats,
                                IF(cars.air_conditioner = 1, 'Yes', 'No') AS air_conditioner,
                                IF(cars.wifi = 1, 'Yes', 'No') AS wifi,
                                cars.fuel_per_100,
                                IFNULL(users.avatar, 'no-avatar.jpg') AS avatar,
                                users.firstname_rus,
                                users.languages_rus,
                                fuel_type.name_rus AS fuel_type,
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
        $car = $cars['result'][0];
        $db->setQuery(" SELECT  cur_dollar,
                                cur_euro
                        FROM    system
                        WHERE   id = 1");
        $curr = $db->getResultArray();

        $priceGEL = ceil($car['total_price'] + ($car['total_price'] * 0.2));
        $priceUSD = ceil(($car['total_price'] + ($car['total_price'] * 0.2))/$curr['result'][0]['cur_dollar']);
        $priceEUR = ceil(($car['total_price'] + ($car['total_price'] * 0.2))/$curr['result'][0]['cur_euro']);


        $db->setQuery("INSERT INTO orders SET date = NOW(),
                                                trip_route = '$tripRoute',
                                                cl_name = '$fullname',
                                                cl_phone = '$phone',
                                                cl_email = '$email',
                                                cl_address = '$address',
                                                cl_comment = '$comment',
                                                car_id = '$car_id',
                                                trip_start_date = '$trip_start_date',
                                                trip_days = '$trip_days',
                                                price_usd = '$priceUSD',
                                                price_gel = '$priceGEL',
                                                price_eur = '$priceEUR',
                                                trip_distance = '$trip_distance',
                                                trip_duration = '$tripDuration'");
        $db->execQuery();
        
        $data['status'] = '000';
        

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
                                cars.user_id,
                                IF(cars.air_conditioner = 1, 'Yes', 'No') AS air_conditioner,
                                IF(cars.wifi = 1, 'Yes', 'No') AS wifi,
                                cars.fuel_per_100,
                                IFNULL(users.avatar, 'no-avatar.jpg') AS avatar,
                                users.firstname_rus,
                                users.languages_rus,
                                fuel_type.name_rus AS fuel_type,
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
                                        'user_id' => $car['user_id'],
                                        'car_name' => $car['car_name'],
                                        'driver_name' => $car['firstname_rus'],
                                        'driver_avatar' => $car['avatar'],
                                        'languages' => $car['languages_rus'],
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
            $options .= '<option value="'.$location['id'].'">'.$location['name_rus'].'</option>';
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

    $route = '';

    $db->setQuery(" SELECT  coordinates,
                            name_geo
                    FROM    locations
                    WHERE   actived = 1 AND id = '$origin'");
    $originData = $db->getResultArray();

    $db->setQuery(" SELECT  coordinates,
                            name_geo
                    FROM    locations
                    WHERE   actived = 1 AND id = '$destination_base'");
    $destinationData = $db->getResultArray();
    $addr = array(
        'origin' => $originData['result'][0]['coordinates']
    );

    $route .= $originData['result'][0]['name_geo'].'→';
    
    
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
            $db->setQuery(" SELECT  coordinates,
                                    name_geo
                            FROM    locations
                            WHERE   actived = 1 AND id = '$point'");
            $middleData = $db->getResultArray();
            array_push($waypointsData, $middleData['result'][0]['coordinates']);
            $route .= $middleData['result'][0]['name_geo'].'→';
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
        $route .= $destinationData['result'][0]['name_geo'].'→';
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
    $toReturn['route'] = rtrim($route,'→');

    return $toReturn;

}
?>