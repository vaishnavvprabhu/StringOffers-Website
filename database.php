<?php
$databaseHost = 'localhost';
$databaseName = 'stringof_new';
$databaseUsername = 'stringof_new';
$databasePassword = 'stringof_new';

$conn =  mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
?>