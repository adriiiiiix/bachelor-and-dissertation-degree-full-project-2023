<?php
$con = mysqli_connect("localhost", "root", "root", "BeSocial");

$id = $_POST['id'];

$sterge = mysqli_query($con, "DELETE FROM Eveniment WHERE ID='$id';");

include 'management-evidenta_evenimente.php';
?>