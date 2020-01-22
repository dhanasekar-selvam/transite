<?php
session_start();
?>

<!DOCTYPE html>
<html>
<title>TRANSITE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- <style>
    #pass {
        width: 50%;
        margin-left: auto;
        margin-right: auto;
        margin-top: auto;
        margin-bottom: auto;
        border: 1px solid lightblue;
        padding: 100px;
        margin: left;
        margin: auto;
    }
</style> -->

<body class="w3-content" style="max-width:1300px">

<?php
require 'admincontent.php';
?>
        <div id="aboutc" class="w3-rest w3-blue-grey w3-container " style="height:700px">
            <div class="w3-padding-64 w3-center">
                <div id="pass">


                    <center>
                        <form method="post">
                            <h1>Add new bus</h1>
                            busno:
                            <input type="text" name="busnoc" value="" required><br><br> 
                            <button type="submit" name="checkedbus"formaction="addbusadmincheck.php">next</button>

                            
                            
                            
                            
                            <!-- stopnames:
                            <br><textarea rows="2" cols="25"></textarea><br><br>amount:
                            <input type="text" name="cp" value=""><br><br><br>
                            <button type="submit" formaction="busadmin.php">submit</button> -->


                        </form>
                    </center>
                </div>

            </div>
        </div>
    </div>

    </div>


</body>

</html>