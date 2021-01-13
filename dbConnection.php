<?php

$dbUsername = "IBgQkTSGLn";
$dbPassword = "3dMK3n9wNp";
$host = "remotemysql.com";
$dbPort=3306;
$dbName = "IBgQkTSGLn";
$con=mysqli_connect($host,$dbUsername,$dbPassword,$dbName);

if(!$con){
die("Connetion Error");
$string=" not connected!";
    echo ("<script>console.log('".$string."');</script>");
}else{$string="connected!";
    echo ("<script>console.log('".$string."');</script>");
}



?>