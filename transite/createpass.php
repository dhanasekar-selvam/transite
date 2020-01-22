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

<head>

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


    <?php
    include_once 'includes/dbh.inc.php';
    $id = $_SESSION['userid'];
    $_SESSION['id']=$id;
    ?>
<?php
if(isset($_POST['cancel-update']))
{
    $sql1="UPDATE  students SET busno=null,startstop=null,endstop=null,passid=null,passtype=null WHERE id=$id";
    mysqli_query($conn,$sql1);
}

?>

    <?php
    $sql1 = "SELECT * from students where id=$id";

    $res = mysqli_query($conn, $sql1);
    if (mysqli_num_rows($res)) {
        while ($rows = mysqli_fetch_assoc($res)) {
            $userid = $rows['rollno'];
        }
    }
    ?>


    <?php
    include_once 'includes/dbh.inc.php';
    ?>


    <?php
    $sql = "SELECT * from bus;";
    $res = mysqli_query($conn, $sql);
    ?>


    <?php
    $sql = "SELECT * from bus;";
    $res1 = mysqli_query($conn, $sql);
    ?>








    <div id="aboutc" class="w3-rest w3-blue-grey w3-container " style="height:700px">
        <div class="w3-padding-64 w3-center">
            
            <div id="pass">
                <center>
                    <form class="w3-card-4 w3-container "action="createpass_next.php" method="post">
                    <h1>CREATE PASS</h1>

                        userid:
                        <input type="text" name="userid" value="<?php echo $userid; ?>"><br><br>
                        startstop:
                        <input type="text" name="start" value="KEC">  <br><br>

                        endstop:
                        <select name="end-bus" style="width: 200px;" required>
                        <option value="" >Select-stop</option>

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
                        </select>
                        <!-- <br><br> endstop:
                        <select name="end-bus" style="width: 200px;">
                            <?php
                            if (mysqli_num_rows($res1)) {
                                while ($rows = mysqli_fetch_assoc($res1)) {
                                    ?>
                                    <option value="<?php echo $rows['stop2']; ?>"><?php echo $rows['stop2']; ?></option>
                                    <option value="<?php echo $rows['stop3']; ?>"><?php echo $rows['stop3']; ?></option>
                                    <option value="<?php echo $rows['stop4']; ?>"><?php echo $rows['stop4']; ?></option>
                                    <option value="<?php echo $rows['stop4']; ?>"><?php echo $rows['stop5']; ?></option>


                            <?php

                                }
                            }
                            ?>
                        </select>  -->
                        <br><br>
                        <button type="submit" name="passsubmit">next</button>






                        <!-- passamount:
                                <input type="text" name="passamount" value=""><br><br> Credit Card Number:
                                <input class="inputCard" type="text" name="creditCard1" id="creditCard1" size="4" /> -
                                <input class="inputCard" type="text" name="creditCard2" id="creditCard2" size="4" /> -
                                <input class="inputCard" type="text" name="creditCard3" id="creditCard3" size="4" />
                                <br /><br>CVV no:
                                <input type="text" name="cvvno" value="" size="3"><br><br> expirymonth:
                                <input type="text" name="expirymonth" value=""><br><br> expiryyear:
                                <input type="text" name="expiryyear" value=""><br><br>
                        <button type="submit" name="passsubmit"formaction="">submit</button>
                        <button type="submit" formaction="buspasslogin.php">cancel</button> -->



                    </form>
                </center>
            </div>

        </div>
    </div>
    </div>

    </div>


    </head>
</body>

</html>