<?php
// new mysqli connection to the database

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'guitar_store';

$conn = new mysqli($host, $user, $pass, $db);

if($conn->connect_error){
    die('Database error: ' . $conn->connect_error);
}