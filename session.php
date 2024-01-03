<?php
//phpinfo();
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Credentials: true");
session_start();

$cookie_params = session_get_cookie_params();
echo session_id() . " name: " . $_SESSION['name']; 
?>
