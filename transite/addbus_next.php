<?php
$busno=$_POST['busno'];


?>
<?php

session_start();
$_SESSION['bno']=$busno;
?>

<?php
 include_once 'includes/dbh.inc.php';
 ?>
 <?php
if(isset($_POST['buschecked']))
{
   $sql1="SELECT * from bus";
   $res=mysqli_query($conn,$sql1);
   if (mysqli_num_rows($res)) {
    while ($rows = mysqli_fetch_assoc($res)) {	
     $busno1=$rows['busno'];
     if($busno==$busno1)
    {
    header("location: busadmin.php?erro=busno_already_registered");
    exit();
    }
       }
}

}
?>

<?php

if($busno==$busno1)
{
    header("location: busadmin.php?erro=busno_already_registered");
    exit();
}
?>





<?php
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
<!-- <style>
    #pass {
        width: auto;
        margin-left: auto;
        margin-right: auto;
        margin-top: auto;
        margin-bottom: auto;
        border: 1px solid lightblue;
        padding: auto;
        margin: left;
        margin: auto;
    }
</style> -->

<body class="w3-content" style="max-width:1300px">

<?php
require 'admincontent.php';
?>
        <div id="aboutc" class="w3-rest w3-blue-grey w3-container " style="height:700px">
            <div class="w3-padding-64 w3-center">
                <div id="pass">


                    <center>
                        <form method="post">
                            <h1>Add new bus</h1>
                         startstop:
                         <input type="text" name="stop1" value="KEC"><br><br>
                         
                         stop1: <br>
                         <input type="text" name="stop1" value=" "><br><br>
                         stop2: <br>
                         <input type="text" name="stop2" value=" "><br><br>
                         stop3: <br>
                         <input type="text" name="stop3" value=" "><br><br>
                         stop4: <br>
                         <input type="text" name="stop4" value=" "><br><br>
                         stop5: <br>
                          <input type="text" name="stop5" value=" "><br><br>
                         amount: <br>
                        <input type="text" name="amount" value=""><br><br>
                            <button type="submit" name="submit-next"formaction="busadminsubmit.php">submit</button> 
                            <button type="submit" name=""formaction="busadmin.php">cancel</button> 



                        </form>
                    </center>
                </div>

            </div>
        </div>
    </div>

    </div>


</body>

</html>