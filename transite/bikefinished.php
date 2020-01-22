<?php
include_once 'includes/dbh.inc.php';

if(isset($_POST['bikefinished']))
{
$newfilename=$_POST['img1'];
if (empty($newfilename)) {
$newfilename="gallery";
}
else {
    $newfilename=strtolower(str_replace(" ","-",$newfilename));    
}
$name="a";
$title="b";


$file=$_FILES['img'];
$filename=$file["name"];
$filetype=$file["type"];
$filetempname=$file["tmp_name"];
$fileerror=$file["error"];
$filesize=$file["size"];

$fileext=explode(".",$filename);
$fileactext=strtolower(end($fileext));

$allowed=array('jpg','jpeg','png');
if(in_array($fileactext, $allowed))
    {
    if($fileerror===0)
    {
     if($filesize<20000000)
     {
         $imagename=$newfilename.".".uniqid("",true).".".$fileactext;
         $filedestination="../transite/uploads/".$imagename;

         include_once 'includes/dbh.inc.php';

         if (empty($title) || empty($name)) {
            header("Location:../bikenext.php?upload=empty");
            exit();
         }
         else {
      $sql="SELECT * FROM galary;";
      $stmt=mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt,$sql)) {
echo"sql statement failed";
      }
      else {
          mysqli_stmt_execute($stmt);
          $result=mysqli_stmt_get_result($stmt);
          $rowcount=mysqli_num_rows($result);
          $setimg=$rowcount+1;

          $sql="INSERT INTO galary(name,title,ordergalary) VALUES (?,?,?);";

      }if (!mysqli_stmt_prepare($stmt,$sql)) {
echo"sql statement failed";
      }else {
mysqli_stmt_bind_param($stmt,"sss",$name,$title,$setimg);   
mysqli_stmt_execute($stmt);


move_uploaded_file($filetempname,$filedestination);
header("Location:../bikefinished.php?upload=sucess"); 
  }
        }



     }
    }
     else {
         echo"too big";
         exit();
     }
    }else {
        echo"error";
        exit();
    }
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
                    <form class="w3-card-4 w3-container ">


                        <p>thanks for filling the form you will receive vehicle parking form via email while the verification is sucessfull otherwise you will receive unverified form to the mail if unsucessfull <br><br><br> thank you </p>


                        <button type="submit" formaction="index.php">Home</button>
                    </form>
                </center>
            </div>

        </div>
    </div>
    </div>

    </div>


</body>

</html>