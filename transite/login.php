<!DOCTYPE html>
<html>
<title>TRANSITE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>

</style>

<body class="w3-content " style="max-width:1300px">

            <div class="w3-container w3-card-4 w3-padding-16 w3-display-position w3-row ">
                <center>
                <h1>LOGIN</h1>


                    <form action="" method="post">

                        <img src="login.jpg" alt="Avatar" class="avatar">


                        <div class="container w3-text-black">
                            <hr>
                            <label for="uname"><b>Username</b></label>
                            <input type="text" placeholder="Enter Username" name="mailuid" >
                            <hr>
                            <label for="psw"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="pwd" >
                            <hr>
                            

                            <button type="submit" formaction="includes/login.inc.php" name="login-submit">Login</button>
                           
                            <!-- <button type="button" formaction="commontemplate.php" class="cancelbtn">Cancel</button> -->
                        </div>
                        <div class="container w3-text-black" style="background-color:#f1f1f1">

                            <span class="psw">Forgot <a href="#">password?</a><br>TO create?
                                <a href="signup.php">signup</a>
                                </span>
                        </div>
                    </form>



                </center>

            
    


    <!-- <div id="admin" class="w3-modal">
        <div class="w3-modal-content w3-animate-zoom">
            <div class="w3-container w3-black">
                <span onclick="document.getElementById('admin').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
                <h1>ADMINLOGIN</h1>
            </div>
            <div class="w3-container">
                <center>


                    <form action="" method="post">

                        <img src="login.jpg" alt="Avatar" class="avatar">

                        <div class="container">
                            <hr>
                            <label for="uname"><b>Username</b></label>
                            <input type="text" placeholder="Enter Username" name="adminname" >
                            <hr>
                            <label for="psw"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="admin-psw">
                            <br><br>
                           <div>

                                <button type="submit" formaction="includes/login.admin.inc.php" name="adminlogin-submit">Login</button>
                            </div>

                             <button type="button" formaction="commontemplate.php" class="cancelbtn">Cancel</button> 
                        </div>
            </div>
        </div> -->


</body>

</html>