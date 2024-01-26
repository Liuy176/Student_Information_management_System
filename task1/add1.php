<?php
$snos = $_POST['Student Id'];
$users = $_POST['Name'];
$xingBie = $_POST['Gender'];
$ages = $_POST['Age'];
$in = $_POST['College'];
$dianHua = $_POST['Number'];



   
    include_once("untils/conn.php");
    if ($con) {
        mysqli_query($con, "set names utf8");
        $db = mysqli_select_db($con, "school");
        $data = mysqli_query($con, "insert into studentinfo(sno,name,sex,age,institute,phone_number,time) values('$Student_Id','$Name','$Gender','$Age','$College','$Number')");
        if ($data) {
            echo("<script>alert('Successfully added information')</script>");
            echo("<script>window.location.href='../index.php'</script>");
        } else {
            echo("<script>alert('Adding failed, please enter all data');history.back();</script>");

        }



}
?>

