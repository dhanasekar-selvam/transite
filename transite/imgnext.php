
<?php
if(isset($_POST['decline']))
{ 
     $reason=$_POST['reason'];
    session_start();
    include_once 'includes/dbh.inc.php';
    $rn=$_SESSION['rrn'];

    $sql="UPDATE bikepass SET permit='decline',Reason='$reason' WHERE rollno='$rn'";
    mysqli_query($conn,$sql);
    header("location: Requestdetails.php?permit=denied_success");
    exit();   
}
else
{
    session_start();
    include_once 'includes/dbh.inc.php';
    $rn=$_SESSION['rrn'];
    $sql="UPDATE bikepass SET permit='accept' WHERE rollno='$rn'";
    mysqli_query($conn,$sql);
    header("location: Requestdetails.php?permit=success");
    exit();
}

?>