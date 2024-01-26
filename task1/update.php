

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Page</title>
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
        }
        body {
            height: auto;

        }
		
		label {
		  display: inline-flex;
		  align-items: center;
		}


		
		
        table {
            margin: 0 auto;
            width: 60%;
            text-align: center;
            border-spacing: 0;
            padding-bottom: -20px;

        }
        header {
            display: flex;
            flex-flow: row nowrap;
            justify-content: space-between;
        }
        header h1 {
            color: #9a9897;
        }
        header hr {
            margin: 20px 20px 0;
            background-color: #bc9470;
            border: 2px solid #bc9470;
            width: 30%;
            height: 0;
        }
        main #adbt {
            margin-left: 70px;
            margin-top: 20px;
        }
        main button {
            margin: 20px 5px;
            width: 38px;
            height: 35px;
            color: white;
        }
        main button.buttons {
            width: 40px;
            height: 30px;
            border: none;
            margin-left: -10px;
            margin-right: -10px;
            color: white;
            text-align: center;
            background-image: linear-gradient(to right, #c979d4,#fa719d);
            border-radius: 5px;
        }
        .nav {
            width: 1000px;
            height: 60px;
            border: #606266 1px solid;
            border-radius: 10px;
            background-color: rgba(125, 126, 127, 0.03);
            margin: 50px auto 0 auto;
        }
        .nav ul li {
            list-style: none;
            width: 90px;
            height: 60px;
            float: left;
            text-align: center;
            line-height: 60px;
        }
        .left {
            float: left;
        }
        .juzhong {
            line-height: 60px;
            margin-left: 8px;
            color: #788080;
        }
        .nav-yong {
            width: 230px;
            height: 60px;
            line-height: 60px;
            margin-left: 250px;
        }
        .nav-yong a button {
            width: 70px;
            height: 30px;
            border: none;
            margin-left: 40px;
            color: white;
            text-align: center;
            background-image: linear-gradient(to right, #c979d4,#fa719d);
            border-radius: 5px;
        }
        a{
            text-decoration: none;
            color: #606266;
        }
        a:hover {
            color: red;
        }
        .Login {
            width: 630px;
            height: 540px;
            position: fixed;
            top: 111px;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            padding-top: 20px;
            box-shadow: 0 0 5px rgba(0,0,0,0.4);
        }
        label {
            display: block;
        }
        form {
            margin: 10px 140px;
        }
        h2 {
            text-align: center;
            font-size: 25px;
            color: #606266;
        }
        .put {
            width: 220px;
            height: 30px;
            background: transparent;
            margin-top: 25px;
            border: none;
            border-bottom: 1px wheat solid;
            outline: none;
            color: #606266;
            font-size: 17px;
        }
        input::-webkit-input-placeholder {
            color: #2aabd2;
        }
        .tijiao {
            float: left;
            width: 100px;
            height: 30px;
            border: none;
            margin-left: 20px;
            color: white;
            margin-top: 20px;
            text-align: center;
            background-image: linear-gradient(to right, #c979d4,#fa719d);
            border-radius: 20px;

        }
        .tijiaos {
            float: right;
            width: 100px;
            height: 30px;
            border: none;
            margin-right: 100px;
            color: white;
            margin-top: 20px;
            text-align: center;
            background-image: linear-gradient(to right, #c979d4,#fa719d);
            border-radius: 20px;
        }

        span {
            font-size: 15px;
        }
        .shang {
            margin-top: 40px;
        }
        #blankCheckbox {
            width: 15px;
            margin-left: 20px;
        }
        table tr td{
            background-color: #e9e9e9;

        }


    </style>
</head>
<body>
<?php
// 连接数据库
$con = mysqli_connect("localhost", "root", "", "school");
if (mysqli_connect_errno()) {
    echo "连接 MySQL 失败：" . mysqli_connect_error();
    exit();
}

// 设置字符集
mysqli_query($con, "set names utf8");

// 获取要修改的学生 ID
$id = $_GET['id'];

// 查询对应学生的信息
$data = mysqli_query($con, "select * from studentinfo where `Student Id`=" . $id);

// 如果查询结果不为空，则将学生信息显示在修改页面上
if ($row = mysqli_fetch_assoc($data)) {
?>
<?php
} else {
    // 如果查询结果为空，则提示未找到对应学生
    echo "there has no consponding information。";
}

// 关闭数据库连接
mysqli_close($con);
?>
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
            <td><a href="cha.php">Query information </a></td>
            <td><a href="loginout.php"><button class="buttons" type="button">exit </button></a></td>
        </tr>

    </table>
</main>

<div class="Login">
    <h2>Modify student information</h2>
    <form action="doUpdate.php" method="post">


        <label>
           <!-- <span>Student Id </span>
             <input type="hidden" class="put" name="id" value="<?php echo $row['Student Id']; ?>" readonly> -->
        </label>
        <label>
            <span>Name</span>
            <input type="text" class="put" name="Name" placeholder="Name" value="<?php echo $row['Name']; ?>">
        </label>
       <!-- <label>
			<span>Gender</span>
			<input type="radio" id="male" name="Gender" value="male" <?php if ($row['Gender'] == 'm') echo 'checked'; ?>>
			<label for="male">male</label>
			<input type="radio" id="female" name="Gender" value="female" <?php if ($row['Gender'] == 'f') echo 'checked'; ?>>
			<label for="female">female</label>
		
		</label> -->
		<label>
		  <input type="radio" id="male" name="Gender" value="male" <?php if ($row['Gender'] == 'm') echo 'checked'; ?>>
		  <span>male</span>
		</label>
		<label>
		  <input type="radio" id="female" name="Gender" value="female" <?php if ($row['Gender'] == 'f') echo 'checked'; ?>>
		  <span>female</span>
		</label>

		
		
		
        <label>
            <span>Age</span>
            <input type="text" class="put" name="Age" placeholder="Age" value="<?php echo $row['Age']; ?>">
        </label>
        <label>
            <span>College</span>
              <input type="text" class="put" name="College" placeholder="College" value="<?php echo $row['College']; ?>">
        </label>
        <label>
            <span> Number</span>
           <input type="text" class="put" name="Number" placeholder="Number" value="<?php echo $row['Number']; ?>">
        </label>
       
        <input type="hidden" name="id" value="<?php echo $id?>">
        <button class="tijiao" type="submit" value="add">submit</button>
         <button class="tijiaos" type="reset" value="reset">reset</button>
    </form>
</div>

</body>
</html>





