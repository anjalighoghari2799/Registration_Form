<?php 
include "connection.php";
$sid=$_GET['id'];
$sql="DELETE FROM `info` WHERE id={$sid}";
$result=mysqli_query($conn,$sql);
if($result){
    header("location:tabledata.php");
}
?>