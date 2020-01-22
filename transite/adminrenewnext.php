<?php
 
    include_once 'includes/dbh.inc.php';
session_start();
$id=$_POST['rollno'];
$_SESSION['id']=$id;
?>

<?php
$sql1 = "SELECT * from students where rollno='$id'";

		$res = mysqli_query($conn,$sql1); 
		if (mysqli_num_rows($res)) {
 			while ($rows = mysqli_fetch_assoc($res)) {	
                 $start=$rows['startstop'];
                 $_SESSION['st']=$start;
                 $end=$rows['endstop'];
                 $_SESSION['est']=$end;
                 $passtype=$rows['passtype'];
                 $_SESSION['pt']=$passtype;
                 $validtill=$rows['validtill'];
                 $_SESSION['vt']=$validtill;
                 $busno=$rows['busno'];
                 $_SESSION['bn']=$busno;
                 $idd=$rows['rollno'];
                //  $passid=$rows['passid'];
                //  $_SESSION['pd']=$passid;

                 
            	}
 		}


?>

<?php

if($id!=$idd)
{
    header("location: createuser_admin.php?error=need_to_registered_first");
    exit();
}


?>

<?php

if($start=="")
{
    $start="Pass Not Created";
}
if($end=="")
{
    $end="Pass Not Created";
}
if($passtype=="")
{
    $passtype="Pass Not Created";
}
if($validtill=="")
{
    $validtill="Pass Not Created";
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

    <!-- First Grid: Logo & About -->
    <?php
require 'admincontent.php';
?>

<?php
    include_once 'includes/dbh.inc.php';
    ?>

<?php
    $sql = "SELECT * from bus;";
    $res = mysqli_query($conn, $sql);
    ?>

        <div id="aboutc" class="w3-rest w3-blue-grey w3-container " style="height:700px">
            <div class="w3-padding-64 w3-center">
                <div id="pass">

                    <center>
                        <form class="w3-card-4 w3-container "method="post">
                            <h1>ID Validity</h1>
                            startstop:
                            <input type="text" name="startstop" value="<?echo $start;?>"><br><br> endstop:
                            <select name="end-bus" style="width: 200px;" >
                            <option value="<?php echo $end; ?>"><?php echo $end; ?></option>

                            <?php
                            if (mysqli_num_rows($res)) {
                                while ($rows = mysqli_fetch_assoc($res)) {
                                    ?>
                                
                                    <option value="<?php echo $rows['stop1']; ?>"><?php echo $rows['stop1']; ?></option>
                                    <option value="<?php echo $rows['stop2']; ?>"><?php echo $rows['stop2']; ?></option>
                                    <option value="<?php echo $rows['stop3']; ?>"><?php echo $rows['stop3']; ?></option>
                                    <option value="<?php echo $rows['stop4']; ?>"><?php echo $rows['stop4']; ?></option>
                            <?php

                                }
                            }
                            ?>
                        </select> <br><br>
                        validtill:
                            <input type="text" name="passtype" value="<?php echo $validtill;?>"><br><br>
                             passtype:
                             <select name="pass-type" style="width: 200px;"  >
                             <option value="<?php echo $passtype; ?>"><?php echo $passtype; ?></option>

                             <option value="select">click below to update</option>
                               
                                 <option value="HalfYear">HalfYear</option>
                                 <option value="FullYear">FullYear</option>
                             </select><br><br>
                            <button type="submit" name="renewsucess"formaction="renewsuccessadmin.php">renew</button>
                            <button type=" submit " formaction="renewpass_admin.php">back</button>
                            <button type="submit" formaction="busadmin.php">Home</button>



                        </form>
                    </center>
                </div>

            </div>
        </div>
    </div>

    </div>


</body>

</html>