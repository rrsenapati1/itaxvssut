<?php
session_start();
if(isset($_SESSION['uname'])) 
echo "current session: " . $_SESSION['uname'];
require_once 'dbconfig/config.php';

?>
   <?php
        
        if(isset($_POST ["lo"]))
        {
            session_destroy();
            header('location:index.php');
        }
        ?>

<html><head><title>Confirmation Page</title><link rel="stylesheet" href="b.css"></head>
    <body>
        <center><h2>Confirmation Page</h2></center>
        
     <form class="myform" action="" method="post">       
    <center>
    <table>
        <tr>
            <th colspan="2">1. Income from salary</th>
            
        </tr>
        <tr>
            <th>a.Pay+Arrear Pay: </th>
            <td><?php echo $_POST ["ab"] ?></td>
        </tr>
        <tr>
            <th>b.G.P./D.P + Arrear G.P./D.P.:</th>
            <td><?php echo $_POST ["bc"] ?></td>
        </tr>
        <tr>
            <th>c.H.R.A. + Arrear H.R.A:</th>
            <td><?php echo $_POST ["cd"] ?></td>
        </tr>
        <tr>
            <th>d.D.A. + ADA:</th>
            <td><?php echo $_POST ["de"] ?></td>
        </tr>
        <tr>
            <th>e.Incentive Allowance:</th>
            <td><?php echo $_POST ["ef"] ?></td>
        </tr>
        <tr><th colspan="2" >Income Tax</th> </tr>
        <tr>
            <th>Total Taxable Income</th>
            <td><?php echo $_POST ["qpb"] ?></td>
        </tr>
        <tr>
            <th>Tax Payable</th>
            <td><?php echo $_POST ["tp"] ?></td>
        </tr>
         <tr>
            <th>Tax Paid</th>
            <td><?php echo $_POST ["taxpname"] ?></td>
        </tr>
         <tr>
            <th>Payable in Jan</th>
            <td><?php echo $_POST ["jan"] ?></td>
        </tr>
         <tr>
            <th>Payable in Feb</th>
            <td><?php echo $_POST ["feb"] ?></td>
        </tr>
        </table></center><br><hr>
           
           
            <center><a href="upload.php" title="Upload pdf"><button type="button">Upload</button></a></center>
         <center><a>(If you want to store the pdf for future reference)</a></center> <br>
        
            
        <center><button type="button" onClick="window.print()">Print this page</button></center><br>
                <center><button name="lo">Log out</button> </center><br><hr>
     
        </form>
        
    </body>
</html>