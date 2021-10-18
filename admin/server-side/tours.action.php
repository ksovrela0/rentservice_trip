<?php
error_reporting(E_ERROR);
include('../../class.Mysqli.php');
GLOBAL $db;
$db = new dbClass();
$act = $_REQUEST['act'];
$user_id    = $_SESSION['USERID'];
$obj_id     = $_SESSION['OBJID'];
$group_id   = $_SESSION['GRPID'];
switch ($act){
    case 'get_add_page':
        $id = $_REQUEST['id'];
        $data = array('page' => getPage(getTour($id)));
    break;
    case 'get_edit_page':
        $id = $_REQUEST['id'];
        $data = array('page' => getPage($id));
    break;
    
    case 'disable':
        $ids = $_REQUEST['id'];
        $ids = explode(',',$ids);

        foreach($ids AS $id){
            $db->setQuery("UPDATE products SET actived = 0 WHERE id = '$id'");
            $db->execQuery();
        }
    break;
    case 'get_columns':
        $columnCount = 		$_REQUEST['count'];
        $cols[] =           $_REQUEST['cols'];
        $columnNames[] = 	$_REQUEST['names'];
        $operators[] = 		$_REQUEST['operators'];
        $selectors[] = 		$_REQUEST['selectors'];
        //$query = "SHOW COLUMNS FROM $tableName";
        //$db->setQuery($query,$tableName);
        //$res = $db->getResultArray();
        $f=0;
        foreach($cols[0] AS $col)
        {
            $column = explode(':',$col);

            $res[$f]['Field'] = $column[0];
            $res[$f]['type'] = $column[1];
            $f++;
        }
        $i = 0;
        $columns = array();
        foreach($res AS $item)
        {
            $columns[$i] = $item['Field'];
            $i++;
        }
        
        $dat = array();
        $a = 0;
        for($j = 0;$j<$columnCount;$j++)
        {
            if(1==2)
			{
				continue;
            }
            else{
                
                if($operators[0][$a] == 1) $op = true; else $op = false; //  TRANSFORMS 0 OR 1 TO True or False FOR OPERATORS
                //$op = false;
                if($res['data_type'][$j] == 'date')
                {
                    $g = array('field'=>$columns[$j],'encoded'=>false,'title'=>$columnNames[0][$a],'format'=>"{0:yyyy-MM-dd hh:mm:ss}",'parseFormats' =>["MM/dd/yyyy h:mm:ss"]);
                }
                else if($selectors[0][$a] != '0') // GETTING SELECTORS WHERE VALUES ARE TABLE NAMES
                {
                    $g = array('field'=>$columns[$j],'encoded'=>false,'title'=>$columnNames[0][$a],'values'=>getSelectors($selectors[0][$a]));
                }
                else
                {
					if($columns[$j] == "inc_status"){
						$g = array('field'=>$columns[$j],'encoded'=>false,'title'=>$columnNames[0][$a],'filterable'=>array('multi'=>true,'search' => true), 'width' => 153);
					}elseif($columns[$j] == "audio_file"){
						$g = array('field'=>$columns[$j],'encoded'=>false,'title'=>$columnNames[0][$a],'filterable'=>array('multi'=>true,'search' => true), 'width' => 150);
					}elseif($columns[$j] == "action_given"){
						$g = array('field'=>$columns[$j],'encoded'=>false,'title'=>$columnNames[0][$a],'filterable'=>array('multi'=>true,'search' => true), 'width' => '5%');
					}elseif($columns[$j] == "id"){
						$g = array('field'=>$columns[$j], 'hidden' => false,'encoded'=>false,'title'=>$columnNames[0][$a],'filterable'=>array('multi'=>true,'search' => true), 'width' => 100);
					}elseif($columns[$j] == "inc_date"){
						$g = array('field'=>$columns[$j],'encoded'=>false,'title'=>$columnNames[0][$a],'filterable'=>array('multi'=>true,'search' => true), 'width' => 130);
					}else{
                    	$g = array('field'=>$columns[$j],'encoded'=>false,'title'=>$columnNames[0][$a],'filterable'=>array('multi'=>true,'search' => true));
					}
                }
                $a++;
            }
            array_push($dat,$g);
            
        }
        
        // array_push($dat,array('command'=>["edit","destroy"],'title'=>'&nbsp;','width'=>'250px'));
        
        $new_data = array();
        //{"id":"id","fields":[{"id":{"editable":true,"type":"number"}},{"reg_date":{"editable":true,"type":"number"}},{"name":{"editable":true,"type":"number"}},{"surname":{"editable":true,"type":"number"}},{"age":{"editable":true,"type":"number"}}]}
        for($j=0;$j<$columnCount;$j++)
        {
            if($res['data_type'][$j] == 'date')
            {
                $new_data[$columns[$j]] = array('editable'=>false,'type'=>'string');
            }
            else
            {
                $new_data[$columns[$j]] = array('editable' => true, 'type' => 'string');
            }
        }
        
        $filtArr = array('fields'=>$new_data);
        $kendoData = array('columnss'=>$dat,'modelss'=>$filtArr);
        
        //$dat = array('command'=>["edit","destroy"],'title'=>'&nbsp;','width'=>'250px');
        
        $data = $kendoData;
        //$data = '[{"gg":"sd","ads":"213123"}]';
        
    break;
    case 'get_list':
        $id          =      $_REQUEST['order_id'];
		
        $columnCount = 		$_REQUEST['count'];
		$cols[]      =      $_REQUEST['cols'];

        $db->setQuery(" SELECT      tour_locations.id,
                                    locations.name_geo,
                                    tour_locations.position
                        FROM        tour_locations
                        JOIN		locations ON locations.id = tour_locations.location_id
                        WHERE       tour_locations.tour_id = '1'

                        ORDER BY position");

        $result = $db->getKendoList($columnCount, $cols);
        $data = $result;
    break;
    //<div id=\"change_product\" style=\"background-color:#ffee1d;font-weight: bold;margin: 4px;border-radius:10px;padding:7px;cursor:pointer;\">ჩანაცვლება</div> IF NEEDED
}


echo json_encode($data);

function getPage($res = ''){
    $data .= '
    
    
    <fieldset class="fieldset">
        <legend>აირჩიეთ ლოკაცია</legend>
            <select id="location_id">
            '.locations($res['location_id']).'
            </select>

            <input type="text" value="'.$res['position'].'" id="loc_position" placeholder="ლოკაციის პოზიცია(ციფრი)">
    </fieldset>
    <input type="hidden" value="'.$res['loc_id'].'" id="locs_id">
    ';

    return $data;
}
function getTour($id = 0){
    GLOBAL $db;

    $db->setQuery(" SELECT  id AS loc_id,
                            location_id,
                            position
                    FROM    tour_locations
                    WHERE   tour_id = '$id'");
}
function locations($id = 0){
    GLOBAL $db;

    $db->setQuery("SELECT id,name_geo
                    FROM locations");

    $loc = $db->getResultArray();

    $opts = '';
    foreach($loc['result'] AS $l){
        if($l['id'] == $id){
            $opts .= '<option value="'.$l[id].'" selected>'.$l[name_geo].'</option>';
        }
        else{
            $opts .= '<option value="'.$l[id].'">'.$l[name_geo].'</option>';
        }
    }
    
    return $opts;
}

?>