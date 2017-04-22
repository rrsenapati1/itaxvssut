<?php
session_start();
require_once 'dbconfig/config.php';
?>



<!DOCTYPE html>
<html>
    <head>
    <title>Login page</title>
        <link rel="stylesheet" href="home.css">
        <div id="heading">
        <h1><center><u>Income Tax Calculation</u></center></h1>
            <h3><center>Veer Surendra Sai University Of Technology,Burla</center></h3>
        </div>
    </head>
    <body style="background-color:#34495e">
        <div id="mainform">
           <center> <img src="vssut.jpg" class="avatar" /></center>
    <form class="myform" action="index.php" method="post">
    
    <br><b>Username:</b><br><input type="text" class="ip" name="uname" required/><br>
    <br><b>Password:</b><br><input type="password" class="ip" name="pass" required/><br><br>
    
        <center><input type="submit" class="sub" name="login" value="Login"></center><br>
        <center><a href="register.php"><input type="button" class="bck" name="signup" value="Register"></a></center>
    </form>
        </div>
        <?php
    if(isset($_POST['login']))
     {
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];
          $query="select * from itax WHERE USERNAME='$uname' AND PASSWORD='$pass'";
        
        $query_run = mysqli_query($con,$query);
        
        if(mysqli_num_rows($query_run)>0)
        {
            $_SESSION['uname']= $uname;
            header('location:hpage.php');
        }
        else
        {
            echo "<script type='text/javascript'>alert('Invalid credentials! Try again');</script>";
        }
    }
        ?>
    </body>
</html>