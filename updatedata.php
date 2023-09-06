<?php
// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";
// die();


$tname=$_FILES['photo']['tmp_name'];
$erroe=$_FILES['photo']['error'];
$tfname=$_FILES['photo']['name'];
$file_status=move_uploaded_file($tname,"upload/".$tfname);


include "connection.php";
$sid=$_POST['id'];
$sname=$_POST['name'];
$semail=$_POST['email'];
$saddress=$_POST['address'];
$sgender=$_POST['gender'];
$sdob=$_POST['dob'];
$scolor=$_POST['color'];
$scity=$_POST['city'];
// $sphoto=basename($target_filename);
$sphoto=$tfname;
if($_FILES['photo']['name'] == ""){
 
$sql="UPDATE `info` SET name='{$sname}',
email='{$semail}',
address='{$saddress}',
gender='{$sgender}',
dob='{$sdob}',
color='{$scolor}',
city='{$scity}' WHERE id='$sid'";

}
else{

    $sql="UPDATE `info` SET name='{$sname}',
    email='{$semail}',
    address='{$saddress}',
    gender='{$sgender}',
    dob='{$sdob}',
    color='{$scolor}',
    photo='{$sphoto}',
    city='{$scity}' WHERE id='$sid'";  


}

  $result=mysqli_query($conn,$sql);
  if($result){
    header("location:tabledata.php");
  }
  else{
    echo "data mot updated";
  }







?>
