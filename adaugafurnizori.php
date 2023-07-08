<?php
$con = mysqli_connect("localhost", "root", "root", "BeSocial");

$denumire = $_POST['denumire'];
$adresa = $_POST['adresa'];
$email = $_POST['email'];
$telefon = $_POST['telefon'];

$a = mysqli_query($con, "INSERT INTO Furnizor (Denumire, Adresa, Email, Telefon) VALUES ('$denumire', '$adresa','$email', '$telefon');");
include 'management-evidenta_furnizori.php';
?>