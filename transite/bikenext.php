<?php
session_start();
if(isset($_POST['bikenext']))
{
$name=$_POST['name'];
$rollno=$_POST['rollno'];
$_SESSION['name']=$name;
$age=$_POST['age'];
$address=$_POST['address'];
$mobileno=$_POST['mobilenum'];
$licence=$_POST['licencenumber'];
$rc=$_POST['brc'];
$permit='Not_Yet_Given';
$reason='nill';

$email=$_POST['emailid'];

if(isset($_POST['radio']))
{
    $for=$_POST['radio'];
}
}
$v="no";
$idd=1;
echo $mobileno;
?>

<?php
if(isset($_POST['bikenext']))
{
include_once 'includes/dbh.inc.php';
$sql = "SELECT * from bikepass;";
		$res = mysqli_query($conn,$sql); 
		if (mysqli_num_rows($res)) {
 			while ($rows = mysqli_fetch_assoc($res)) {	
                 $no=$rows['rollno'];
                 $idd=$rows['id'];
                 if($rollno==$no)
                 {
                     $v="yes";
                 }
                 if($idd=="")
                 {
                     $idd=1;
                 }
                 else if($idd!="")
                 {
                     $idd=$idd+1;
                 }
             }
            }
        }
    ?>
<?php
if(isset($_POST['bikenext']))
{
if($v=="yes")
{
    header("location: bike.php?error=User_already_registered");
    exit();
}
include_once 'includes/dbh.inc.php';
$sql="INSERT INTO bikepass(id,name,forr,rollno,age,address,mobileno,email,licenceno,bikerc,permit,Reason) VALUES($idd,'$name','$for','$rollno',$age,'$address','$mobileno','$email','$licence','$rc','$permit','$reason');";
mysqli_query($conn,$sql);
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

<body class="w3-content" style="max-width:1400px">



    <div class=" w3-blue-grey w3-container " style="height:800px">
        <div class="w3-padding-64 w3-center">
            <h2>Bike Parking Form</h2>
            <div id="pass">


                <center>
                <!-- <form method="post" enctype="multipart/form-data"  name="formUploadFile">		
	<label>Select file to upload:</label>
    <input type="file" name="files[]" multiple="multiple" />
    <input type="file" name="files[]" multiple="multiple" />

    <input type="file" name="files[]" multiple="multiple" />

</form> -->


                     <form class="w3-card-4 w3-container "method="post" enctype="multipart/form-data"  name="formUploadFile">
                        <br><br>upload your college id image front and back <br> Select images: <input type="file" name="files[]" multiple="multiple" />
                         <br> upload licence image front and back <br> Select images: <input type="file" name="files[]" multiple="multiple" />
                        <br> upload bike rc image front and back <br> Select images:<input type="file" name="files[]" multiple="multiple" />
                        <br><br> 
                        <input type="submit" value="Upload File" formaction="img1.php" name="btnSubmit"/>

                    </form>
                </center>
            </div>

        </div>
    </div>
    </div>

    </div>


</body>

</html>