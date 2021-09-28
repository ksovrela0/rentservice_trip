<?php
GLOBAL $db;
include("../class.Mysqli.php");
$db = new dbClass();
$act = $_REQUEST['act'];
$data = array();
switch($act){
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
        $trip_days = $_REQUEST['trip_days'];
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
        $data['tripDistanceKM'] = floor($tripDistanceKM/1000);
        $data['tripDuration'] = gmdate("H:i", $tripDuration);

        $data['markers'] = $markers;
        break;
}


echo json_encode($data);
?>