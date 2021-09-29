<?php
include("class.Mysqli.php");

$db = new dbClass();
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

function prepared_transfers(){
    GLOBAL $db;
    $data = '';
    $db->setQuery(" SELECT  id,
                            name_geo
                    FROM    prepared_transfers
                    WHERE   actived = 1");
    $transfers = $db->getResultArray();

    foreach($transfers['result'] AS $transfer){
        $data .= '<div class="category_destination">
        <h3 class="text-center mb20 dest_title">'.$transfer['name_geo'].'</h3>
            <div class="trips">
                '.prepared_transfer_locations($transfer['id']).'
            </div>
        </div>';
    }

    echo $data;

}

function prepared_transfer_locations($transfer_id){
    GLOBAL $db;
    $params = '';
    $db->setQuery(" SELECT  transfer_locations.id,
                            CONCAT(start_loc_name.name_geo, ' - ', end_loc_name.name_geo) AS title,
                            start_loc_name.id AS start_id,
                            end_loc_name.id AS end_id
                    FROM    transfer_locations
                    JOIN    locations AS start_loc_name ON start_loc_name.id = transfer_locations.start_location
                    JOIN    locations AS end_loc_name ON end_loc_name.id = transfer_locations.end_location
                    WHERE   transfer_locations.actived = 1 AND transfer_locations.transfer_id = '$transfer_id'");
    $locations = $db->getResultArray();
    
    foreach($locations['result'] AS $location){
        $params .= '    <div class="destination" start-id="'.$location['start_id'].'" end-id="'.$location['end_id'].'">
                            '.$location['title'].'
                        </div>';

    }

    return $params;
    
}

?>