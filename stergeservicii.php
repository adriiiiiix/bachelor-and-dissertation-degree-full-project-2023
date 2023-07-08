<?php
$con = mysqli_connect("localhost", "root", "root", "BeSocial");

$id = $_POST['id'];

$sterge = mysqli_query($con, "DELETE FROM Serviciu WHERE Cod_Serviciu='$id';");

include 'management-evidenta_servicii.php';
?>