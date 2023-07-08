<?php
$con = mysqli_connect("localhost", "root", "root", "BeSocial");
$nume = $_POST['firstname'];
$prenume = $_POST['lastname'];
$user = $_POST['user'];
$email = $_POST['email'];
$parola = $_POST['psw'];
$rol = $_POST['role'];
$a = mysqli_query($con, "INSERT INTO Utilizator (Nume, Prenume, User, Email, Parola, Rol) VALUES ('$nume', '$prenume','$user', '$email','$parola','$rol');");
include 'login-register.html';
?>