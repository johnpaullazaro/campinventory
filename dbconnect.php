<?php
 
// Create connection
$conn = new mysqli("localhost", "campinventoryadmin", "JW(b7w3]Rl*89k-g", "campinventory");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 
?>