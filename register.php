<?php
require_once 'dbconfig/config.php';
$flag=0;

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $uname=$_POST['uname'];
    $eno=$_POST['eno'];
    $dsgn=$_POST['dsgn'];
    $dept=$_POST['dept'];
    $pan=$_POST['pan'];
    $mob=$_POST['mob'];
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];
    if($pass==$cpass)
    {
        $query= "select * from itax WHERE USERNAME='$uname'";
        $query_run= mysqli_query($con,$query);
        $query1= "select * from itax WHERE EMPNO='$eno'";
        $query_run1= mysqli_query($con,$query1);
        if((mysqli_num_rows($query_run)>0)||(mysqli_num_rows($query_run1)>0))
        {
            if(mysqli_num_rows($query_run)>0)
            {echo "<script type='text/javascript'>alert('User already exists! Try different username');</script>";
            $query_run=0;
            }
            else
            {echo "<script type='text/javascript'>alert('User already exists! Try different employee no.');</script>";
            $query_run1=0;
            }
        }
        
        else if((strlen($name)>20)||(strlen($uname)>10)||(strlen($dept)>10)||(strlen($dsgn)>30)||(strlen($eno)>10)||(strlen($pass)>10)||(strlen($mob)>10)||(strlen($pan)>10))
        {
            if(strlen($name)>20)
            {
             $flag=$flag + 1;
                            echo "<script type='text/javascript'>alert('name limit exceeded');</script>";

            }
            if(strlen($uname)>10)
            {
             $flag=$flag + 1;
                            echo "<script type='text/javascript'>alert('username limit exceeded');</script>";

            }
            if(strlen($dept)>10)
            {
             $flag=$flag + 1;
                            echo "<script type='text/javascript'>alert('department limit exceeded');</script>";

            }
            if(strlen($dsgn)>30) 
            {
             $flag=$flag + 1;
                            echo "<script type='text/javascript'>alert('designation limit exceeded');</script>";

            }
            if(strlen($eno)>10)
            {
             $flag=$flag + 1;
                            echo "<script type='text/javascript'>alert('Invalid employee no.');</script>";

            }
            if(strlen($pass)>10)
            {
             $flag=$flag + 1;
                            echo "<script type='text/javascript'>alert('password limit exceeded');</script>";

            }
            if(strlen($mob)>10)
            {
             $flag=$flag + 1;
                            echo "<script type='text/javascript'>alert('mobile limit exceeded');</script>";

            }
            if(strlen($pan)>10)
            {
                $flag=$flag + 1;
                            echo "<script type='text/javascript'>alert('pan limit exceeded');</script>";

            }
            }
        else
            {
                $query= "insert into itax values($eno,'$uname','$name','$dsgn','$dept','$pass','$pan','$mob')";
                $query_run= mysqli_query($con,$query);
        }
        if($query_run==TRUE && $flag==0 && $query_run1==TRUE)
        {                        //echo "<script type='text/javascript'>alert('$flag');</script>";

            //header('location:index.php');
                        echo "<script type='text/javascript'>alert('User Registered!Login to proceed further');</script>";

        }
        else{
            echo "<script type='text/javascript'>alert('Error!Please Try again');</script>";
        }
    }else
    {
        //$message = "wrong answer";
        echo "<script type='text/javascript'>alert('Passwords doesnt match!Please Try again');</script>";
        //echo "<script type='text/javascript'>alert("Passwords doesnt match");<\script>";
    }
} 

?>

<!DOCTYPE html>
<html>
    <head>
    <title>Registration page</title>
        <link rel="stylesheet" href="reg.css">
    </head>
    <body style="background-color:#2c3e50">
        <div id="mainform">
            <h1><center>Registration Form</center></h1>
            <center><p style="color:red"><i>*all the fields are mandatory</i></p></center>
    <form class="myform" action="register.php" method="post">
    <br><b>Name:</b><input type="text" class="ip" name="name" required/><br><span style="color:grey">*maximum 20 characters</span><br>
    <br><b>Username:</b><input type="text" class="ip" name="uname" required/><br><span style="color:grey">*maximum 10 characters</span><br>
    <br><b>Employee no.:</b><input type="number" class="ip" name="eno" required/><br><span style="color:grey">*maximum 10 characters</span><br>
    <br><b>PAN:</b><input type="text" class="ip" name="pan" required/><br><span style="color:grey">*maximum 10 characters</span><br>
    <br><b>Mobile no.:</b><input type="number" class="ip" name="mob" required/><br><span style="color:grey">*maximum 10 characters</span><br>
    <br><b>Password:</b><input type="password" class="ip" name="pass" required/><br><span style="color:grey">*maximum 10 characters</span><br>
    <br><b>Confirm Password:</b><input type="password" class="ip" name="cpass" required/><br><span style="color:grey">*maximum 10 characters</span><br>
    <br><b>Department:</b><input type="text" class="ip" name="dept" required/><br><span style="color:grey">*maximum 10 characters</span><br>
        <br><b>Designation:</b><input type="text" class="ip" name="dsgn" required/><br><span style="color:grey">*maximum 30 characters</span><br><br><br>
        
        <center><input type="submit" class="sub" name="submit" value="Sign Up"></center><br>
        <center><a href="index.php"><input type="button" class="bck" name="login" value="Back to Login"></a></center>
        
    </form>
            </div>

    </body>
</html>