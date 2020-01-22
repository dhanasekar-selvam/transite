<?php
if (isset($_POST['rn'])) {
    session_start();
    $rollno = $_POST['getimage'];
    $_SESSION['rrn'] = $rollno;

    include_once 'includes/dbh.inc.php';
    $sql = "SELECT *FROM  bikepass WHERE rollno='$rollno';";
    $res = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($res)) {
        $name = $row['name'];
    }
}
?>
<?php
$a = 0;
$b = 1;
$c = 2;
$d = 3;
$e = 4;
$f = 5;
$files = "uploads/$name$a.jpg";
$files1 = "uploads/$name$b.jpg";
$files2 = "uploads/$name$c.jpg";
$files3 = "uploads/$name$d.jpg";
$files4 = "uploads/$name$e.jpg";
$files5 = "uploads/$name$f.jpg";



?>

<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>
<form method="post">
<div class="w3-top">
        <div class="w3-bar w3-teal ">
            <a class="w3-bar-item  w3-button w3-padding-large w3-hide-medium w3-hide-large " href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <p>REQUEST ACCEPTANCE

                <a onclick="document.getElementById('user').style.display='block'" class=" w3-bar-item w3-button w3-padding-large w3-hide-small w3-right">Decline</a>


                <a href="imgnext.php" name="accept" class=" w3-bar-item w3-button w3-padding-large w3-hide-small w3-right">Accept</a>

</div>
    </div>
                <div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
                <a  class="w3-bar-item w3-button w3-padding-large" onclick="document.getElementById('user').style.display='block'">Decline</a>

                <a href="imgnext.php" name="accept"class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Accept</a>


                </div> 
</form>
  
<div class="w3-padding-64">
    <div class="w3-row-padding w3-margin-top">
        <div class="w3-third">
            <div class="w3-card">
                <img src="<?php echo $files; ?>" style="width:100%; height:100%;cursor:zoom-in" onclick="document.getElementById('modal01').style.display='block'">
                <div class="w3-container">
                    <h5>ID</h5>
                </div>
            </div>
        </div>

        <div class="w3-third">
            <div class="w3-card">
                <img src="<?php echo $files1; ?>" style="width:100%;height:100%;cursor:zoom-in" onclick="document.getElementById('modal02').style.display='block'">
                <div class="w3-container">
                    <h5>ID</h5>
                </div>
            </div>
        </div>

        <div class="w3-third">
            <div class="w3-card">
                <img src="<?php echo $files2; ?>" style="width:100%;height:100%;cursor:zoom-in" onclick="document.getElementById('modal03').style.display='block'">
                <div class="w3-container">
                    <h5>LICENCE</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="w3-row-padding w3-margin-top">
        <div class="w3-third">
            <div class="w3-card">
                <img src="<?php echo $files3; ?>" style="width:100%;height:100%;cursor:zoom-in" onclick="document.getElementById('modal04').style.display='block'">
                <div class="w3-container">
                    <h5>LICENCE</h5>
                </div>
            </div>
        </div>

        <div class="w3-third">
            <div class="w3-card">
                <img src="<?php echo $files4; ?>" style="width:100%;height:100%;cursor:zoom-in" onclick="document.getElementById('modal05').style.display='block'">
                <div class="w3-container">
                    <h5>BIKERC</h5>
                </div>
            </div>
        </div>

        <div class="w3-third">
            <div class="w3-card">
                <img src="<?php echo $files5; ?>" style="width:100%;height:100%;cursor:zoom-in" onclick="document.getElementById('modal06').style.display='block'">
                <div class="w3-container">
                    <h5>BIKERC</h5>
                </div>
            </div>
        </div>
    </div>
</div>

    <div id="modal01" class="w3-modal" onclick="this.style.display='none'">
        <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
        <div class="w3-modal-content w3-animate-zoom">
            <img src="<?php echo $files; ?>" style="width:100%">
        </div>
    </div>


    <div id="modal02" class="w3-modal" onclick="this.style.display='none'">
        <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
        <div class="w3-modal-content w3-animate-zoom">
            <img src="<?php echo $files1; ?>" style="width:100%">
        </div>
    </div>



    <div id="modal03" class="w3-modal" onclick="this.style.display='none'">
        <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
        <div class="w3-modal-content w3-animate-zoom">
            <img src="<?php echo $files2; ?>" style="width:100%">
        </div>
    </div>


    <div id="modal04" class="w3-modal" onclick="this.style.display='none'">
        <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
        <div class="w3-modal-content w3-animate-zoom">
            <img src="<?php echo $files3; ?>" style="width:100%">
        </div>
    </div>



    <div id="modal05" class="w3-modal" onclick="this.style.display='none'">
        <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
        <div class="w3-modal-content w3-animate-zoom">
            <img src="<?php echo $files4; ?>" style="width:100%">
        </div>
    </div>




    <div id="modal06" class="w3-modal" onclick="this.style.display='none'">
        <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
        <div class="w3-modal-content w3-animate-zoom">
            <img src="<?php echo $files5; ?>" style="width:100%">
        </div>
    </div>



    <div id="user" class="w3-modal">
        <div class="w3-modal-content w3-animate-zoom w3-r">
            <div class="w3-container w3-blue w3-display-container">
                <span onclick="document.getElementById('user').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
                <h1>Decline</h1>
            </div>
            <div class="w3-container">
                <center>


                    <form action="" autocomplete="off" method="post">
                       <br>
                        Reason:
                        <input type="text" name="reason" required>

                        <button type="submit" formaction="imgnext.php" name="decline">submit</button>
                    </form>



                </center>

            </div>
        </div>
    </div>
    <script>
    function myFunction() {
            var x = document.getElementById("navDemo");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }
        }

        // When the user clicks anywhere outside of the modal, close it
        var modal = document.getElementById('ticketModal');
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>

</html>