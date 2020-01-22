<?php
session_start();
if (isset($_POST['permit_submit'])) {
    $rollno = $_POST['rollno'];
    $_SESSION['rn']=$rollno;

    


include_once "includes/dbh.inc.php";
$sql = "SELECT *FROM bikepass WHERE rollno='$rollno'";

$res = mysqli_query($conn, $sql);
if (mysqli_num_rows($res)) {
    while ($row = mysqli_fetch_assoc($res)) {
          $permit=$row['permit'];
          $reason=$row['Reason'];
    }
}
}

if($permit=="accept")
{
    header("location: permit.php");
    exit();
}
if($permit=="decline")
{
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <title>Document</title>
 

    </head>
    <body class="w3-content w3-mobile" style="max-width:1400px">
<center>


    <div class="w3-container   " style="height:800px">
        <div class="w3-padding-64 w3-center ">
             
        <form method="post">
            <div class= "w3-panel w3-red">
        <p  >YOU DONT HAVE PERMISSION TO PARK A VEHICLE INSIDE THE COLLEGE CAMPUS</p>
       <p> Reason:<?php echo $reason;?></p>
            </div>
        <button type="submit" formaction="index.php">Home</button>
        </form>
        </div>
    </div>
</center>

    </body>
    </html>

  <?php 
    
}
?>
