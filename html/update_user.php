<?php  
include('includes/connection.php');
$id=$_GET['id'];
$name=$_POST['name'];
$email=$_POST['email'];



$sql="UPDATE MyUser SET name='$name',email='$email' WHERE id='$id'";
$result=mysqli_query($conn,$sql);
if($result){
    $sql2 = "SELECT * from MyUser WHERE id='$id'";
    $result2 = mysqli_query($conn, $sql2);
    $row = mysqli_fetch_array($result2);
    session_start();
    $_SESSION['name']=$row['name'];
    header("location:user_profile.php?status=ok");
}else{
    header("location:user_profile.php?status=fail");
}

?>