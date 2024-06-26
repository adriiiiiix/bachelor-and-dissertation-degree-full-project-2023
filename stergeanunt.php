<?php
$con = mysqli_connect("localhost", "root", "root", "BeSocial");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    // Verificăm dacă ID-ul este valid
    if ($id) {
        $sql = "DELETE FROM ads WHERE ID=$id";

        if (mysqli_query($con, $sql)) {
            echo "Anunț șters cu succes!";
        } else {
            echo "Eroare la ștergerea în baza de date: " . mysqli_error($con);
        }
    } else {
        echo "ID invalid.";
    }
} else {
    echo "Metodă de solicitare invalidă.";
}

mysqli_close($con);
?>
