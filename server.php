<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('session.cookie_secure', 0);

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
//session_set_cookie_params(0, '/', '', 0, 0); 
//session_start();

//session_regenerate_id(true);
//echo session_id() . " name:" . $_SESSION['name'];
setcookie("Name", "calib", 0, "", "", 0, 0);
/*
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Credentials: true');
header('Content-Type: application/json');
$host = "127.0.0.1:3306";
$username = "u754510873_apex_user";
$password = "Hypertechsnumber1";
$database = "u754510873_apex_DB";
$conn = mysqli_connect($host, $username, $password, $database);
$error;
$response['success'] = false;
if (!$conn) {
        $error = mysqli_connect_error();
        $response['error'] = $error;
        echo json_encode($response);
        exit;
}

$sql = "SELECT balance FROM bank_account_holder WHERE account_number=1122";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$balance = $row['balance'];
*/

?>
