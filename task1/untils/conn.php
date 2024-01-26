
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "school";

// create connection

$con = new mysqli($servername, $username, $password,$dbname);
mysqli_query($con,"set names utf8");
// checking connection
if ($con->connect_error) {
    die("connnection failed: " . $con->connect_error);
}
?>




