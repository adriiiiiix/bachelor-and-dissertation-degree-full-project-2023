<?php
$con = mysqli_connect("localhost", "root", "root", "BeSocial");

$nume = $_POST['name'];
$email = $_POST['email'];
$telefon = $_POST['number'];
$mesaj = $_POST['message'];

$a = mysqli_query($con, "INSERT INTO Contact (Nume, Email, Telefon, Mesaj) VALUES ('$nume', '$email', '$telefon', '$mesaj');");
include 'index.html';
?>