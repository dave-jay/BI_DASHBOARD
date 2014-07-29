<?php

/**
 * Admin side Login file
 * 
 * 
 * @author Dave Jay
 * @version 1.0
 * @package Xero
 * 
 */
if ($_REQUEST['username'] && !isset($_SESSION['user'])) {
    $user_name = _escape($_REQUEST['username']);
    $password = _escape($_REQUEST['password']);

    if (User::doLogin($user_name, $password)) {
        User::setSession($user_name);
        _R(lr('home'));
    } else {
        $error = "Invalid Login";
    }
}

if (isset($_SESSION['user'])) {
    _R(lr('home'));
}
$no_visible_elements = true;
$jsInclude = "login.js.php";
_cg("page_title", "Login");
?>