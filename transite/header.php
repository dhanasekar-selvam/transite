<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    
<header>
    <!-- Navbar -->
    <div class="w3-top">
        <div class="w3-bar w3-black ">
        <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
           
        <a onclick="document.getElementById('user').style.display='block'" class="w3-bar-item w3-button w3-padding-large w3-hide-small">APPLYFORBUSPASS</a>
        <a onclick="document.getElementById('motor').style.display='block'" class="w3-bar-item w3-button w3-padding-large w3-hide-small">APPLY FOR MOTORCYCLE PARKING</a>

            <!-- <a href="bike.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">APPLY FOR MOTORCYCLE PARKING</a> -->
            <a onclick="document.getElementById('complaint').style.display='block'" class="w3-bar-item w3-button w3-padding-large w3-hide-small">FOR COMPLAINTS</a>
            <a onclick="document.getElementById('findbus').style.display='block'" class="w3-bar-item w3-button w3-padding-large w3-hide-small">FINDMYBUS</a>


         <a onclick="document.getElementById('permit').style.display='block'" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CHECK_PERMIT</a>


        </div>
    </div>

    <!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
    <div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
    <a  class="w3-bar-item w3-button w3-padding-large" onclick="document.getElementById('user').style.display='block'">APPLYFORBUSPASS</a>
    <a  class="w3-bar-item w3-button w3-padding-large" onclick="document.getElementById('motor').style.display='block'">APPLY FOR MOTORCYCLE PARKING</a>

    <a  class="w3-bar-item w3-button w3-padding-large" onclick="document.getElementById('complaint').style.display='block'">FOR COMPLAINTS</a>
    <a  class="w3-bar-item w3-button w3-padding-large" onclick="document.getElementById('findbus').style.display='block'">FINDMYBUS</a>

        <!-- <a href="bike.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">APPLY FOR MOTORCYCLE</a> -->
        <a  class="w3-bar-item w3-button w3-padding-large" onclick="document.getElementById('permit').style.display='block'">CHECK_PERMIT</a>



        
        
    </div>
    <!-- for user -->
    <div id="user" class="w3-modal">
        <div class="w3-modal-content w3-animate-zoom w3-r">
            <div class="w3-container w3-blue w3-display-container">
                <span onclick="document.getElementById('user').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
                <h1>LOGIN</h1>
            </div>
            <div class="w3-container">
                <center>


                    <form action="" autocomplete="off"method="post">

                        <img src="login.jpg" alt="Avatar" class="avatar">


                        <div class="container">
                            <hr>
                            <label for="uname"><b>Username</b></label>
                            <input type="text" placeholder="Enter Username/Rollno" name="mailuid" >
                            <hr>
                            <label for="psw"><b>Password</b></label>
                            <input type="password" placeholder="Enter Date_of_Birth " name="pwd" >
                            <p class="w3-text-red">Format: DD-MM-YYYY</p>
                            <hr>
                            

                            <button type="submit" formaction="includes/login.inc.php" name="login-submit">Login</button>
                    </form>



                </center>

            </div>
        </div>
    </div>
    <!-- for permit -->
    <div id="permit" class="w3-modal">
        <div class="w3-modal-content w3-animate-zoom w3-r">
            <div class="w3-container w3-blue w3-display-container">
                <span onclick="document.getElementById('permit').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
                <h1>PERMIT CHECK</h1>
            </div>
            <div class="w3-container">
                <center>


                    <form action="" autocomplete="off"method="post">

                        <img src="login.jpg" alt="Avatar" class="avatar">


                        <div class="container">
                        Rollno: <br>
                        <input type="text" name="rollno" value=""><br><br> 
                                             <button type="submit" formaction="permitcheck.php" name="permit_submit">submit</button>
                    </form>



                </center>

            </div>
        </div>
    </div>
    <!-- for motor -->
    <div id="motor" class="w3-modal">
        <div class="w3-modal-content w3-animate-zoom w3-r">
            <div class="w3-container w3-blue w3-display-container">
                <span onclick="document.getElementById('motor').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
                <h1>BIKE PASS</h1>
            </div>
            <div class="w3-container w3-light-blue">
                <center>


                <form action="" autocomplete="off"method="post">
                        Name:<br><input type="text" name="name" value="" ><br> for:
                        <input type="radio" name="radio" value="student">student 
                        <input type="radio" name="radio" value="staff">staff<br> rollno: <br>
                        <input type="text" name="rollno" value=""><br><br> age: <br>
                        <input type="number" name="age" value=""><br><br>address: <br>
                       <textarea name="address"rows="2" cols="20">
                 </textarea>
                        <br><br>mobilenumber: <br>
                        <input type="text" maxlength="10" name="mobilenum" ><br><br> Emailaddresss/id:<br><input type="email" name="emailid" value=""><br><br> licencenumber:<br>
                        <input type="text" name="licencenumber" ><br><br> enter bike rc no:<br><input type="text" name="brc" value=""><br>
                        <br> <button type="submit" name="bikenext"formaction="bikenext.php" value="next">next</button>
                         <button type="submit" formaction="index.php">cancel</button>

                    </form>



                </center>

            </div>
        </div>
    </div>
    <!-- for complaint -->
    <div id="complaint" class="w3-modal">
        <div class="w3-modal-content w3-animate-zoom w3-r">
            <div class="w3-container w3-blue w3-display-container">
                <span onclick="document.getElementById('complaint').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
                <h1>COMPLAINT</h1>
            </div>
            <div class="w3-container w3-light-blue">
                <center>


                    <form autocomplete="off"method="post">

                    Enter your name:<br><input type="text" name="name" value=""><br> Enter your rollno:<br><input type="text" name="rollno" value=""><br>
                        <p>Type your complaint here</p>

                        <textarea  name="complaint"rows="10" cols="30"> 
                                    
                                </textarea><br><br><br>
                        <button type="submit" formaction="complaint_finished.php">submit</button>
                        <button type="submit" formaction="index.php">cancel</button>
                    </form>



                </center>

            </div>
        </div>
    </div>
    <!-- for find my bus -->

    <div id="findbus" class="w3-modal">
        <div class="w3-modal-content w3-animate-zoom w3-r">
            <div class="w3-container w3-blue w3-display-container">
                <span onclick="document.getElementById('findbus').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
                <h1>FIND MY BUS</h1>
            </div>
            <div class="w3-container">
                <center>


                    <form action="" autocomplete="off"method="post">
                    <h1>BUS DETAILS</h1>

busno:
<input type="number" name="userid1" value="" ><br><br>
<button type="submit" formaction="buslocation.php">find</button><br><br>

<!-- <button type="submit" formaction="https://www.google.com/maps/dir/mba+block,+MCA%2FMBA+Block+-+S%26H+Block+Rd,+Kumaran+Nagar,+Tamil+Nadu/Kongu+Engineering+College,+Thoppupalayam,+Perundurai,+Tamil+Nadu+638060/@11.2751832,77.6051198,17z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x3ba96d9d5e0e1e7f:0x16a2c852131d8b8e!2m2!1d77.6081005!2d11.2757023!1m5!1m1!1s0x3ba96d7810fe32d5:0x85cf49c5b26fb72e!2m2!1d77.6070273!2d11.2741632">find</button><br><br> -->

<button type="submit" formaction="index.php">cancel</button>
                    </form>



                </center>

            </div>
        </div>
    </div>
   
    

</header>
</head>
</body>
</html>