<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'company';

$conn = mysqli_connect($hostname, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: ");
}
