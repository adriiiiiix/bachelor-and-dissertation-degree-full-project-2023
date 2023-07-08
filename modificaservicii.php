<?php
$con = mysqli_connect("localhost", "root", "root", "BeSocial");

$id = $_POST['id'];
$denumire = $_POST['denumire'];
$pret = $_POST['pret'];
$detalii = $_POST['detalii'];
$codfurnizor = $_POST['furnizor'];

$sql = mysqli_query($con, "UPDATE Serviciu SET Denumire='$denumire', Pret='$pret', Detalii='$detalii', Cod_Furnizor='$codfurnizor' WHERE ID='$id'");
include 'management-evidenta_servicii.php';
?>