<?php
session_start();
$a=$_SESSION['check'];

if(!$a=="yes")
{
    header("location: index.php?error=login_first");
    exit();
}
?> 


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
<?php

include_once 'includes/dbh.inc.php';
$id=$_SESSION['userid'];




?>
<?php
$sql1 = "SELECT * from students where id=$id";

		$res = mysqli_query($conn,$sql1); 
		if (mysqli_num_rows($res)) {
 			while ($rows = mysqli_fetch_assoc($res)) {	
                 $passid=$rows['passid'];
                 $startstop=$rows['startstop'];
                 $endstop=$rows['endstop'];
                 $date=$rows['passdate'];
                 		
            	}
 		}
         $d=date("d-m-Y");
        
        
$date = strtotime($d);
$date = strtotime("+365 day", $date);
 

$left =date("d-M-Y", $date);

         
?>
<?php
if($passid=="")
{
    header("location: createpass.php?error=user_have_no_pass_create_pass_first");
    exit();
}


?>

<?php
require 'content.php';
?>

        <div id="aboutc" class="w3-rest w3-blue-grey w3-container " style="height:700px">
            <div class="w3-padding-64 w3-center">
                <div id="pass">

                    <center>
                        <form class="w3-card-4 w3-container "method="post">

                            <h1>PASS DETAILS</h1>

                            passid:
                            <input type="text" name="passid" value="<?php   echo $passid;?>"><br><br>
                            startstop:
                            <input type="text" name="passid" value="<?php echo $startstop;?>"><br><br>
                             endstop:
                            <input type="text" name="endstop1" value="<?php echo $endstop;?>"><br><br> validtill:
                            <input type="text" name="validtill" value="<?php echo $left;?>"><br><br> 




                        </form>
                    </center>
                </div>

            </div>
        </div>
    </div>

    </div>


</body>

</html>