<?php
session_start();
if(isset($_POST['login-submit']))
{
require 'dbh.inc.php';
$name=$_POST['mailuid'];
$password=$_POST['pwd'];

if (empty($name)||empty($password)) 
  {
    header("location: ../index.php?error=emptyfields");
    exit();
  }
else 
{
 $sql="SELECT * FROM students WHERE rollno=? OR name=?;";
 $stmt=mysqli_stmt_init($conn);
 if (!mysqli_stmt_prepare($stmt,$sql)) 
 {
    header("location: ../index.php?error=sqlerror");
    exit(); 
 }
 else
 {
     mysqli_stmt_bind_param($stmt,"ss",$name,$name);
     mysqli_stmt_execute($stmt);
     $result=mysqli_stmt_get_result($stmt);
     if ($row=mysqli_fetch_assoc($result))
      {
        $passwordcheck=$row['dob'];
        if($passwordcheck!=$password)
        {
        header("location: ../index.php?error=wrongpassw");
        exit();
        }
        else if($passwordcheck==$password)
        {
          session_start();
          $_SESSION['userid']=$row['id'];
          $_SESSION['useruid']=$row['rollno'];
          $b="yes";
          $_SESSION['check']=$b;

        if($b=="yes")
        {

          header("location: ../buspasslogin.php?login=success");
          
      
        
        exit();


        }
        else 
        {

          header("location: ../index.php?error=login_first");
          exit();

        }
      }
        else
        {
        header("location: ../index.php?error=wrongpassw");
        exit();
        }
      }
      else
      {
        header("location: ../index.php?error=nouser");
        exit();
      }

 } 

}


}
else 
{
    header("location: ../index.php");
    exit();
 }