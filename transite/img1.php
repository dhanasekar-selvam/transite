<?php
session_start();
$errors = array();
$uploadedFiles = array();
$extension = array("jpeg","jpg","png","gif");
$bytes = 1024;
$KB = 20000;
$totalBytes = $bytes * $KB;
$UploadFolder = "uploads";
$n=$_SESSION['name'];
$c=0;

 
$counter = 0;
 
foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name){
    $nn="$n$c.jpg";


    $temp = $_FILES["files"]["tmp_name"][$key];
     $name = $_FILES["files"]["name"][$key];
    // $n="17isr.jpg";
    
     
    if(empty($temp))
    {
        break;
    }
     
    $counter++;
    $UploadOk = true;
     
    if($_FILES["files"]["size"][$key] > $totalBytes)
    {
        $UploadOk = false;
        array_push($errors, $name." file size is larger than the 1 MB.");
    }
     
    $ext = pathinfo($name, PATHINFO_EXTENSION);
     echo $name;
    if(in_array($ext, $extension) == false){
        $UploadOk = false;
        array_push($errors, $name." is invalid file type.");
    }
     
    // if(file_exists($UploadFolder."/".$name) == true){
    //     $UploadOk = false;
    //     array_push($errors, $name." file is already exist.");
    // }
     
    if($UploadOk == true){
        move_uploaded_file($temp,$UploadFolder."/".$nn);
        array_push($uploadedFiles, $nn);
        $c++;
    }
}
 header("location: bikefinished.php?upload=success");
 exit();
 
// if($counter>0){
//     if(count($errors)>0)
//     {
//         echo "<b>Errors:</b>";
//         echo "<br/><ul>";
//         foreach($errors as $error)
//         {
//             echo "<li>".$error."</li>";
//         }
//         echo "</ul><br/>";
//     }
     
//     if(count($uploadedFiles)>0){
//         echo "<b>Uploaded Files:</b>";
//         echo "<br/><ul>";
//         foreach($uploadedFiles as $fileName)
//         {
//             echo "<li>".$fileName."</li>";
//         }
//         echo "</ul><br/>";
         
//         echo count($uploadedFiles)." file(s) are successfully uploaded.";
//     }                               
// }
// else{
//     echo "Please, Select file(s) to upload.";
// }



?>
