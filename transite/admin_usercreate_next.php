<?php
   include_once 'includes/dbh.inc.php';
   $sql="SELECT id FROM students ORDER BY id DESC LIMIT 1";
   $res=mysqli_query($conn,$sql);
   if (mysqli_num_rows($res)) {
    while ($rows = mysqli_fetch_assoc($res)) {	
     $idd=$rows['id'];
    }
}
?>
<?php
if(isset($_POST['createuser']))
{
   include_once 'includes/dbh.inc.php';
   $userid=$_POST['id'];
   $name=$_POST['name'];
   $age=$_POST['age'];
   $address=$_POST['address'];
   $dob=$_POST['dob'];
   $dept=$_POST['degree'];
   $batch=$_POST['batch'];
   $mobile=$_POST['mobile'];
   $id=$idd+1;
}
?>
<?php
if(isset($_POST['createuser']))
{
include_once 'includes/dbh.inc.php';
$sql1="SELECT * FROM students;";
$res=mysqli_query($conn,$sql1);
   if (mysqli_num_rows($res)) {
    while ($rows = mysqli_fetch_assoc($res)) {	
    $checkid=$rows['rollno'];
    if($checkid==$userid)
    {
       $v="yes";
    }
    }
}
}
?>


<?php
if(isset($_POST['createuser']))
{
   if($v=="yes")
   {
      header("location: createuser_admin.php?error=id_is_already_registered");
      exit();
   }
   else
   {
   
   $sql1="INSERT INTO students(id,rollno,name,address,dept,batch,mobileno,age,dob) VALUES($id,'$userid','$name','$address','$dept','$batch','$mobile',$age,'$dob');";
   mysqli_query($conn,$sql1);
   header("location: createuser_admin.php?submit=sucess");
   exit();
}
}

?>
