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

<body class="w3-content" style="max-width:1300px">

<?php
require 'content.php';
?>
<?php

include_once 'includes/dbh.inc.php';
$id=$_SESSION['userid'];
?>
<?php
$sql1 = "SELECT * from students where id=$id";

		$res = mysqli_query($conn,$sql1); 
		if (mysqli_num_rows($res)) {
 			while ($rows = mysqli_fetch_assoc($res)) {	
                 $name = $rows['name'];
                 $userid=$rows['rollno'];
                 $address=$rows['address'];
                 $mobileno=$rows['mobileno'];
                 $age=$rows['age']; 		
            	}
 		}


?>

        <div id="aboutc" class="w3-rest w3-blue-grey w3-container " style="height:700px">
            <div class="w3-padding-64 w3-center">
                <h1>About Me</h1>
                <img src="login.jpg" class="w3-margin w3-circle" alt="Person">
                <div class="w3-center w3-padding-large">

                   
                    userid:<br><?php echo $userid; ?>
                    <br> name:<br><?php echo $name; ?>
                    <br> Address:<br><?php echo $address; ?>
                    <br>mobilno:<br><?php echo $mobileno; ?>
                    <br>age<br><?php echo $age; ?>

                </div>
            </div>
        </div>

    </div>


</body>

</html>
