<?php
$host = 'localhost';
$user = 'root';
$password = 'mysql';
$database = 'lab1';
$connection = new mysqli();
$connection = new mysqli($host, $user, $password, $database);
if ($connection->connect_errno) {
    exit('Connect failed: ' . $connection->connect_error);
}
?>