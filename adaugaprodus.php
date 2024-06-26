<?php
$con = mysqli_connect("localhost", "root", "root", "BeSocial");

// Verificăm conexiunea
if (!$con) {
    die("Conexiune eșuată: " . mysqli_connect_error());
}

// Verificăm dacă datele au fost trimise prin formular
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $category = $_POST['category'];
    $description = $_POST['description'];

    // Verificăm dacă fișierul a fost încărcat
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['image']['tmp_name'];
        $fileName = $_FILES['image']['name'];
        $fileSize = $_FILES['image']['size'];
        $fileType = $_FILES['image']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));
        $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
        $uploadFileDir = 'images/';
        $dest_path = $uploadFileDir . $newFileName;

        // Mutăm fișierul în directorul de încărcare
        if (move_uploaded_file($fileTmpPath, $dest_path)) {
            $imagePath = $dest_path;

            // Inserăm datele în baza de date
            $sql = "INSERT INTO Produs (Titlu, Categorie, Descriere, Imagine) VALUES ('$title', '$category', '$description', '$imagePath')";
            if (mysqli_query($con, $sql)) {
                echo "Produs adăugat cu succes!";
            } else {
                echo "Eroare la inserarea în baza de date: " . mysqli_error($con);
            }
        } else {
            echo "A apărut o eroare în timpul încărcării fișierului.";
        }
    } else {
        echo "Niciun fișier încărcat. Eroare: " . $_FILES['image']['error'];
    }
} else {
    echo "Metodă de solicitare invalidă.";
}

mysqli_close($con);
?>
