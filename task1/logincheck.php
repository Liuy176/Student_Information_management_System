    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
    </head>

    <body>
    <?php
    include_once("untils/conn.php");
    session_start();

    // $userName='root';
    
    // $host='localhost';
    // $dataBase='school';
   // $conn=mysqli_connect($host,$userName,$passWord,$dataBase);
    mysqli_query($con,"set names utf8");
    $name=$_POST['username'];
    $pwd=$_POST['password'];
    $sql="select Adminname,password from admin where Adminname='$name' AND password='$pwd';";
    $result=mysqli_query($con,$sql);
    $row=mysqli_num_rows($result);
     $_SESSION["username"]=$name;
    if($row){


        echo "<script>alert('Login succeeded');location.href='index.php';</script>";

        }
        else{

            echo "<script>alert('User name or password error, please re-enter');history.go(-1);</script>";
        }
        ?>
    </body>
    </html>