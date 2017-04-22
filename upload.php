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
date_default_timezone_set("Asia/Kolkata");
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
<html>

    <head><title>Upload a File</title>
    <link rel="stylesheet" href="d.css">
    </head>
   
    
    <body>
    <form action='' method='POST' enctype="multipart/form-data" >
        
        
       
        <center> <b> Financial Year</b> <input type="number" name="year" min="1996" max="2999" ><br><br>
        <input type="file" align="center" class="ab" align="center" name="fileToUpload" id="fileToUpload"><br><br>
        <input type="submit" class="abc" value="Upload pdf" name="submit">&nbsp;&nbsp;
        
        <a href="view.php" title="View pdf"><input type="button" class="abc" name="View" value="View Previous"></a><br><br>
        <button name="lout">Log out</button> </center>
        
       </form>

    <?php
        
$user = $_SESSION['uname'];
$year = $_POST['year'];

$target_Path = "pdf/";
//$target_Path = $target_Path.basename( $_FILES['fileToUpload']['name'] );
   
$info = pathinfo($_FILES['fileToUpload']['name']);
$ext = $info['extension']; // get the extension of the file

if ($ext!=='pdf' && strlen($ext)>1) 
        echo "<script>alert('error!!not in pdf format');</script>";

else{


$newname = $_SESSION['uname'].'_'.$year.'_'.date("his"). '.' .$ext; 
//$newname = "rs.".$ext; 
$target = $target_Path.$newname;

$tmpFilePath = $_FILES['fileToUpload']['tmp_name'];
$moved=move_uploaded_file($tmpFilePath, $target);

if ($moved){
            echo "<script>alert('File Uploaded Successfully');</script>";
        } else {
            ?><script>alert('Upload only pdf file:)');</script><?php
        } 
  } 
 // echo "$year";
  if($year>1996)
  { 
    $table  = 'itax';
    $sql1 = "ALTER TABLE $table ADD data$year VARCHAR( 255 ) NOT NULL";
    $query_run1= mysqli_query($con,$sql1);
    $sql2 = "UPDATE $table SET data$year = '$target' WHERE USERNAME = '$user'";
    $query_run2= mysqli_query($con,$sql2);
    $col='data$year';   //to use in view page to retrieve the document

    //echo "hello";

  }
//move_uploaded_file( $_FILES['fileToUpload']['tmp_name'], $target_Path );
        
        
      /*  $sql = "SHOW COLUMNS FROM '$table'";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result)){
echo $row['Field']."<br>";
}
        
    
        */
mysqli_close($con);
?>

    </body>
</html>

