
<?php
//连接数据库
$servername = "localhost"; //address of data basde
$username = "root"; //username
$password = ""; //
$dbname = "school"; //databasename

$conn = mysqli_connect($servername, $username, $password, $dbname); //

//checking whether or not sucessful
if (!$conn) {
    die("connection failed : " . mysqli_connect_error());
}

//
if($_POST['student_id'] && $_POST['name'] && $_POST['gender'] && $_POST['age'] && $_POST['college'] && $_POST['number']) {
    $student_id = $_POST['student_id'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $college = $_POST['college'];
    $number = $_POST['number'];

    //insert data 
     $sql = "INSERT INTO `studentinfo` (`Student Id`, `Name`, `Gender`, `Age`, `College`, `Number`) VALUES ('$student_id', '$name', '$gender', '$age', '$college', '$number')";

    if (mysqli_query($conn, $sql)) {
		
        echo "inserting successful！";
		 echo("<script>alert('Successfully added information')</script>");
            echo("<script>window.location.href='../index.php'</script>");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    //close database connection!
    mysqli_close($conn);
}
?>
