
<?php
include_once("untils/conn.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Untitled document</title>
    <style type="text/css">  table.gridtable {
            font-family: verdana,arial,sans-serif;
            font-size:15px;
            color:#333333;
            border-width: 1px;
            border-color: #666666;
            border-collapse: collapse;
        }
        table.gridtable th {
            border-width: 1px;
            padding: 8px;
            width: 70px;
            border-style: solid;
            border-color: #666666;
            background-color: #dedede;
        }
        table.gridtable td {
            border-width: 1px;
            width: 100px;
            padding: 8px;
            text-align: center;
            border-style: solid;
            border-color: #666666;
            background-color: #ffffff;
        }
        a{
            text-decoration: none;
            color: #606266;
        }
        a:hover {
            color: red;
        }
        .put {
            width: 150px;
            height: 30px;
            background: transparent;
            margin-top: 30px;
            border: 1px wheat solid;
            outline: none;
            color: #606266;
            font-size: 17px;
        }
        .btu {
            width: 98px;
            height: 30px;
            border: none;
            margin-top: 40px;
            margin-left: 40px;
            color: white;
            text-align: center;line-height: 15px;
            background-image: linear-gradient(to right, #c979d4,#fa719d);
            border-radius: 15px;
        }
    </style>
</head>
<body>
<form style="margin-left: 520px; margin-top: 50px;" method="get" action="#">
    <h2 style="margin-left: 170px;">Student Information Query</h2>
    <label>
        <span>Please enter the full name to query:</span>
        <input type="text" class="put" name="name" placeholder=" ">
    </label>
    <input class="btu" name="cha" type="submit" value="query">
</form>
<table class="gridtable" style="margin-left: 460px;margin-top: 40px;">
    <tr>
        
        <th>Student Id </th>
        <th>Name </th>
        <th>Gender </th>
        <th>Age</th>
        <th>College</th>
        <th>Number</th>
      
    </tr>
    <?php
    if (isset($_GET['cha'])) {
       $name = $_GET['name'];
      // $sql = "select * from studentinfo where name='$name'";
         $sql = "select * from studentinfo where name like '%$name%'";

        foreach ($con->query($sql) as $stu) {
            echo "<tr>";
            echo "<td>{$stu['Student Id']}</td>";
           
            echo "<td>{$stu['Name']}</td>";
            echo "<td>{$stu['Gender']}</td>";
            echo "<td>{$stu['Age']}</td>";
            echo "<td>{$stu['College']}</td>";
            echo "<td>{$stu['Number']}</td>";
            
            echo "</tr>";
        }
    }
    ?>

</table>
</body>
</html>