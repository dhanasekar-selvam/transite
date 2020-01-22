<?php
if(isset($_POST['asubmit']))
{
session_start();
$startstop=$_SESSION['st'];
$endstop=$_SESSION['est'];
$validtill=$_SESSION['val'];
?>

<?php

if($validtill=="")
{
    $validtill=" User Not have a pass";
}
if($startstop=="")
{
    $startstop="User Not have a pass";
}
if($endstop=="")
{
    $endstop="User Not have a pass";

}

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
                    <center>
                        <form class="w3-card-4 w3-container " method="post">
                            <h1>ID Validity</h1>
                            start:
                            <input type="text" name="startstop"  value="<?php echo $startstop;?>"><br><br> endstop:
                            <input type="text" name="endstop" value="<?php echo $endstop;?>"><br><br> validtill:
                            <input type="text" name="passtype" value="<?php echo $validtill;?>"><br><br>
                            <button type=" submit " formaction="viewuser_admin.php ">back</button>
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