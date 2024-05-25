<?php

include('includes/connection.php');
$id=$_GET['id'];
$sql="DELETE FROM MyUser WHERE id='$id'";
$result=mysqli_query($conn,$sql);
if($result){
    header("location: user_fetch.php?status=ok");
}
else{
    header("location: user_fetch.php?status=fail");
}
?>