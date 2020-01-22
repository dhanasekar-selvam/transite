<?php
if (isset($_POST['rn'])) {
    session_start();
    $rollno = $_POST['getimage'];
    $_SESSION['rrn']=$rollno;

    include_once 'includes/dbh.inc.php';
    $sql = "SELECT *FROM  bikepass WHERE rollno='$rollno';";
    $res = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($res)) {
        $name = $row['name'];
    }
}
// for ($i=0; $i<count($files); $i++)
// {
// 	$num = $files[$i];
// 	print $num."<br />";
// 	echo '<img src="'.$num.'" alt="random image" />'."<br /><br />";
// }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <title>Document</title>
    <!-- <style>
        #pass {
            width: auto;
            margin-left: auto;
            margin-right: auto;
            margin-top: auto;
            margin-bottom: auto;
            border: 1px;
            padding: 100px;
            margin: left;
            margin: auto;
        }
    </style> -->
</head>

<body class="w3-content" style="max-width:1300px">
    <?php
    require 'admincontent.php';


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
    <div class="w3-rest w3-blue-grey w3-container " style="height:700px">
        <div class="w3-padding-64 w3-center">
            <div id="pass">

                <div class=" w3-margin-top w3-image">
                    <div class="w3-third">
                        <div class="w3-card">
                            <img src="<?php echo $files; ?>" style="width:100%; height:100%;cursor:zoom-in" onclick="document.getElementById('modal01').style.display='block'">
                            <div class="w3-container">
                            </div>
                        </div>
                    </div>

                    <div class="w3-third w3-image">
                        <div class="w3-card">
                            <img src="<?php echo $files1; ?>" style="width:100%;height:100%;cursor:zoom-in" onclick="document.getElementById('modal02').style.display='block'">
                            <div class="w3-container">
                            </div>
                        </div>
                    </div>

                    <div class="w3-third w3-image">
                        <div class="w3-card">
                            <img src="<?php echo $files2; ?>" style="width:100%;height:100%;cursor:zoom-in" onclick="document.getElementById('modal03').style.display='block'">
                            <div class="w3-container">
                            </div>
                        </div>
                    </div>
                

                 <div class=" w3-margin-top w3-image"> 
                    <div class="w3-third">
                        <div class="w3-card">
                            <img src="<?php echo $files3; ?>" style="width:100%;height:100%;cursor:zoom-in" onclick="document.getElementById('modal04').style.display='block'">
                            <div class="w3-container">
                            </div>
                        </div>
                    </div>

                    <div class="w3-third w3-image">
                        <div class="w3-card">
                            <img src="<?php echo $files4; ?>" style="width:100%;height:100%;cursor:zoom-in" onclick="document.getElementById('modal05').style.display='block'">
                            <div class="w3-container">
                            </div>
                        </div>
                    </div>

                    <div class="w3-third w3-image">
                        <div class="w3-card">
                            <img src="<?php echo $files5; ?>" style="width:100%;height:100%;cursor:zoom-in" onclick="document.getElementById('modal06').style.display='block'">
                            <div class="w3-container">
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
                </body>
<!-- <body>
    
    <form method="post" class="w3-display-bottom-right">
        <br>
        <button type="submit" name="accept"formaction="imgnext.php">Accept</button>
        <button type="submit" name="decline"formaction="imgnext.php">Decline</button>
        
        
    </form> -->
</body>




</html>