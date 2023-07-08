<?php
$con = mysqli_connect("localhost", "root", "root", "BeSocial");

$denumire = $_POST['denumire'];
$pret = $_POST['pret'];
$detalii = $_POST['detalii'];
$codfurnizor = $_POST['furnizor'];

$a = mysqli_query($con, "INSERT INTO Serviciu (Denumire, Pret, Detalii, Cod_Furnizor) VALUES ('$denumire', '$pret', '$detalii', '$codfurnizor');");
include 'management-evidenta_servicii.php';
?>