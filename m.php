<?php
$servername = "sql210.infinityfree.com";
$username = "if0_42420741";
$password = "Remaz123456";
$dbname = "if0_42420741_myfirst";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO user (id, name, age)
VALUES ('', '', '')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>