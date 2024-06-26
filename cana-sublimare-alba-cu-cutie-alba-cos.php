<?php
$con = mysqli_connect("localhost", "root", "root", "BeSocial");

$nume = $_POST['nume'];
$prenume = $_POST['prenume'];
$grad = $_POST['grad'];
$email = $_POST['email'];
$telefon = $_POST['telefon'];
$produs = $_POST['produs'];
$total = $_POST['total'];
$metoda = $_POST['card'];

$a = mysqli_query($con, "INSERT INTO AchizitionareProdus (Nume, Prenume, GradProfesional, Email, Telefon, Produs, TotalPlata, MetodaPlata) VALUES ('$nume', '$prenume','$grad', '$email',  '$telefon',  '$produs',  '$total',  '$metoda');");
include 'credit-card-payment-form-cana-sublimare-alba-cu-cutie-alba.html';
?>