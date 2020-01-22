<?php

session_start();
session_unset();
session_destroy();
if(isset($_POST['logout_admin']))
{
    header("location: ../admin.php");
}
else{
header("location: ../index.php");
}