<?php
if(isset($_POST['adminsearch']))
{
include_once 'includes/dbh.inc.php';
$rollno=$_POST['rollno'];

$sql1 = "SELECT * from students where rollno='$rollno';";

        $res = mysqli_query($conn,$sql1); 
        if (mysqli_num_rows($res)) {
             while ($rows = mysqli_fetch_assoc($res)) {	
               $name=$rows['name'];              
               $age=$rows['age'];              
               $address=$rows['address'];              
               $mobile=$rows['mobileno'];              
               $passid=$rows['passid'];    
               $end=$rows['endstop'];
               $start=$rows['startstop'];     
               $valid=$rows['validtill'];     
              }
         }

        }
?>
<?php

if($passid=="")
{
header("location: viewuser_admin.php?error=not_have_a_pass");
exit();
}
else
{
    $pass=$passid;
}

?>
<?php
session_start();
$_SESSION['st']=$start;
$_SESSION['est']=$end;
$_SESSION['val']=$valid;


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
require 'admincontent.php';
?>

        <div id="aboutc" class="w3-rest w3-blue-grey w3-container " style="height:700px">
            <div class="w3-padding-64 w3-center">
                <div id="pass">

                    <center>
                        <form class="w3-card-4 w3-container "method="post">
                            userid:
                            <input type="text" name="id" value="<?php echo $rollno;?>"><br><br> name:
                            <input type="text" name="name" value="<?php echo $name;?>"><br><br> age:
                            <input type="number" name="age" value="<?php echo $age;?>"><br><br> address:
                            <br><textarea rows="4" cols="25" ><?php echo $address;?></textarea><br><br>mobileno:
                            <input type=text name="mobileno" value="<?php echo $mobile;?>"><br><br> passid:
                            <input type=text name="passid" value="<?php echo $pass;?>">

                            <br><br>
                            <button type=" submit " name="asubmit" formaction="adminsubmit.php ">submit</button>
                            <button type=" submit " formaction="viewuser_admin.php ">back</button>


                        </form>
                    </center>
                </div>

            </div>
        </div>
    </div>

    </div>


</body>

</html>