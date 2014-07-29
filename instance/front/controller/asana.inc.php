<?php

/**
 * User List File
 * 
 * 
 * @author Dave Jay
 * @version 1.0
 * @package Xero
 * 
 */
$urlArgs = _cg("url_vars");
$addIcon = "plus";
$addLabel = "Add Asana";

$asana_key = "";


//Insert
if (isset($_REQUEST['fields']) && $_REQUEST['fields']['asana_id'] == '') {

        //Inserting Row
        $data = qi('asana', Array("asana_key" => $_REQUEST['fields']['asana_key']));
        if ($data!= '' ) {
            
            $greetings = "Asana inserted successfully";
        } else {
            $error = "Unable to add Asana";
        }
}

//Update
if (isset($_REQUEST['fields']) && $_REQUEST['fields']['asana_id'] > 0) {

        //updating Row
        $data= qu('asana', Array("asana_key" =>$_REQUEST['fields']['asana_key']), "id= '{$_REQUEST['fields']['asana_id']}' ");
        if ($data != '' ) {
            $greetings = "Asana updated successfully";
        } else {
            $error = "Unable to Update Asana";
        }
  
}

switch ($urlArgs[0]) {
    case "edit":
        $subTpl = "asana_add.php";
        $addIcon = "edit";
        $addLabel = "Edit Asana";
        $activeMenuAdd = "active";
        if ($urlArgs[1] > 0) {
            $view_data = qs("select * from asana where id = '{$urlArgs[1]}'");
         

            $asana_key = $view_data['asana_key'];
            $id_val = $urlArgs[1];
        }
        break;
    case "add":
        $subTpl = "asana_add.php";
        $activeMenuAdd = "active";
        break;
    case "delete":
      
        $condition= "id = $urlArgs[1]";
        $delete_data = qd("asana",$condition);

        if ($delete_data) {
            $greetings = "Asana deleted successfully";
            $_SESSION['greetings_msg'] = $greetings;
        } else {
            $error = "Unable to delete Asana";
            $_SESSION['error_msg'] = $error;
        }
        _R(lr('asana/list'));

        break;
    default:
        $subTpl = "asana_list.php";
        $activeMenuList = "active";
}

$asana=q("select * from asana ");

$jsInclude = "asana.js.php";
_cg("page_title", "Asana");
?>
