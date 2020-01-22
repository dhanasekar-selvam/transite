
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
include_once 'includes/dbh.inc.php';
$id=$_SESSION['userid'];
?>
<?php
$sql1 = "SELECT * from students where id=$id";

		$res = mysqli_query($conn,$sql1); 
		if (mysqli_num_rows($res)) {
 			while ($rows = mysqli_fetch_assoc($res)) {	
                 $date = $rows['passdate'];
                 $year=$rows['passtype'];
            	}
 		}


?>
<?php
$d=date("d-m-y");
if($year=="HalfYear")
{
    
    $d=date("d-m-Y");
        
        
    $date = strtotime($d);
    $date = strtotime("+182 day", $date);
     
    
    $left =date("d-M-Y", $date);

    
}
else
{
    $d=date("d-m-Y");
        
        
    $date = strtotime($d);
    $date = strtotime("+365 day", $date);
     
    
    $left =date("d-M-Y", $date);
    
$_SESSION['renewd']=$left;

}
?>
<?php
if(isset($_POST['renew-pass-check']))
{
include_once 'includes/dbh.inc.php';
$d=date("d-m-Y");
$sql1="UPDATE  students SET validtill='$left' WHERE id=$id;";
    mysqli_query($conn,$sql1);
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
require 'content.php';
?>

        <div id="aboutc" class="w3-rest w3-blue-grey w3-container " style="height:700px">
            <div class="w3-padding-64 w3-center">
                <div id="pass">


                    <center>
                        <form class="w3-card-4 w3-container "method="post">

                            <h1>RENEW PASS</h1>

                            Validtill:
                            <input type="text" name="" value="<?php echo $left?>"><br><br>
                            
                            <button type="submit" name="renewpass-check" formaction="renewpass_payment.php">renew</button><br><br>
                            <button type="submit" name="renewpass-check" formaction="buspasslogin.php">cancel</button>



                        </form>
                    </center>
                </div>

            </div>
        </div>
    </div>

    </div>


</body>

</html>