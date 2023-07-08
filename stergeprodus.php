<?php
$con = mysqli_connect("localhost", "root", "root", "BeSocial");

$id = $_POST['id'];

$sterge = mysqli_query($con, "DELETE FROM Produs WHERE Cod_Produs ='$id';");

include 'management-evidenta_produse.php';
?>