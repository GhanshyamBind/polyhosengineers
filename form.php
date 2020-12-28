<?php
$servername = "148.72.232.173:3306";
$username = "form_data";
$password = "shyam@786";
$database = "polyhosengineers";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

