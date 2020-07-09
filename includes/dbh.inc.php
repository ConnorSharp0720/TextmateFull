<?php

$servername = "testdb.cnx7v6bxswzq.us-east-1.rds.amazonaws.com";
$dBUsername = "admin";
$dBPassword = "TextmateAdmin2020";
$dBName = "innodb";
$dBPort = "3306";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName, $dBPort);

if(!$conn) {
    die("Connection failed: " .mysqli_connect_error());
}