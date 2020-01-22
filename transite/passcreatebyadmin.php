


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
    include_once 'includes/dbh.inc.php';
    $id = $_SESSION['i'];
    $rollno=$_SESSION['iddd'];

    ?>

    <?php
        if(isset($_POST['pass-next-submit']))
{
    $sql1="SELECT * FROM students;";
    $res=mysqli_query($conn,$sql1);
    if (mysqli_num_rows($res)) {
        while ($rows = mysqli_fetch_assoc($res)) {
            $user=$rows['rollno'];


        
        }
    }
}
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
//  echo $busno;
//  echo $startst;
//  echo $endst;
//  echo $passid;
//  echo $passtype;
//echo $id;
//  echo $left;
//  echo $d;
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
$passtype=$_POST['pass-type'];

if($passtype=="FullYear")
{
    $amountt=$amountt;

}
else
{
$amountt=$amountt/2;
}

?>
<?php




if(isset($_POST['pass-next-submit']))

    {
        
 $sql1="UPDATE  students SET busno=$busno,startstop='$startst',endstop='$endst',passid='$passid',passtype='$passtype',passdate='$d',validtill='$left' WHERE rollno='$id'";
    mysqli_query($conn,$sql1);
}

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

                    
                    
                    
                    <p>pass created scuessfully</p>
                    <p>Amount:<?php echo $amountt;?></p>
                        
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