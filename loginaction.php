<?php
$conn = mysqli_connect("localhost", "root", "", "login");

$email = $_POST['email'];
$password = $_POST['password'];

$sql = mysqli_query($conn,"SELECT * FROM `username` WHERE `email` = '$email' AND `password` = '$password'"); 
$row = mysqli_fetch_array($sql);
$num_row = mysqli_num_rows($sql);
if($num_row == 1 && $row['password']== $password){
   echo "<script>alert('you are Successfully Login');</script>";
    echo "<script>window.location.href='index.php'</script>";
}

else{
    echo "<script>alert('Invalid Credentials');</script>";
     echo "<script>window.location.href='login.php';</script>";
}



?>
<script>window.location.href = "login.php";</script>