<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<head>
    <meta charset="UTF-8">
    <title>Register and Login</title>
    <style type="text/css">
        html,body{
            height: 100%;
        }
        body{

            background: #006666;
            position:fixed;
            top: 0;
            left: 0;
            width: 100%;
            height : 100%;
            min-width: 1000px;
            background-repeat: no-repeat;
            background-size: cover;
           
        
        }
        h1{
            color:#fff;
            text-align: center;
        }
        .container{
            margin: 100px auto;
            width: 30%;
        }
        form{
            background: #FFF;
            height: 300px;
            width: 100%;
            border-radius: 10px;
            position: relative;
        }
        label{
            color: #000;
            font-weight: bold;
            font-size: 20px;
            margin-left: 40px;
        }
        .one{
            margin-left: 24px;

        }
        .three{
           margin-left: 30px;
        }
        .two{
            margin-left: 27px;
        }
        input{
            text-align: left;
            margin: 10px;
        }
        .input{
            background-color: lightgray;
            border-radius: 18px;
            width: 250px;
            height: 35px;
            margin-left: 40px;
            border: none;
            outline: none;
            text-indent: 1em;
        }
        #ss{
            /*border-radius: 5px;*/
            margin-left: 30px;
            width: 100px;
            height: 35px;
            background-color: lightgray;
            border: none;

            text-indent: 0.5em;
        }
        .checkbox{
            margin-left: 13px;
        }
        a{
            text-decoration: none;
            font-weight: bold;
        }
        .submit{
            display: inline-block;
            margin-top: 0;
            margin-left:185px;
            background: #000;
            border: none;
            color: #FFF;
            height: 35px;
            width: 100px;
            text-align: center;
            font-weight: bold;
            border-radius: 5px;
        }
        .left{
            margin: 20px;
        }
        .right{
            position: absolute;
            right: 20px;
        }
</style>
            </head>

<body>
<div class="container">
    <h1>Student Information Management System</h1>
    <form action="logincheck.php" method="post">
        <br>
        <label  for="username" class="one">username:</label>
        <input type="text" name="username" id="username" class="input" value="" /><br>
        <label for="pwd" class="three">password:</label>
        <input type="password" name="password" id="pwd" class="input" value="" /><br>







        <div class="checkbox">
            <input type="checkbox" name=""/>
            <span>remember password </span>
        </div>
        <input type="submit" class="submit" value="login"/>
        <br>
    </form>
</div>
</body>
</html>
