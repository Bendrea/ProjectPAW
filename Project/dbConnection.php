<?php

$dbUsername = "JIUfb0b4kG";
$dbPassword = "iqwuCCKHxX";
$host = "remotemysql.com";
$dbName = "JIUfb0b4kG";
$dbPort=3306;

$con=mysqli_connect($host,$dbUsername,$dbPassword,$dbName);

if(!$con){

    die("Connetion Error");

    $string=" not connected!";
    echo ("<script>console.log('".$string."');</script>");

}else{
    $string="connected!";
    echo ("<script>console.log('".$string."');</script>");
}
?>