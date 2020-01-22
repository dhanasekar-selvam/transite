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
<?php

include_once 'includes/dbh.inc.php';
$id=$_SESSION['userid'];
?>

<body class="w3-content" style="max-width:1300px">
<?php
$sql1 = "SELECT * from students where id=$id";

		$res = mysqli_query($conn,$sql1); 
		if (mysqli_num_rows($res)) {
 			while ($rows = mysqli_fetch_assoc($res)) {	
                 $name = $rows['name'];
                 $userid=$rows['rollno'];
                 $passid=$rows['passid'];		
            	}
 		}
if($passid=="")
{
    header("location: createpass.php?error=user_has_not_create_pass_yet");
    
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

                            <h1>RENEW PASS</h1>

                            userid:
                            <input type="text" name="userid1" value="<?php echo $userid?>">
                            <br><br> name:
                            <input type="text" name="namee" value="<?php echo $name?>">
                            <br><br> passid:
                            <input type="text" name="passidd" value="<?php echo $passid?>">
                            <br><br>
                            <button type="submit" name="renew-pass-check"formaction="renewpass_check.php">check</button>


                        </form>
                    </center>
                </div>

            </div>
        </div>
    </div>

    </div>


</body>

</html>