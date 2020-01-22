<?php
include_once 'includes/dbh.inc.php';
session_start();
$name=$_POST['name'];
$rollno=$_POST['rollno'];
$complaint=$_POST['complaint'];
if(empty($name)||empty($rollno)||empty($complaint))
{
    header("location: index.php?error=fill_all_fields");
}
$_SESSION['rn']=$rollno;
$sql="INSERT INTO complaint(name,rollno,complaint) VALUES('$name','$rollno','$complaint')";
mysqli_query($conn,$sql);
?>




<!DOCTYPE html>
<html>
<title>TRANSITE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
    #pass {
        width: 50%;
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

<body class="w3-content" style="max-width:1400px">



    <div class=" w3-blue w3-container " style="height:800px">
        <div class="w3-padding-64 w3-center">
            <h2>Complaint </h2>
            <div id="pass">


                <center><br><br>
                    <form class=" w3-container "method="post"> 
                        <p> YOUR RESPONSE HAS BEEN SUBMITTED</p>
                        <button type="submit" formaction="index.php">Home</button>
                    </form>
                </center>
            </div>

        </div>
    </div>
    </div>

    </div>


</body>

</html>