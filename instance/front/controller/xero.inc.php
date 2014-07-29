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
$addLabel = "Add Xero key";

$xero_key = "";


//Insert
if (isset($_REQUEST['fields']) && $_REQUEST['fields']['xero_id'] == '') {

        //Inserting Row
        $data = qi('xero', Array("xero_key" => $_REQUEST['fields']['xero_key']));
        if ($data!= '' ) {
            
            $greetings = "Xero inserted successfully";
        } else {
            $error = "Unable to add Xero";
        }
}

//Update
if (isset($_REQUEST['fields']) && $_REQUEST['fields']['xero_id'] > 0) {

        //updating Row
        $data= qu('xero', Array("xero_key" =>$_REQUEST['fields']['xero_key']), "id= '{$_REQUEST['fields']['xero_id']}' ");
        if ($data != '' ) {
            $greetings = "Xero updated successfully";
        } else {
            $error = "Unable to Update Xero";
        }
  
}

switch ($urlArgs[0]) {
    case "edit":
        $subTpl = "xero_add.php";
        $addIcon = "edit";
        $addLabel = "Edit Xero";
        $activeMenuAdd = "active";
        if ($urlArgs[1] > 0) {
            $view_data = qs("select * from xero where id = '{$urlArgs[1]}'");
         

            $xero_key = $view_data['xero_key'];
            $id_val = $urlArgs[1];
        }
        break;
    case "add":
        $subTpl = "xero_add.php";
        $activeMenuAdd = "active";
        break;
    case "delete":
      
        $condition= "id = $urlArgs[1]";
        $delete_data = qd("xero",$condition);

        if ($delete_data) {
            $greetings = "Xero deleted successfully";
            $_SESSION['greetings_msg'] = $greetings;
        } else {
            $error = "Unable to delete Xero";
            $_SESSION['error_msg'] = $error;
        }
        _R(lr('xero/list'));

        break;
    default:
        $subTpl = "xero_list.php";
        $activeMenuList = "active";
}

$xero=q("select * from xero ");

$jsInclude = "xero.js.php";
_cg("page_title", "Xero Key");
?>
