<?php

function getDefaultLocations(){
    GLOBAL $db;
    $db->setQuery(" SELECT  * 
                    FROM    `locations`
                    WHERE actived = 1");

    $locations = $db->getResultArray();
    $options = '';
    foreach($locations['result'] AS $location){
        $options .= '<option value="'.$location['id'].'">'.$location['name_geo'].'</option>';
    }

    echo $options;
}

?>