<?php
session_start();
if(isset($_SESSION['uname'])) 
echo "current session: " . $_SESSION['uname'];

require_once 'dbconfig/config.php';
?>

<?php
            if(isset($_POST['submit']))
            
                header('location:success_new.php');
        
        
           /* else if(isset($_POST ["lou"]))
        {
            mysqli_close($con); 
            session_destroy();
            header('location:index.php');
        }*/
        
            ?>


<html>
    <head><title>Income Tax</title>
    <link rel="stylesheet" href="b.css">
    </head>
    
     
    <script type="text/javascript">
  /*  function calculate()
    {
     document.getElementById('q').onkeydown = function(e){
               e.preventDefault();
            }
            document.getElementById('q').oncut = function(e){
               e.preventDefault();
            }
            document.getElementById('q').onpaste = function(e){
                e.preventDefault();
            }  

            return false; 
    }
*/
    function validate()
    {
       // setTimeout(function() {window.location="success.php"});    
    }
    function calculate1()
        {
            var a=parseInt(document.it.ab.value);
            var b=parseInt(document.it.bc.value);
            var c=parseInt(document.it.cd.value);
            var d=parseInt(document.it.de.value);
            var e=parseInt(document.it.ef.value);
            var f=parseInt(document.it.fg.value);
            var g=parseInt(document.it.gh.value);
            var total=a+b+c+d+e+f+g;
            document.it.total.value=total;
            
             document.getElementById('p').onkeydown = function(e){
                      if (e.keyCode == 9 || e.which == 9);
                 else 
                         e.preventDefault();
            }
            document.getElementById('p').oncut = function(e){
               e.preventDefault();
            }
            document.getElementById('p').onpaste = function(e){
                e.preventDefault();
            }  
            
            return false;
            
         } 
    function calculate2()
    {
            var a=parseInt(document.it.rent.value);
            var b=parseInt(document.it.pro.value);
            var c=parseInt(document.it.sup.value);
            var d=parseInt(document.it.per1.value);
            var e=parseInt(document.it.profit.value);
            var gross=parseInt(document.it.total.value)+a+b+c+d+e;
            
            document.it.gross.value=gross;
            document.getElementById('q').onkeydown = function(e){
                 if (e.keyCode == 9 || e.which == 9);
                 else 
                         e.preventDefault();
            }
            document.getElementById('q').oncut = function(e){
               e.preventDefault();
            }
            document.getElementById('q').onpaste = function(e){
                e.preventDefault();
            }  
            return false;
    }
    function calculate3()
    {
            var a=parseInt(document.it.less.value);
            var b=parseInt(document.it.ent.value);
            var c=parseInt(document.it.less1.value);
            var d=parseInt(document.it.pro2.value);
            var e=parseInt(document.it.con.value);
            var sum=a+b+c+d+e;
            var inc1=parseInt(document.it.gross.value)-sum;
            
            
            document.it.inc1.value=inc1;
            document.getElementById('r').onkeydown = function(e){
                 if (e.keyCode == 9 || e.which == 9);
                 else 
                         e.preventDefault();
            }
            document.getElementById('r').oncut = function(e){
               e.preventDefault();
            }
            document.getElementById('r').onpaste = function(e){
                e.preventDefault();
            }  
            return false;
    }
    function calculate4()
    {
            var a=parseInt(document.it.qp.value);
            var b=parseInt(document.it.rem.value);
            var c=parseInt(document.it.lottery.value);
            var d=parseInt(document.it.nps.value);
            var total=a+b+c+d;
            document.it.other.value=total;
            document.getElementById('s').onkeydown = function(e){
                if (e.keyCode == 9 || e.which == 9);
                 else 
                         e.preventDefault();
            }
            document.getElementById('s').oncut = function(e){
               e.preventDefault();
            }
            document.getElementById('s').onpaste = function(e){
                e.preventDefault();
            }  

            return false;
    }
    function calculate5()
    {
            var a=parseInt(document.it.inc1.value);
            var b=parseInt(document.it.other.value);
            var c=parseInt(document.it.q9.value);
            var total=a+b+c;
            document.it.q10.value=total;
            document.getElementById('a').onkeydown = function(e){
                 if (e.keyCode == 9 || e.which == 9);
                 else 
                         e.preventDefault();
            }
            document.getElementById('a').oncut = function(e){
               e.preventDefault();
            }
            document.getElementById('a').onpaste = function(e){
                e.preventDefault();
            }  

            return false;
    }
    function calculate6()
    {
            var a=parseInt(document.it.q11.value);
            var b=parseInt(document.it.q11a.value);
            var total=a+b;
            document.it.q11b.value=total;
            document.getElementById('b').onkeydown = function(e){
                 if (e.keyCode == 9 || e.which == 9);
                 else 
                         e.preventDefault();
            }
            document.getElementById('b').oncut = function(e){
               e.preventDefault();
            }
            document.getElementById('b').onpaste = function(e){
                e.preventDefault();
            }  

            return false;
    }
     function calculate7()
    {
            var a=parseInt(document.it.gpf.value);
            var b=parseInt(document.it.gis.value);
            var c=parseInt(document.it.lic.value);
            var d=parseInt(document.it.nsc.value);
            var e=parseInt(document.it.insur.value);
            var f=parseInt(document.it.house.value);
            var g=parseInt(document.it.ppf.value);
            var h=parseInt(document.it.tuition.value);
            var i=parseInt(document.it.ccc.value);
            var j=parseInt(document.it.ccd.value);
            var k=parseInt(document.it.cce.value);
            var l=parseInt(document.it.ccf.value);
            var total=a+b+c+d+e+f+g+h+i+j+k+l;
            document.it.total11v.value=total;
            document.getElementById('c').onkeydown = function(e){
                 if (e.keyCode == 9 || e.which == 9);
                 else 
                         e.preventDefault();
            }
            document.getElementById('c').oncut = function(e){
               e.preventDefault();
            }
            document.getElementById('c').onpaste = function(e){
                e.preventDefault();
            }  

            return false;
    }
    function calculate8()
    {
            var a=parseInt(document.it.ddd.value);
            var b=parseInt(document.it.dde.value);
            var c=parseInt(document.it.ddf.value);
            var d=parseInt(document.it.ddg.value);
            var e=parseInt(document.it.ddh.value);
            var f=parseInt(document.it.ddi.value);
            var total=a+b+c+d+e+f;
            document.it.abcdef.value=total;
            document.getElementById('d').onkeydown = function(e){
                 if (e.keyCode == 9 || e.which == 9);
                 else 
                         e.preventDefault();
            }
            document.getElementById('d').oncut = function(e){
               e.preventDefault();
            }
            document.getElementById('d').onpaste = function(e){
                e.preventDefault();
            }  

            return false;
    }
    function calculate9()
    {
            var a=parseInt(document.it.q11b.value);
            var b=parseInt(document.it.total11v.value);
            var c=parseInt(document.it.dedund.value);
            var d=parseInt(document.it.abcdef.value);
            var total=a+b+c+d;
            document.it.qpa.value=total;
            document.getElementById('e').onkeydown = function(e){
                 if (e.keyCode == 9 || e.which == 9);
                 else 
                         e.preventDefault();
            }
            document.getElementById('e').oncut = function(e){
               e.preventDefault();
            }
            document.getElementById('e').onpaste = function(e){
                e.preventDefault();
            }  

            return false;
    }
    function calculate10()
    {
            var a=parseInt(document.it.q10.value);
            var b=parseInt(document.it.qpa.value);
            var total=a-b;
            document.it.qpb.value=total;

            if((total%10)>5)
                total+=10-(total%10);
            else
                total-=(total%10);
            document.it.qpc.value=total;
            //rebate is considered to be 5000 for those whose income is inbetween 2.5 lakh to 5 lakh
            //for all others rebate is considered to be 0..it will be changed later as per the actual rule
            if(total<=250000)
            { 
                document.it.qpd.value=(document.it.qpc.value)*0;
                document.it.five.value=(document.it.qpc.value)*0;
                document.it.ten.value=(document.it.qpc.value)*0;
                document.it.aboveten.value=(document.it.qpc.value)*0;
                document.it.rebate.value=(document.it.qpc.value)*0;
            }
            else if(total>250000 && total<=500000)
            {
                   document.it.five.value=(total-250000)*0.1;
                   document.it.ten.value=((document.it.qpc.value)-250000)*0;
                   document.it.aboveten.value=((document.it.qpc.value)-250000)*0;
                   document.it.rebate.value=5000;
                   document.it.qpd.value=(document.it.five.value)-(document.it.rebate.value);
            }
            else if(total>500000 && total<=1000000)
            {
                   document.it.five.value=25000; 
                   document.it.ten.value=(((document.it.qpc.value)-500000)*0.2); 
                   document.it.aboveten.value=(((document.it.qpc.value)-500000)*0); 
                   document.it.rebate.value=(((document.it.qpc.value)-500000)*0); 
                   document.it.qpd.value=(document.it.five.value)+(document.it.ten.value);
            }
             else
                {
                   document.it.five.value=25000; 
                   document.it.ten.value=100000; 
                   document.it.aboveten.value=(((document.it.qpc.value)-1000000)*0.3); 
                   document.it.rebate.value=(((document.it.qpc.value)-1000000)*0); 
                   document.it.qpd.value=(document.it.five.value)+(document.it.ten.value)+(document.it.aboveten.value);
                }   
            //document.it.qpd.value=(document.it.qpc.value)*0.1;
            document.it.educess.value=parseInt((document.it.qpd.value)*0.03);
            document.it.taxpay.value=parseInt(document.it.qpd.value)+parseInt(document.it.educess.value);

            document.getElementById('f').onkeydown = function(e){
                 if (e.keyCode == 9 || e.which == 9);
                 else 
                         e.preventDefault();
            }
            document.getElementById('f').oncut = function(e){
               e.preventDefault();
            }
            document.getElementById('f').onpaste = function(e){
                e.preventDefault();
            }  

            return false;
    }
    function calculate11()
    {
            var a=parseInt(document.it.taxpay.value);
            var b=parseInt(document.it.relief.value);
            var total=a-b;
            document.it.tp.value=total;
             

            document.getElementById('g').onkeydown = function(e){
                if (e.keyCode == 9 || e.which == 9);
                 else 
                         e.preventDefault();
            }
            document.getElementById('g').oncut = function(e){
               e.preventDefault();
            }
            document.getElementById('g').onpaste = function(e){
                e.preventDefault();
            }  

            return false;
    }
    function calculate12()
    {
            var a=parseInt(document.it.tp.value);
            var b=parseInt(document.it.taxpname.value);
             document.it.balp.value=a-b;
            
             
              var d=parseInt(document.it.jan.value);
              document.it.feb.value=document.it.balp.value-d;

            document.getElementById('h').onkeydown = function(e){
                 if (e.keyCode == 9 || e.which == 9);
                 else 
                         e.preventDefault();
            }
            document.getElementById('h').oncut = function(e){
               e.preventDefault();
            }
            document.getElementById('h').onpaste = function(e){
                e.preventDefault();
            }  
            document.getElementById('i').onkeydown = function(e){
                 if (e.keyCode == 9 || e.which == 9);
                 else 
                         e.preventDefault();
            }
            document.getElementById('i').oncut = function(e){
               e.preventDefault();
            }
            document.getElementById('i').onpaste = function(e){
                e.preventDefault();
            }  

            return false;
    }
    </script>


    <body>
        
        <div class="container">     
            <div class="header">
    <h1><center><u>Income Tax Calculation</u></center></h1> 
    <center><h2><b>Declaration Form for Financial Year 2016-17</b></h2></center>
    <center><h3> Veer Surendra Sai University Of Technology,Burla</h3></center>
        </div>
        <?php
        $uname=$_SESSION['uname'];
        $sql = "SELECT EMPNO, NAME, DESIGNATION, DEPT,PAN,MOB FROM itax WHERE USERNAME='$uname'";
        $result = $con->query($sql);
        $row = $result->fetch_assoc();
        $eno=$row["EMPNO"];
        $name=$row["NAME"];
        $dsgn=$row["DESIGNATION"];
        $dept=$row["DEPT"];
        $pan=$row["PAN"];
        $mob=$row["MOB"];
        ?>   
        <div class="table1"><center>
    <table border=3px > 
    <tr>
        <th><b>EMP NO.:</b></th> 
        <td><?php echo $eno ?></td>
        <th><b>NAME:</b></th>
        <td><?php echo $name ?></td>
    </tr>
    
    <tr>
        <th><b>DESIGNATION:</b></th>
        <td><?php echo $dsgn ?></td>
        <th><b>DEPARTMENT:</b></th>  
        <td><?php echo $dept ?></td>
    </tr>
     <tr>
    <th><b>PAN:</b></th>
        <td><?php echo $pan ?></td>
        <th><b>MOBILE NO.:</b></th> 
        <td><?php echo $mob ?></td>
    </tr>
    </table></center>
        </div>
        <div class="form">
            <form name="it" method="post" action="success_new.php" >    
            
            <a href="logout.php"><button type="button" name="logout" style="float: right;">Log out</button><br></a>
        
       <center><h4><pre>*If a particular field is not applicable then enter 0(ZERO)</pre></h4></center>
        <center><u><a title="view pdfs" href="view.php"><pre>View Previous financial Years IT Return files!!</pre></a></u></center><br> 
        
        
        <b>1. Income from salary</b><br>
            <ol type="a">
                <li>Pay+Arrear Pay: <input type="number" name="ab" required/></li> 
                <li> G.P./D.P + Arrear G.P./D.P.:<input type="number" name="bc" required/></li>
                <li>H.R.A. + Arrear H.R.A:<input type="number" name="cd" required/></li>
                <li>D.A. + ADA:<input type="number" name="de" required/></li>
                <li>Incentive Allowance:<input type="number" name="ef" required/></li>
                <li>Honorarium/Rem:<input type="number" name="fg" required/></li> 
                <li>C.A./Others:<input type="number" name="gh" required/></li>
                <li>Total(a+b+c+d+e+f+g):<input type="number" name="total" id=p onfocus="return calculate1()" required/></li> 
            </ol>
            
            <b>2. Perquisities</b><br> 
            <b>a) <br></b>
            <ol type="a">
                <li>Rent Free Accomodation;<input type="number" name=rent required/></li>
                <li>Provision of Motor Car or any other Conveyance<br> for personal use of employee:<input type="number" name=pro required/></li>
                <li>Supply of Gas, Electricity & Water:<input type="number" name=sup required/></li></ol>
             <br><b>b) </b>Perquisites Under Section 17(2)<br>(as per Form No.12BA, whereever applicable):<input type="number" name=per1 required/><br>
            
            <b>3. Profit in lieu of salary Under Section 17(3)</b>;;<input type="number" name=profit required/><br>
            (as per Form No.12BA,whereever appliacable)<br>
            <b>4. Gross salary Income.(1 to 3)</b><input type="number" name=gross id=q onfocus="return calculate2()" required/><br>
            <b>5.Less allowance to the extent </b><br>&nbsp;&nbsp;&nbsp;exempt under section 10.<input type="number" name=less required/><br>
            6. <ol type="a">
            <li>Enteratainment Allowance<input type="number" name=ent required/></li>
            <li>Less Deduction u/s 16<input type="number" name=less1 required/></li>
            <li>Professional Tax in Full<input type="number" name=pro2 required/></li>
            <li>Conveyance Allowance<input type="number" name=con required/></li></ol>
            <b>7. Income Chargable under the head salaries 4-(5+6)<input type="number" name=inc1 id=r onfocus="return calculate3()" required/></b><br>
            
        <b>8.Any other income</b>
            <ol type="a">
            <li>Setting of Question papers<input type="number" name=qp required/></li>
                <li>Remunaration of additional activities<input type="number" name=rem required/></li>
                <li>Interest from Bank/Lottery<input type="number" name=lottery required/></li>
                <li>NPS(Employer's Contribution)<input type="number" name=nps required/></li>
                <li>Total other income<input type="number" name=other id=s onfocus="return calculate4()" required/></li>
            </ol>
        
         
        <b>9.Income from house property/Business or Profession/Capital Gains<input type="number" name="q9" required/></b></b><br>
             <b>10.Gross total income<input type="number" name="q10" id=a onfocus="return calculate5()" required/></b>
        <br>
        
        <b>11. Less deductions</b><ol type="a">
            <li>Housing Loans before April 1999<input type="number" name="q11" required/></li>
            <li>Housing Loans after April 1999<input type="number" name="q11a" required/></li>
            <li>Total<input type="number" name="q11b" id=b onfocus="return calculate6()" required/></li>
            </ol> 
        
        <b>12.Deductions under Chapter VI-A</b><br>
        <b>(i)Section 80C</b>
    <br>(a)G.P.F/C.P.F<input type="number" name="gpf" required/><br>
    <br>(b)G.I.S.<input type="number" name="gis" required/><br>

    <br>(c)L.I.C.(Deducted from salary)<input type="number" name="lic" required/><br>
    <br>(d)N.S.C./P.O. 5yrs.T.D./ELSS<input type="number" name="nsc" required/><br>
    <br>(e)Insurance Premiums: L.I.C./P.L.I./ULIP/S.B.I Life/Others<input type="number" name="insur" required/><br>
    <br>(f)House Building loan Principal repayment<input type="number" name="house" required/><br>
    <br>(g)P.P.F.<input type="number" name="ppf" required/><br>
    <br>(h)Tuition Fees<input type="number" name="tuition" required/><br>
    <b>(ii)Section 80CCC</b><input type="number" name="ccc" required/><br>
    <b>(iii)Section 80CCE</b><input type="number" name="ccd" required/><br>
    <b>(iv)80CCD(1) (Employee's Contribution to NFS)</b><input type="number" name="cce" required/><br>
    <b>(v)80CCD(1B) (Additional Contribution to NPS)</b><input type="number" name="ccf"required/><br>
    <b>13. Total ((i) to (iv) shall be restricted to Rs. 1,50,000/- & (i) to (v) Rs. 2,00,000/.)</b><input type="number" name="total11v" id=c onfocus="return calculate7()" required/><br>
    <b>14. Deductions under 80CCD(2) (Employer's Contribution NPS):</b><input type="number" name="dedund" required/><br>
    <b>15. Deductions under Chapter VI-A, other deductions:</b><br>
        <b>a)</b> 80D:Health Ins. (Mediclaim)max. Rs.25000/-<input type="number" name="ddd" required/><br>
        <b>b)</b> 80DD: Exp. For medically handicapped Dependant<input type="number" name="dde" required/><br>
        (max. Rs.75000/- & Rs.125000/- for > 80% disability)<br>
        <b>c)</b> 80G Donation to approved funds/80 TTA Rs.10000 max.<input type="number" name="ddf" required/><br>
        <b>d)</b> 80U: Physically handicapped(self)<input type="number" name="ddg" required/><br>
        (maximum Rs.75000/- and Rs.125000/- for severe disability)<br>
        <b>e)</b> 80CCG Max. Rs.25000/80E int. on Education Loan<input type="number" name="ddh" required/><br>
        <b>f)</b> 80DDB: Medical treatment on Self or Dependant Relative<input type="number" name="ddi" required/><br>
        (Maximum up to Rs. 40,000/-)<br>
        <b>g)</b> Total(a+b+c+d+e+f):<input type="number" name="abcdef" id=d onfocus="return calculate8()" required/><br>
         
            <b>16.Aggregate of deductible<input type="number" name="qpa" id=e onfocus="return calculate9()" required/></b><br>
             <b>17.Taxable Income<input type="number" name="qpb" id=f onfocus="return calculate10()" required/></b><br>
             <b>18.Taxable Income rounded to Rs.10/-<input type="number" name="qpc" required/></b><br>
             <b>19.Tax on taxable income<input type="number" name="qpd" required/>\</b><br>
        
        <div class="taxable"><br><br>
      <center>  <table border=3px so name grey >
    <tr>
        <th>Age below 60 years</th> 
        <th>Senior Citizen</th> 
        <th>Super Senior Citizen</th> 
        <th>Tax</th> 
        <th>Tax payable</th>
        </tr>
    <tr>
        <td>upto Rs.2.5lakh </td>
        <td>upto Rs.3lakh </td>
        <td>upto Rs.5lakh </td>
        <td>Nil </td>
        <td><input type="number" name="belowfive" disabled /></td>

        </tr>
     <tr>
        <td>upto Rs.5lakh </td>
        <td>upto Rs.5lakh </td>
        <td>upto Rs.5lakh </td>
        <td>10%</td>
        <td><input type="number" name="five" required /></td>
     </tr>
     <tr>
        <td>upto Rs.10lakh </td>
        <td>upto Rs.10lakh </td>
        <td>upto Rs.10lakh </td>
        <td>20%</td>
        <td><input type="number" name="ten" required/></td>
     </tr>
    <tr>
        <td>Above Rs.10 lakh </td>
        <td>Above Rs.10 lakh </td>
        <td>Above Rs.10 lakh</td>
        <td>30%</td>
        <td><input type="number" name="aboveten" required/></td>
    </tr>
    <tr>
    <td colspan="4" align="center">Rebate</td>
    <td><input type="number" name="rebate" required /></td>
    </tr>
    </table><br><br>
        </center>
        </div>
        
        <b>20: Education Cess & Secondary and Higher Education cess(3%):</b><input type="number" name="educess" required/><br> 
    <b>21: Tax Payable (19+20):</b><input type="number" name="taxpay" required/><br>
    <b>22: Relief under section 89 (attach details).</b><input type="number" name="relief" required/><br> 
    <b>23: Tax payable(21-22):</b><input type="number" name="tp" id=g onfocus="return calculate11()" required/><br> 
    <b>24: Tax paid upto 12/2015:</b><input type="number" name="taxpname" required/><br>
    <b>25: Balance to pay:</b><input type="number" name="balp" id=h onfocus="return calculate12()" required/><br>
    January 2016<input type="number" name="jan" required/><br>
    February 2016<input type="number" name="feb" id=i onfocus="return calculate12()" required/><br><br><br>
            
            <center><button name="submit">Submit</button>
            <center><button type="button" onClick="window.print()">Print this page</button>
            
            
            </div>
        </div>  
        </form>
        
        
    </body>    
</html>