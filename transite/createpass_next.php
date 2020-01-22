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
    include 'includes/dbh.inc.php';
    ?>

 <?php
    if (isset($_POST['passsubmit'])) {
        
        $startstop=$_POST['start'];
        $endstop=$_POST['end-bus'];
        
        $_SESSION['st']=$startstop;
        $_SESSION['et']=$endstop;
                $keyLength = 8;
                $str = "1234567890abcdefghijklmnopqrstuvwxyz";
                $randstring = substr(str_shuffle($str), 0, $keyLength);
            
        


            $startstop = $_POST['end-bus'];

            $sql = "SELECT *  from bus WHERE stop1='$startstop' OR stop2='$startstop' OR stop3='$startstop' OR stop4='$startstop';";
            $res2 = mysqli_query($conn, $sql);
            $sql1 = "SELECT *  from bus WHERE stop1='$startstop' OR stop2='$startstop' OR stop3='$startstop' OR stop4='$startstop';";
            $res3 = mysqli_query($conn, $sql1);

            // if (mysqli_num_rows($res2)) {
            //     while ($rows = mysqli_fetch_assoc($res2)) {
            //         $bus = $rows['busno'];
            //     }
            // }
        }
    
    else
    {
        header("location: createpass.php?error=invalidrollno ");
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
     <!-- <style>
    #pass {
        width: auto;
        margin-left: auto;
        margin-right: auto;
        margin-top: auto;
        margin-bottom: auto;
        border: 1px ;
        padding: 150px;
        margin: left;
        margin: auto;
    } -->
</style>

 <body class="w3-content" style="max-width:1300px">

     <?php
        require 'content.php';
        ?>
     <div id="aboutc" class="w3-rest w3-blue-grey w3-container " style="height:700px">
         <div class="w3-padding-64 w3-center">
             <div id="pass">
                 <center>
                 <?php
                    
                 echo "<div style='overflow-x:auto;'> ";           
		echo "<table border='1'>
		<tr>
		<th>busno</th>
		<th>stop1</th>
		<th>stop2/staff</th>
		<th>stop3</th>
		<th>stop4</th>
		<th>stop5</th>



		</tr>";
		
		while ($row = mysqli_fetch_array($res3)) {
			echo "<tr>";
			echo "<td>" . $row['busno'] . "</td>";
			echo "<td>" . $row['stop1'] . "</td>";
			echo "<td>" . $row['stop2'] . "</td>";
			echo "<td>" . $row['stop3'] . "</td>";
			echo "<td>" . $row['stop4'] . "</td>";			
			echo "<td>" . $row['stop5'] . "</td>";



			echo "</tr>";
		}
        echo "</table>";
        echo "</div>";
		?>
                 
                 
                 
                 
                 
                 
                 
                 
                 <form class="w3-card-4 w3-container "method="post" action="transaction.php">
                     <h1>CREATE PASS</h1>

                    
                     busno:
                     <select name="selectbus" style="width: 200px;" required>
                     <option value=""> select-busno</option>

                   <?php
                     if (mysqli_num_rows($res2)) {
                while ($rows = mysqli_fetch_assoc($res2)) {
                           
                    ?>
                             <option value="<?php  echo $rows['busno'];?>" name="bno"><?php  echo $rows['busno']; ?></option>
                   <?php     
                }
            }
              ?>         
                   </select>   <br><br>
                             passid:
                         <input type="text" name="passid" value="<?php echo $randstring; ?>"><br><br>
                       
                         passtype:
                         <select name="pass-type" style="width: 200px;" required >
                         <option>select-passtype</option>

                                 <option value="HalfYear">HalfYear</option>
                                 <option value="FullYear">FullYear</option>
                             </select><br><br>
                             <button type="submit" name="pass-next-submit">submit</button>
                             <button type="submit" name="" formaction="createpass.php">back</button>
                     </form>
                     </head>

 </body>

 </html>