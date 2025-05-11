<?php
$dbservername="localhost";
$dbusername="root";
$dbPassword="";
$dbname="cssniffler";

// session_start();
$conn=new mysqli($dbservername,$dbusername,$dbPassword,$dbname);
if(!$conn)
die("Connection Failed".$conn->connect_error);
?>