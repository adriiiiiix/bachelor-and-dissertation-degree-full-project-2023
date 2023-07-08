<?php
$con = mysqli_connect("localhost", "root", "root", "BeSocial");

$email = $_POST['email'];

$a = mysqli_query($con, "INSERT INTO Abonat (Email) VALUES ('$email');");
include 'index.html';
?>