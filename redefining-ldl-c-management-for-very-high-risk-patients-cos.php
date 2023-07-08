<?php
$con = mysqli_connect("localhost", "root", "root", "BeSocial");

$nume = $_POST['nume'];
$prenume = $_POST['prenume'];
$grad = $_POST['grad'];
$email = $_POST['email'];
$telefon = $_POST['telefon'];
$webinar = $_POST['webinar'];
$total = $_POST['total'];
$metoda = $_POST['card'];

$a = mysqli_query($con, "INSERT INTO RezervareBilet (Nume, Prenume, GradProfesional, Email, Telefon, Webinar, TotalPlata, MetodaPlata) VALUES ('$nume', '$prenume','$grad', '$email',  '$telefon',  '$webinar',  '$total',  '$metoda');");
include 'credit-card-payment-form-redefining-ldl-c-management-for-very-high-risk-patients.html';
?>