<?php
$con = mysqli_connect("localhost", "root", "root", "BeSocial");

// Obțineți informațiile existente despre imagine
$id = mysqli_real_escape_string($con, $_POST['id']);
$sql = "SELECT * FROM Produs WHERE Cod_Produs ='$id'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

// Modificați imaginea
$newImageName = $_FILES['imagine']['name'];
$newImageTmpName = $_FILES['imagine']['tmp_name'];
move_uploaded_file($newImageTmpName, './images/' . $newImageName);

// Actualizați informațiile despre imagine în baza de date
$denumire = mysqli_real_escape_string($con, $_POST['denumire']);
$pret = mysqli_real_escape_string($con, $_POST['pret']);
$sql = "UPDATE Produs SET Imagine='$newImageName', Denumire='$denumire', Pret='$pret' WHERE Cod_Produs ='$id'";
mysqli_query($con, $sql);

// Verificați dacă modificarea a fost efectuată cu succes
if (mysqli_affected_rows($con) > 0) {
    echo 'Modificarea a fost efectuată cu succes.';
} else {
    echo 'Modificarea a eșuat.';
}

//include 'management-evidenta_produse.php';
?>