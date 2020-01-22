<?php
if(isset($_POST['adminlogin-submit']))
{
require 'dbh.inc.php';

$name=$_POST['adminname'];
$password=$_POST['admin-psw'];

if (empty($name)||empty($password)) 
  {
    header("location: ../admin.php?error=emptyfields");
    exit();
  }
else 
{
 $sql="SELECT * FROM admin WHERE username=?;";
 $stmt=mysqli_stmt_init($conn);
 if (!mysqli_stmt_prepare($stmt,$sql)) 
 {
    header("location: ../admin.php?error=sqlerror");
    exit(); 
 }
 else
 {
     mysqli_stmt_bind_param($stmt,"s",$name);
     mysqli_stmt_execute($stmt);
     $result=mysqli_stmt_get_result($stmt);
     if ($row=mysqli_fetch_assoc($result))
      {
        if(!$password=="admin")
        {
        header("location: ../admin.php?error=wrongpassw");
        exit();
        }
        else if($password=="admin")
        {
          session_start();
          $_SESSION['userid']=$row['id'];
          $_SESSION['useruid']=$row['username'];
          $b="yes";
          $_SESSION['check']=$b;
          if($b=="yes")
        {

          header("location: ../busadmin.php?login=success");
        exit();
        }
        }
        else
        {
        header("location: ../admin.php?error=wrongpassw");
        exit();
        }
      }
      else
      {
        header("location: ../admin.php?error=nouser");
        exit();
      }
 } 

}


}
else 
{
    header("location: ../admin.php");
    exit();
 }