<?php
$con = mysqli_connect("localhost", "root", "root", "BeSocial");

$id = $_POST['id'];
$denumire = $_POST['denumire'];
$categorie = $_POST['categorie'];
$data = $_POST['data'];
$ora = $_POST['ora'];

$sql = mysqli_query($con, "UPDATE Webinar SET Denumire='$denumire', Categorie='$categorie', Data='$data', Ora='$ora' WHERE ID='$id'");
include 'management-evidenta_webinarii.php';
?>