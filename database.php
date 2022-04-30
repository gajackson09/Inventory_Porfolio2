<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "inventory";

//creates connection
$database = mysqli_connect($servername, $username, $password, $db_name);

//checks connection
if (!$database) {
    die("Connection failed: " . mysqli_connect_error());
}
?>