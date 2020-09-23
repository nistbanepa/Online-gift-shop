<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Online_Store";

//create conn
$conn = new mysqli($servername, $username, $password, $dbname);
//check conn
if ($conn->connection_error) {
    die("Connection Failed:" . $conn->connection_error);
}
