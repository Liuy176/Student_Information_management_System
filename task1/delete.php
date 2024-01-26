<?php
$servername = "localhost";
$username = "root";
$password = "";
$tab = "school";
header("Content-type:text/html;charset=UTF-8");
include_once ("index.php");
// Create connection
$conn = new mysqli($servername, $username, $password,$tab);
// Check connectiont
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


   
// sql to delete a record
$data = mysqli_query($con, "delete* from studentinfo where `Student Id`=" . $id);

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}


$conn->close();
?>
