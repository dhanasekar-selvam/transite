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
if(isset($_POST['busdetails-submit']))
{

    include_once 'includes/dbh.inc.php';

    $id=$_POST['user-id'];
    
    
}
?>
<?php

include_once 'includes/dbh.inc.php';
?>
<?php
include_once 'includes/dbh.inc.php';

$sql1 = "SELECT * from bus where busno=$id;";

        $res = mysqli_query($conn,$sql1); 
        if (mysqli_num_rows($res)) {
             while ($rows = mysqli_fetch_assoc($res)) {	
                $stop1=$rows['stop1'];
                $stop2=$rows['stop2'];
                $stop3=$rows['stop3'];
                $stop4=$rows['stop4'];
                $stop5=$rows['stop5'];
                }
         }


?>
<?php
if($stop1=="")

{
    header("location: busdetails.php?error=bus_has_not_registered");
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
require 'content.php';
?>

        <div  class="w3-rest w3-blue-grey w3-container " style="height:700px">
            <div class="w3-padding-64 w3-center" style="overflow-x:auto;">

                <div id="pass">


                    <center>
                        <form class="w3-card-4 w3-container "style="overflow-x:auto;" method="post">

                            <h1>BUS DETAILS</h1>

                            busno:
                            <input type="text" name="userid1" value="<?php echo $id;?>"><br><br>
                            <textarea rows="4" cols="40" autofocus> stop1-->perundurai stop2--><?php echo $stop1;?> stop3--><?php echo $stop2;?> stop4--><?php echo $stop3;?> stop5--><?php echo $stop4;?> stop6--><?php echo $stop5;?> 
                          </textarea>
<br>
                          <input type="submit" name="clear" formaction="busdetails.php" value="clear">




                       
                        </form>
                    </center>
                </div>

            </div>
        </div>
    </div>

    </div>


</body>

</html>