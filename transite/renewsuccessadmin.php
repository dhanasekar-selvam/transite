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
$end1=$_POST['end-bus'];
$passtype1=$_POST['pass-type'];
$passtype=$_SESSION['pt'];
$busno=$_SESSION['bn'];
$startst=$_SESSION['st'];
$endst=$_SESSION['est'];
$validtill=$_SESSION['vt'];
// $passid=$_SESSION['pd'];
$d=$_SESSION['id'];
if($endst!=$end1)
{
    $endst=$end1;
}
if($passtype!=$passtype1)
{
    $passtypee=$passtype1;
}
else
{
    $passtypee=$passtype;
}
$date=date("d-m-Y");
$keyLength = 8;
$str = "1234567890abcdefghijklmnopqrstuvwxyz";
$randstring = substr(str_shuffle($str), 0, $keyLength);

    include_once 'includes/dbh.inc.php';
    if(isset($_POST['renewsucess']))
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

if($passtype1=="FullYear")
{
    $amount=$amountt;

}
else 
{
$amount=$amountt/2;
}

if($passtype1=="HalfYear")
{
    $dd=date("d-m-Y");
    $date = strtotime($dd);
    $date = strtotime("+182 day", $date);
     $left =date("d-m-Y", $date);  
}
else
{
$dd=date("d-m-Y");
$date = strtotime($dd);
$date = strtotime("+365 day", $date);
 $left =date("d-m-Y", $date);
}
?>



<?php
if(isset($_POST['renewsucess']))
// {
    // if($user!==$id)
    // {
    //     header("location: createuser_admin.php?error=user_not_created_create_first");
    //     exit();
    // }
    //else
    {
        
 $sql1="UPDATE  students SET busno=$busno,startstop='$startst',endstop='$endst',passid='$randstring',passtype='$passtypee',passdate='$dd',validtill='$left' WHERE rollno='$d'";
    mysqli_query($conn,$sql1);
}
//}
 ?>




<!DOCTYPE html>
<html>

<head>

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

    <?php
    require 'admincontent.php';
    ?>




    <div id="aboutc" class="w3-rest w3-blue-grey w3-container " style="height:700px">
        <div class="w3-padding-64 w3-center">
            <div id="pass">
                <center>
                    <form class="w3-card-4 w3-container "action="busadmin.php" method="post">
                    <h1>CREATE PASS</h1>

                    
                    
                    
                    <p>pass renewed scuessfully</p>
                    <p>Amount:<?php echo $amount;?></p>
                        
                        <br><br>
                        <button type="submit" name="passsubmit" >home</button>






                       


                    </form>
                </center>
            </div>

        </div>
    </div>
    </div>

    </div>


    </head>
</body>
</html>