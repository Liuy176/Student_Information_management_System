<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled document</title>
</head>
<body>
<table width="900" border="1" align="center">
    <tr>
        <td>
         <?php
				// 首先判断是否有提交的数据
				if (isset($_POST['id'])) {

				    // 连接数据库
				    $servername = "localhost";
				    $username = "root";
				    $password = "";
				    $dbname = "school";

				    $conn = mysqli_connect($servername, $username, $password, $dbname);

				    if (!$conn) {
				        die("Failed to connect to database: " . mysqli_connect_error());
				    }

				    // 获取表单数据
				    $id = $_POST['id'];
				    $name = $_POST['Name'];
				    $gender = $_POST['Gender'];
				    $age = $_POST['Age'];
				    $college = $_POST['College'];
				    $number = $_POST['Number'];

				    // 组装 SQL 语句并执行更新操作
				    $sql = "UPDATE studentinfo SET Name='$name', Gender='$gender', Age='$age', College='$college', Number='$number' WHERE `Student Id`='$id'";

				    if (mysqli_query($conn, $sql)) {
				        echo "<script>alert('Data updated successfully!')</script>";
				        echo "<script>window.location.href='SelectAll.php';</script>";
				    } else {
				        echo "Error updating record: " . mysqli_error($conn);
				    }

				    // 关闭数据库连接
				    mysqli_close($conn);
				} else {
				    echo "No data submitted";
				}
				?>

        </td>

    </tr>

</table>
</body>

</html>
