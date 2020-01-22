<?php
session_start();
$a=$_SESSION['check'];

if(!$a=="yes")
{
    header("location: index.php?error=login_first");
    exit();
}
?> 

<?php
require 'content.php';

?>








<?php
    include_once 'includes/dbh.inc.php';
    $id = $_SESSION['userid'];
    $_SESSION['id']=$id;
    ?>
<?php
$busno=$_POST['selectbus'];
$startst=$_SESSION['st'];
$endst=$_SESSION['et'];
$passid=$_POST['passid'];
$passtype=$_POST['pass-type'];
if($passtype=="HalfYear")
{
    $d=date("d-m-Y");
    $date = strtotime($d);
    $date = strtotime("+182 day", $date);
     $left =date("d-m-Y", $date);  
}
else
{
$d=date("d-m-Y");
$date = strtotime($d);
$date = strtotime("+365 day", $date);
 $left =date("d-m-Y", $date);
}
// echo $busno;
// echo $startst;
// echo $endst;
// echo $passid;
// echo $passtype;
// echo $id;
// echo $date;
?>

<?php
    include_once 'includes/dbh.inc.php';
    if(isset($_POST['pass-next-submit']))
{
   $sql1="SELECT * from bus where busno=$busno;";
   $res=mysqli_query($conn,$sql1);
   if (mysqli_num_rows($res)) {
    while ($rows = mysqli_fetch_assoc($res)) {	
     $amountt=$rows['amount'];

       }
}

}
    ?>
<?php
if(isset($_POST['pass-next-submit']))
{
    $sql1="UPDATE  students SET busno=$busno,startstop='$startst',endstop='$endst',passid='$passid',passtype='$passtype',passdate='$left' WHERE id=$id";
    mysqli_query($conn,$sql1);
}
    ?>
<!-- <?php

    $sql1 = "SELECT * from students ";

    $res = mysqli_query($conn, $sql1);
    if (mysqli_num_rows($res)) {
        while ($rows = mysqli_fetch_assoc($res)) {
            $name=$rows['name'];
           $mobile=$rows['mobileno'];
        }
    }
    ?> -->
 <?php

$passtype=$_POST['pass-type'];

if($passtype=="FullYear")
{
    $amounttt=$amountt;

}
else
{
$amountt=$amountt/2;
}
//echo $amountt;
?>



<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
<title>TRANSITE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
    #pass {
        width: auto;
        margin-left: auto;
        margin-right: auto;
        margin-top: auto;
        margin-bottom: auto;
        border: 1px ;
        padding: auto;
        margin: left;
        margin: auto;
    }
</style>
<body class="w3-content" style="max-width:1300px">

<div id="aboutc" class="w3-rest w3-blue-grey w3-container " style="height:700px">
            
            <div class="w3-padding-64 w3-center">
                <div id="pass">
                <div style="overflow-x:auto;">


                    <center>
<form class=" w3-container "action="payment.php"  name="payuform" method=POST autocomplete="off" >
<h1>PayUMoney Payment Request Form </h1>

<input type="hidden" name="key" value="<?php echo $MERCHANT_KEY;?>" />
<input type="hidden" name="hash"  value="<?php echo $hash;?>" />
<input type="hidden" name="txnid" value="<?php echo $txnid;?>"/>
<table>
<tr>
<td>Amount: </td>
<td><input name="amount" value="<?php echo $amountt;?> "/></td>
<td>Name: </td>
<td><input name="first-name" id="firstname" />
</td>
</tr>
<tr><br>
<td>Email: </td> 
<td><input type="email" name="email" id="email" /></td>
<td>Phone: </td>
<td><input name="phone"  maxlength="10"/></td>
</tr>
<!-- <tr>
<td>Product Info: </td>
<td colspan="3"><textarea name="productinfo" ><?php echo $productInfo;?></textarea></td>
</tr>
<tr>
<td>Success URI: </td>
<td colspan="3"><input name="surl"  size="64" value="<?php echo $surl;?> " /></td>
</tr>
<tr>
<td>Failure URI: </td>
<td colspan="3"><input name="furl"  size="64" value="<?php echo $furl;?> " /></td>
</tr> -->
<tr>
<td colspan="3"><input type="hidden" name="service_provider" value="" /></td>
</tr>
<tr>

<td colspan="4"><input type="submit" value="Submit" ></td>
</tr>
<tr>
<td colspan="4"><input type="submit" name="cancel-update" formaction="createpass.php" value="cancel"  /></td>

</tr>
</table>

</form>
</center>
                </div>

            </div>
        </div>
    </div>
</div>
    </div>
</body>
</html>