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
     if(isset($_POST['passsubmit']))
     {
     $idd=$_POST['useridd'];
     $_SESSION['iddd']=$idd;

    $sql1="SELECT * FROM students;";
    $res=mysqli_query($conn,$sql1);
    if (mysqli_num_rows($res)) {
        while ($rows = mysqli_fetch_assoc($res)) {
            $user=$rows['rollno'];
            if($user==$idd)
            {
                $v="yes";
            }
           
        }
            
        }
     }
    ?>

 

    
 <?php
    if (isset($_POST['passsubmit'])) {
        
        $startstop=$_POST['start'];
        $endstop=$_POST['end-bus'];
        $_SESSION['i']=$idd;
        $_SESSION['st']=$startstop;
        $_SESSION['et']=$endstop;
                $keyLength = 8;
                $str = "1234567890abcdefghijklmnopqrstuvwxyz";
                $randstring = substr(str_shuffle($str), 0, $keyLength);
            
        


            $startstop = $_POST['end-bus'];

            $sql = "SELECT *  from bus WHERE stop1='$startstop' OR stop2='$startstop' OR stop3='$startstop' OR stop4='$startstop';";
            $res2 = mysqli_query($conn, $sql);

          
        }
    
    else
    {
        header("location: createpass_admin.php?error=invalidrollno ");
        exit();
    }
    
    ?>
    <?php
     if(isset($_POST['passsubmit']))
     {
if($v!="yes")
            {
                header("location: createuser_admin.php?error=user_not_created_create_first");
                exit();
            }
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
        require 'admincontent.php';
        ?>
     <div id="aboutc" class="w3-rest w3-blue-grey w3-container " style="height:700px">
         <div class="w3-padding-64 w3-center">
             <div id="pass">
                 <center>
                     <form class="w3-card-4 w3-container "method="post" action="passcreatebyadmin.php">
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
                             <button type="submit" name="cancel-update" formaction="createpass.php">back</button>
                     </form>
                     </head>

 </body>

 </html>