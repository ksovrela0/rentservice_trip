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
        $options .= '<option value="'.$location['id'].'">'.$location['name_eng'].'</option>';
    }

    echo $options;
}

function prepared_transfers(){
    GLOBAL $db;
    $data = '';
    $db->setQuery(" SELECT  id,
                            name_eng
                    FROM    prepared_transfers
                    WHERE   actived = 1");
    $transfers = $db->getResultArray();
    foreach($transfers['result'] AS $transfer){
        $data .= '<div class="category_destination">
        <h3 class="text-center mb20 dest_title">'.$transfer['name_eng'].'</h3>
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
                            CONCAT(start_loc_name.name_eng, ' - ', end_loc_name.name_eng) AS title,
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


function getTours(){
    GLOBAL $db;

    $db->setQuery(" SELECT  id,
                            name_eng,
                            image
                    FROM    tours
                    WHERE   actived = 1");
    $tours = $db->getResultArray();

    foreach($tours['result'] AS $tour){
        echo '  <div class="col-md-4">
                    <div class="thumb">
                        <a class="hover-img" href="tour_d.php?id='.$tour['id'].'">
                            <img src="'.$tour['image'].'" alt="Image Alternative text" title="Gaviota en el Top" />
                            <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                                <div class="text-small">
                                    <h5>'.$tour['name_eng'].'</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>';
    }
    
}

function getTourDetail($detail = 'name', $id = 0){
    GLOBAL $db;
    $db->setQuery(" SELECT  id,
                            name_eng,
                            image
                    FROM    tours
                    WHERE   actived = 1 AND id = '$id'");
    $tour = $db->getResultArray();
    if($detail == 'name'){
        echo $tour['result'][0]['name_eng'];
    }
    else if($detail == 'image'){
        echo $tour['result'][0]['image'];
    }
}
?>