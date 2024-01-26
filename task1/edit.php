<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/b.css">
    <style type="text/css">

    </style>
    <title>Untitled document</title>
    <script language="javascript">
        //
        function del() {
            if (confirm("Are you sure to delete?")) {
                return true;
            } else {
                return false;
            }
        }
        function chek(){
            var leng = this.form1.chk.length;
            if(leng==undefined){
                leng=1;
                if(!form1.chk.checked)
                    document.chk.checked=true;
                else
                    document.form1.chk.checked=false;
            }else{ for( var i = 0; i < leng; i++)
            {                        if(!form1.chk[i].checked)
                document.form1.chk[i].checked = true;
            else
                document.form1.chk[i].checked = false;  } }
            return false;}
    </script>
</head>
<body>
<?php
session_start();
if(isset($_SESSION["username"])){
?>
<div>
    <header>
        <hr/>
        <h1>Student Information Management System</h1>
        <hr/>
    </header>
    <main>

        <div id="Student Id">
        </div>
        <form name="form1" id="form1" method="post" action="deleteall.php">
        <table width="900" border="1" align="center">

            <tr>
<!--                <td class="s">--><?php //include("times.php");?><!--</td>-->
                <td><a href="SelectAll.php">Browse student information</a></td>
                <td><a href="add.php">Add information</a></td>
                <td><a href="edit.php">Edit information </a></td>
                <td><a href="cha.php">Query information </a></td>

                <td><a href="loginout.php"><button class="buttons" type="button">exit </button></a></td>
            </tr>
            <tr>
                <td colspan="7"><h2>Student information display</h2></td>
            </tr>
        </table>

        <table >
            <?php

            include_once("untils/conn.php");
            // $con=mysqli_connect("localhost","root","123456");
            mysqli_query($con,"set names utf8");
            if($con){
            
            $db=mysqli_select_db($con,"school");
            if($db){
            //
            $sql="select * from studentinfo";
            $data = mysqli_query($con,$sql);
            $maxrows = mysqli_num_rows($data);

            //

            $page_size = 13;  //
            if($maxrows%$page_size == 0){
                $maxpage = (int)($maxrows/$page_size);
            }else{
                $maxpage = (int)($maxrows/$page_size)+1;
            }

            
            if(isset($_GET['curpage'])){
                $page = $_GET['curpage'];
            }else{
                $page=1;
            }

            $start = $page_size*($page-1);
            $get_sql = "select * from studentinfo limit $start,$page_size";
           
            $data=mysqli_query($con,$get_sql);
            ?>

            <tbody>
            <tr id="thead">

                <td class="d" colspan="2">Student Id</td>
                
                <td>Name </td>
                <td>Gender </td>
                <td>Age</td>
                <td>College</td>
                <td>Number</td>
                
            </tr>
            <?php
            while($row = mysqli_fetch_array($data)){
                ?>
                <tr>
<!--                    <td><input type="checkbox"></td>-->
                    <td ><input type="checkbox" name="chk[]" id="chk" value="<?php echo $row["id"];?>"/></td>
                    <td><?php echo $row["Student Id"] ?></td>
                    <td><?php echo $row["Name"] ?></td>
                    <td><?php echo $row["Gender"] ?></td>
                    <td><?php echo $row["Age"] ?></td>
                    
                    <td><?php echo $row["College"] ?></td>
                    <td><?php echo $row["Number"] ?></td>

                    
                    <td><a href=update.php?id=<?php echo $row['Student Id'] ?> class="gre"  >modify</a>
                        <a href="delete.php?id=<?php echo $row['Student Id']?>"onclick=" return del()" class="red" >delete</a>

                    </td>
                </tr>
                <?php
            }
            ?>

            </tbody>
        </table>

    </main>
    <table  align="center"><tr><td>
                <?php
                echo "<p>total $maxpage page&nbsp;&nbsp;";
                // echo "page $page_size &nbsp;&nbsp;";
                //previous page 
                if($page>1){
                    $prepage=$page-1;
                    echo "<a href='?curpage=$prepage'>previous page </a>&nbsp;&nbsp;";
                }
                //next page  
                if($page<$maxpage){
                    $nextpage=$page+1;
                    echo "<a href='?curpage=$nextpage'>next page </a>&nbsp;&nbsp;";
                }
                echo "&nbsp;&nbsp;page $page </p>";

                }
                }

                ?>
            </td></tr>
        <tr>
            <td colspan="7"><a href="" onclick="return chek()">Select All/Cancel </a> &nbsp;&nbsp;<input type="submit" onclick="return del();" value="Delete Selection"/></td>
        </tr>
    </table>
    </form>
</div>
    <?php
}else{
    echo "<script>alert('No permission to access the interface');location.href='login.php';</script>";
}
?>
</body>
</html>

