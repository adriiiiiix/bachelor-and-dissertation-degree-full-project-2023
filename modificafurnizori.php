<?php
$con = mysqli_connect("localhost", "root", "root", "BeSocial");

$id = $_POST['id'];
$denumire = $_POST['denumire'];
$adresa = $_POST['adresa'];
$email = $_POST['email'];
$telefon = $_POST['telefon'];

$sql = mysqli_query($con, "UPDATE Furnizor SET Denumire='$denumire', Adresa='$adresa', Email='$email', Telefon='$telefon' WHERE ID='$id'");
include 'management-evidenta_furnizori.php';
?>