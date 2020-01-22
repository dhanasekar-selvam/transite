
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
$keyLength=20;
  $str="1234567890abcdefghijklmnopqrstuvwxyz";
  $randstring=substr(str_shuffle($str),0, $keyLength);
?>
<?php
// Merchant key here as provided by Payu
$MERCHANT_KEY = "gtKFFx";
$SALT = "eCwWELxi";
$txnid=$randstring;
//$txnid="c98564351g8756g5gi35";
$name=$_POST['first-name'];
//$name="anil";
$email=$_POST['email'];
$amount=$_POST['amount'];
$phone=$_POST['phone'];
$surl="http://192.168.64.2/transite/createpass.php";
$furl="http://192.168.64.2/transite/createpass.php";
$productInfo="payments";
// Merchant Salt as provided by Payu
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
$hashString=$MERCHANT_KEY."|".$txnid."|".$amount."|".$productInfo."|".$name."|".$email."|||||||||||".$SALT;
   
$hash = strtolower(hash('sha512', $hashString));
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


                    <center>
                    <div style="overflow-x:auto;">


<form class=" w3-container "action="https://sandboxsecure.payu.in/_payment"  name="payuform" method=POST  autocomplete="off">
    <h1>PayUMoney Payment Request Form </h1>

    <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY;?>" />
<input type="hidden" name="hash"  value="<?php echo $hash;?>" />
<input type="hidden" name="txnid" value="<?php echo $txnid;?>"/>
<table>
<tr>
<td>Amount: </td>
<td><input name="amount" value="<?php echo $amount;?>" /></td>

<td>First Name: </td>
<td><input name="firstname" id="firstname" value="<?php echo $name;?>" /></td>
</tr>
<tr>
<tr>
<td>Email: </td> 
<td><input name="email" id="email" value="<?php echo $email;?>"/></td>
<td>Phone: </td>
<td><input name="phone" value="<?php echo $phone;?>" /></td>
</tr>
 <tr>
 <td hidden>Product Info: </td>
<td colspan="3" hidden><textarea name="productinfo" ><?php echo $productInfo;?></textarea></td>
</tr>
<tr>
<td hidden>Success URI: </td>
<td colspan="3"hidden><input name="surl"  size="64" value="<?php echo $surl;?> " /></td>
</tr>
<tr>
<td hidden>Failure URI: </td>
<td colspan="3"hidden><input name="furl"  size="64" value="<?php echo $furl;?> " /></td>
</tr>
<tr>
<td colspan="3" hidden><input type="hidden" name="service_provider" value="" /></td>
</tr> 
<tr>

<td colspan="4"><input type="submit" value="makepayment"  /></td>
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