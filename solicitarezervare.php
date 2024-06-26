<?php
$con = mysqli_connect("localhost", "root", "root", "BeSocial");

$nume = $_POST['nume'];
$prenume = $_POST['prenume'];
$denumire = $_POST['denumire'];
$data = $_POST['data'];
$detalii = $_POST['detalii'];
$buget = $_POST['buget'];
$codserviciu = $_POST['serviciu'];

$a = mysqli_query($con, "INSERT INTO RezervareEveniment (Nume, Prenume, Denumire, Data, Detalii, Buget, Cod_Serviciu) VALUES ('$nume', '$prenume', '$denumire', '$data', '$detalii', '$buget', '$codserviciu');");
include 'solicita-rezervare.php';
?>