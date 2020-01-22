<?php
session_start();
    $rollno = $_SESSION['rn'];
    

include_once "includes/dbh.inc.php";
$sql = "SELECT *FROM bikepass WHERE rollno='$rollno'";

$res = mysqli_query($conn, $sql);

?>




<!DOCTYPE html>
<html>
<title>TRANSITE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
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
<body class="w3-content w3-mobile" style="max-width:1400px">

<center>
<p>

  
            <h2>Review For Bike Parking </h2>
            
                    <form method="post">
                        <?php
                        if (mysqli_num_rows($res)) {
                            while ($row = mysqli_fetch_assoc($res)) {
?>
<div style="overflow-x:auto;">

<table border="1">

<tr>		                
<td><b>Rollno:</b></td>
<td ><?php echo $row['rollno'];?></td>
</tr>
<tr>                  
<td><b>Name:</b></td>
<td><?php echo $row['name'];?></td>
</tr>
<tr>                  
<td><b>For:</b></td>
<td><?php echo $row['forr'];?></td>
</tr>
<tr>                  
<td><b>Age:</b></td>
<td><?php echo $row['age'];?></td>
</tr>
<tr>                  
<td><b>Mobileno:</b></td>
<td><?php echo $row['mobileno'];?></td>
</tr>
<tr>                  
<td><b>Licenceno:</b></td>
<td><?php echo $row['licenceno'];?></td>
</tr>
<tr>                  
<td><b>Bikerc:</b></td>
<td><?php echo $row['bikerc'];?></td>
</tr>
<tr>                  
<td><b>Permit:</b></td>
<td><?php echo $row['permit'];?></td>
</tr>
                             <?php  
                            }
                        }
                    
                        ?> 

</table>
</div>
                </p>
                    </br>
                    </br>
                    
<p>Click <a type="submit"onclick="window.print()" class="w3-text-blue w3-hover-blue">Print this page</a> and show the Hardcopy at TransportOffice.You will get the Pass_Sticker</p>

		
		<input type="submit" formaction="index.php" value="Home"></button>

                    </form>
                </center>
            </div>

        </div>
    </div>
    </div>

    </div>


</body>

</html>