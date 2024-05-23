<?php
$servename = "sql12.freesqldatabase.com"
$username = "sql12707483"
$password = "l8DQspG6j1"
$dbname = "sql12707483"

$mysqli = new mysqli($servename, $username, $password, $dbname);
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$sql = "SELECT * FROM contacts";
$result = $mysqli->query($sql);
$data = array();
if ($result->num_rows > 0) {
 while ($row = $result->fetch_assoc()) {
 	$data[] = $row;
 }
}

$mysqli->close();
header('Content_type:application/json');
echo json_encode($data);
?>