<?php
session_start();
if(isset($_SESSION['uname'])) 
echo "current session: " . $_SESSION['uname'];
else
{
echo "not logged in";
$_SESSION['uname']="guest";
}
require_once 'dbconfig/config.php';

?>
<?php
        /*if(isset($_POST ["upload"]))
        {
            echo "fdsfdf";
        }*/
        if(isset($_POST ["lout"]))
        {
            session_destroy();
            header('location:index.php');
        }

        ?>   
<?php
    $user=$_SESSION['uname'];
 $sql="SELECT * FROM itax where username='$user'";
 //$result_set=mysqli_query($sql);
// $row=mysqli_fetch_array($result_set);
 $result = $con->query($sql);
 $row = $result->fetch_assoc();
  ?>

<html>
<head>
<title>User Database</title>
<link rel="stylesheet" href="b.css"/>
</head>
 
<body>
<div id="header">
<center>User Database</center>
</div>
<div id="body">
<form class="myform" action="" method="post"> 
 <table align="center" width="80%" border="1">
    <tr>
    <th colspan="4">your uploads!!</th>
    </tr>
    
    <tr>
    <td>2016</td>
    <td>2017</td>
    <td>2018</td>
    <td>2019</td>
    </tr>
   
    <tr>
    <td><a href="<?php echo $row['data2016'] ?>" target="_blank" ><?php echo $row['data2016'] ?></a></td>
    <td><a href="<?php echo $row['data2017'] ?>" target="_blank" ><?php echo $row['data2017'] ?></a></td>
    <td><a href="<?php echo $row['data2018'] ?>" target="_blank" ><?php echo $row['data2018'] ?></a></td>
    <td><a href="<?php echo $row['data2019'] ?>" target="_blank" ><?php echo $row['data2019'] ?></a></td>
    </tr>
    
    </table><br><br>
    <center><a href="upload.php"><input type="button" class="abc" name="upload" value="Upload more"></a><br><br>
    <button name="lout">Log out</button> </center>
    <?php mysqli_close($con); ?>
</form>
</div>

</body>
</html>