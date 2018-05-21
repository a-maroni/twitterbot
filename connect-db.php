<?php
//get access to the database for the bot content
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "databasename";

// Create connection with database
$db = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

mysqli_set_charset($db,"utf8");
?>