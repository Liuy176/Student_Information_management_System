<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/a.css">
    <title>Untitled Document</title>
</head>
<body>
<div>
    <header>
        <hr/>
        <h1>Student Information Management System</h1>
        <hr/>
    </header>
    <main>

        <div id="adbt">
        </div>


        <table width="900" border="1" align="center">

            <tr>
                <!--                <td class="s">--><?php ?><!--</td>-->
                <td><a href="SelectAll.php">Browse student information</a></td>
                <td><a href="add.php">Add information</a></td>
                <td><a href="edit.php">Edit information </a></td>
                <td><a href="deleteall.php">Modify information</a></td>
                <td><a href="loginout.php"><button class="buttons" type="button">exit </button></a></td>
            </tr>
            <tr>
                <td colspan="7"><h2>Student information display</h2></td>
            </tr>
        </table>

        <table>
            <?php
            include_once("untils/conn.php");
            // 
            mysqli_query($con,"set names utf8");
            if($con){
            //选择数据库
            $db=mysqli_select_db($con,"school");
            if($db){
            //acquire the column of total info
            $sql="select * from studentinfo";
            $data = mysqli_query($con,$sql);
            $maxrows = mysqli_num_rows($data);

            //caculate total page number

            $page_size = 3;  //display per page
            if($maxrows%$page_size == 0){
                $maxpage = (int)($maxrows/$page_size);
            }else{
                $maxpage = (int)($maxrows/$page_size)+1;
            }

            //acquire current data
            if(isset($_GET['curpage'])){
                $page = $_GET['curpage'];
            }else{
                $page=1;
            }

            //Fetch data
            $start = $page_size*($page-1);
            $get_sql = "select * from studentinfo limit $start,$page_size";
            //get data display
            $data=mysqli_query($con,$get_sql);
            ?>

            <tbody>
            <tr id="thead">

                <td class="d" colspan="2" align="center">Student Id</td>
                
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
                    <td><input type="checkbox"></td>
                    <td><?php echo $row["Student Id"] ?></td>
                    <td><?php echo $row["Name"] ?></td>
                    
                    <td><?php echo $row["Gender"] ?></td>
                    <td><?php echo $row["Age"] ?></td>
                    <td><?php echo $row["College"] ?></td>
                    <td><?php echo $row["Number"] ?></td>
                    


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
                //设置previous page 
                if($page>1){
                    $prepage=$page-1;
                    echo "<a href='?curpage=$prepage'>previous page </a>&nbsp;&nbsp;";
                }
                //设置next page  
                if($page<$maxpage){
                    $nextpage=$page+1;
                    echo "<a href='?curpage=$nextpage'>next page </a>&nbsp;&nbsp;";
                }
                echo "&nbsp;&nbsp;page $page </p>";

                }
                }

                ?>
            </td></tr>
    </table>
</div>

</body>
</html>

