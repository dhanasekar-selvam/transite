<?php
session_start();
$a=$_SESSION['check'];

if(!$a=="yes")
{
    header("location: index.php?error=login_first");
    exit();
}
?> 
<?php

$bus=$_POST['busno'];
$_SESSION['b']=$bus;

?>


<?php
 include_once 'includes/dbh.inc.php';
if(isset($_POST['editbus-submit']))
{
   $sql1="SELECT * from bus where busno=$bus";
   $res=mysqli_query($conn,$sql1);
   if (mysqli_num_rows($res)) {
    while ($rows = mysqli_fetch_assoc($res)) {	
     $busnoo=$rows['busno'];
     $stop1=$rows['stop1'];
     $stop2=$rows['stop2'];
     $stop3=$rows['stop3'];
     $stop4=$rows['stop4'];
     $stop5=$rows['stop5'];


       }
}

}

?>

<?php

if(!$busnoo==$bus)
{
    header("location: editbus_admin.php?erro=busno_has_not_registered");
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
        border: auto ;
        padding: auto;
        margin: left;
        margin: auto;
    }
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
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
                     
                        <div style="overflow-x:auto;">

<table border="1">
    <caption><h3>Old Busdetails</h3></caption>
    <tr>
        <td>busno</td>
        <td>stop1</td>
        <td>stop2</td>
        <td>stop3</td>
        <td>stop4</td>
        <td>stop5</td>

    </tr>

<tr>		                
<td ><?php echo $busnoo;?></td>

<td><?php echo $stop1;?></td>
<td><?php echo $stop2;?></td>
<td><?php echo $stop3;?></td>
<td><?php echo $stop4;?></td>
<td><?php echo $stop5;?></td>
</tr>             
</div>     

                            <h2>update bus stops here</h2>
                        
                         startstop:
                         <input type="text" name="stop1" value="KEC"><br><br>
                         
                         stop1: 
                         <input type="text" name="stop1" value=" "><br><br>
                         stop2: 
                         <input type="text" name="stop2" value=" "><br><br>
                         stop3: 
                         <input type="text" name="stop3" value=" "><br><br>
                         stop4: 
                         <input type="text" name="stop4" value=" "><br><br>
                         stop5: 
                          <input type="text" name="stop5" value=" "><br><br>
                         amount: 
                        <input type="text" name="amount" value=""><br><br>
                            <button type="submit" name="submit-next"formaction="busadmin_submit.php">updatestop</button> 
                            <button type="submit" name="submit-next"formaction="editbus_admin.php">cancel</button> 
                            <br>



                        </form>
                    </center>
                </div>

            </div>
        </div>
    </div>

    </div>


</body>

</html>