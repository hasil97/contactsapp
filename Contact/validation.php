<?php

session_start();

 $con = mysqli_connect('localhost','root','');

 mysqli_select_db($con, 'form');

$email = $_POST['email'];
$password = $_POST['password'];


$s = " select * from registration where email = '$email' && password = '$password'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    header('location:form.php');
}
else{
    echo "Retype login credentials";
    header('location:login.php');
}
?>