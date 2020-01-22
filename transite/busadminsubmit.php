<?php
session_start();
$a=$_SESSION['check'];
$busno=$_SESSION['bus'];  


if(!$a=="yes")
{
    header("location: index.php?error=login_first");
    exit();
}
?> 
<?php
include_once 'includes/dbh.inc.php';
?>
    <?php
if(isset($_POST['submit-next']))
{
    
    $stop1=$_POST['stop1'];
    $stop2=$_POST['stop2'];
    $stop3=$_POST['stop3'];
    $stop4=$_POST['stop4'];
    $stop5=$_POST['stop5'];
    $amount=$_POST['amount'];
 $sql="INSERT INTO bus (busno,stop1,stop2,stop3,stop4,stop5,amount) VALUES($busno,'$stop1','$stop2','$stop3','$stop4','$stop5','$amount')";
    mysqli_query($conn,$sql);
    
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
require 'admincontent.php';
?>
        <div id="aboutc" class="w3-rest w3-blue-grey w3-container " style="height:700px">
            <div class="w3-padding-64 w3-center">
                <div id="pass">

                   <form class="w3-container ">
                    <center>
                      <p> bus has been added sucessfully</p>
                            <button type="submit" name=""formaction="addbusadmin.php">main</button> 


                        </form>
                    </center>
                </div>

            </div>
        </div>
    </div>

    </div>


</body>

</html>