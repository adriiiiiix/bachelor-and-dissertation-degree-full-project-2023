<?php
$con = mysqli_connect("localhost", "root", "root", "BeSocial");

// Verifică dacă a fost încărcat un fișier
if (isset($_FILES['imagine'])) {

    // Stabilește calea și numele fișierului
    $target_file = "./images/" . basename($_FILES['imagine']['name']);

    // Mută fișierul încărcat în directorul de destinație
    if (move_uploaded_file($_FILES['imagine']['tmp_name'], $target_file)) {

        // Stabilește valorile pentru inserare în baza de date
        $image = $target_file;
        $denumire = $_POST['denumire'];
        $pret = $_POST['pret'];

        // Construiește interogarea SQL pentru inserare
        $sql = "INSERT INTO Produs (Imagine, Denumire, Pret) VALUES ('$image', '$denumire', '$pret')";

        // Execută interogarea
        if (mysqli_query($con, $sql)) {
            echo "Imagine încărcată cu succes.";
        } else {
            echo "Eroare la încărcarea imaginii: " . mysqli_error($con);
        }
    } else {
        echo "Eroare la mutarea fișierului încărcat.";
    }
}
//include 'management-evidenta_produse.php';
?>