<?php
$con = mysqli_connect("localhost", "root", "root", "BeSocial");

// Obțineți informațiile existente despre imagine
$id = mysqli_real_escape_string($con, $_POST['id']);
$sql = "SELECT * FROM Eveniment WHERE ID='$id'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

// Modificați imaginea
$newImageName = $_FILES['imagine']['name'];
$newImageTmpName = $_FILES['imagine']['tmp_name'];
move_uploaded_file($newImageTmpName, './images/' . $newImageName);

// Actualizați informațiile despre imagine în baza de date
$denumire = mysqli_real_escape_string($con, $_POST['denumire']);
$perioada = mysqli_real_escape_string($con, $_POST['perioada']);
$ora = mysqli_real_escape_string($con, $_POST['ora']);
$detalii = mysqli_real_escape_string($con, $_POST['detalii']);
$sql = "UPDATE Eveniment SET Imagine='$newImageName', Denumire='$denumire', Perioada='$perioada', Ora='$ora' WHERE ID='$id'";
mysqli_query($con, $sql);

// Verificați dacă modificarea a fost efectuată cu succes
if (mysqli_affected_rows($con) > 0) {
    echo 'Modificarea a fost efectuată cu succes.';
} else {
    echo 'Modificarea a eșuat.';
}

//include 'management-evidenta_evenimente.php';
?>