<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

$conn = new mysqli(
	"mysql.db",
	"root",
	"password",
	"school",
);

if ($conn->connect_error) {
	die("Connection Failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM students");

while ($row = $result->fetch_assoc()) {
	echo $row["ID"] . " - " . $row["NAME"] . "<br>";
}

?>