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

<body class="w3-content" style="max-width:1300px">

<?php
require 'admincontent.php';
   ?>
        <div id="aboutc" class="w3-rest w3-blue-grey w3-container " style="height:700px">
            <div class="w3-padding-64 w3-center">
                <div id="pass">

                    <center>
                        <form class="w3-card-4 w3-container "method="post">

                            <h1>VIEW USER</h1>

                            userid:
                            <input type="text" name="rollno" placeholder="Enter Rollno"value=""><br><br>
                            <button type="submit"name="adminsearch" formaction="adminsearch.php">search</button>


                        </form>
                    </center>
                </div>

            </div>
        </div>
    </div>

    </div>


</body>

</html>