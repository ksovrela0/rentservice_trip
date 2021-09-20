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
            array_unshift($waypoints, $destination_base);
            $lastWaypoint = count($waypoints) - 1;
            $db->setQuery(" SELECT  coordinates
                            FROM    locations
                            WHERE   actived = 1 AND id = '$waypoints[$lastWaypoint]'");
            $lastWaypoint = $db->getResultArray();
            $addr['destination'] = $lastWaypoint['result'][0]['coordinates'];
            array_pop($waypoints);

            foreach($waypoints AS $point){
                $db->setQuery(" SELECT  coordinates
                                FROM    locations
                                WHERE   actived = 1 AND id = '$point'");
                $middleData = $db->getResultArray();
                array_push($waypointsData, $middleData['result'][0]['coordinates']);
            }
            $addr['waypoints'] = implode('|', $waypointsData);
        }
        else{
            $addr = array(
                'origin' => $originData['result'][0]['coordinates'],
                'destination' => $destinationData['result'][0]['coordinates']
            );
        }
        //die(var_dump($addr));
        
        $fields = 'units=metric&key=AIzaSyDAfnQE12ExP7zZnj5SirrP9qEvNV0XXO0&mode=driving&'.http_build_query($addr);
        $tripData = json_decode(file_get_contents('https://maps.googleapis.com/maps/api/directions/json?'.$fields),true);

        $tripDistanceKM = 0;
        $tripDuration   = 0;

        foreach($tripData['routes'][0]['legs'] AS $leg){
            $tripDistanceKM += $leg['distance']['value'];
            $tripDuration += $leg['duration']['value'];
        }
        $data['tripDistanceKM'] = floor($tripDistanceKM/1000);
        $data['tripDuration'] = gmdate("H:i", $tripDuration);

        break;
}


echo json_encode($data);
?>