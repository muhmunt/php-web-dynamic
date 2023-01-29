<?php
/**
 * using mysqli_connect for database connection
 */
 
$dbHost = 'localhost';
$dbName = 'web_dinamis';
$dbUsername = 'root';
$dbPassword = '';
 
$mysqli = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName); 
 
?>