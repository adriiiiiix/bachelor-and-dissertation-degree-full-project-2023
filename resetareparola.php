<?php
$con = mysqli_connect("localhost", "root", "root", "BeSocial");

$email = $_POST['email'];
$parolanoua = $_POST['psw'];

$sql = mysqli_query($con, "UPDATE Utilizator SET Parola='$parolanoua' WHERE Email='$email'");
include 'login-register.html';
?>