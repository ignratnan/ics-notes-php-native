<?php

$host = "localhost";
$user = "db_user";
$pass = "db_password";
$db   = "db_name";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Database connection failed");
}
