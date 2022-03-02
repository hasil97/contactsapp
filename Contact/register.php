<?php

session_start();
header('location:login.php');
 $con = mysqli_connect('localhost','root','');

 mysqli_select_db($con, 'form');

$email = $_POST['email'];
$password = $_POST['password'];
$secret = $_POST['secret'];

$s = " select * from registration where email = '$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Email is already taken";
}
else{
    $reg = " insert into registration(email, password, secret) values ('$email' , '$password' , '$secret')";
    mysqli_query($con, $reg);
    echo "Registration Successful";
}
?>