<?php
$con = mysqli_connect("localhost", "root", "root", "BeSocial");

$denumire = $_POST['denumire'];
$categorie = $_POST['categorie'];
$data = $_POST['data'];
$ora = $_POST['ora'];

$a = mysqli_query($con, "INSERT INTO Webinar (Denumire, Categorie, Data, Ora) VALUES ('$denumire', '$categorie','$data', '$ora');");
include 'management-evidenta_webinarii.php';
?>