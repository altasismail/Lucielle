<?php
$host = "localhost";
$database = "noms";
$username = "root";
$password = "";

$mysqli = new mysqli($host, $username, $password, $database);
// to prevent SQL injection attacks.
$namePlace = $mysqli->real_escape_string($_POST['namePlace']);
$genderPlace = $mysqli->real_escape_string($_POST['genderPlace']);
$originPlace = $mysqli->real_escape_string($_POST['originPlace']);
$morePlace = $mysqli->real_escape_string($_POST['morePlace']);

$query = "INSERT INTO nomlist (col1, col2, col3, col4)
        VALUES ('{$namePlace}','{$genderPlace}','{$originPlace}','{$morePlace}')";
$mysqli->query($query);
$mysqli->close();
?>