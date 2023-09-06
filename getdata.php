<?php 
if($_POST['name']==""){
    $err="enter the name first";
   
}
else{


$tepname=$_FILES['photo']['tmp_name'];
$target_folder="upload";
$target_filename=$_FILES['photo']['name'];
$target_filesize=$_FILES['photo']['size'];
$target_fileserror=$_FILES['photo']['error'];
$target_filetype=$_FILES['photo']['type'];
$denobane = time().basename($target_filename);
$target_file=$target_folder."/".$denobane;
if($target_fileserror==0)
{
 $file_status=move_uploaded_file($tepname,$target_file);
   
}


include "connection.php";

$sname=$_POST['name'];
$semail=$_POST['email'];
$saddress=$_POST['address'];
$sgender=$_POST['gender'];
$sdob=$_POST['dob'];
$scolor=$_POST['color'];
$scity=$_POST['city'];
// $sphoto=basename($target_filename);
$sphoto=$denobane;
if($file_status){



 $sql="INSERT INTO `info` (`name`,`email`,`address`,`gender`,`city`,`dob`,`photo`,`color`) VALUES ('$sname','$semail','$saddress','$sgender','$scity','$sdob','$sphoto','$scolor')";

}

$result=mysqli_query($conn,$sql);

if($result)
{
    
    // header("location : tabledata.php");
    header("location:tabledata.php");
}

}


?>