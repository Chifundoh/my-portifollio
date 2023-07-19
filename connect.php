<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio";

$connect = mysqli_connect('localhost','root','','portfolio');
if(!$connect){
    die("connection Error");
}
?>