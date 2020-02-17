<?php
$host = "127.0.0.1";
$dbusername = "root";
$dbpassword = "";
$dbname = "registration";
$db = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
if (!$db){
die("Connection Error: " . mysqli_connect_error());
}
?>