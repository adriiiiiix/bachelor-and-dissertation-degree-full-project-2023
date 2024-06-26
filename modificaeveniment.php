<?php
$con = mysqli_connect("localhost", "root", "root", "BeSocial");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'] ?? null;
    $title = $_POST['title'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $imagePath = "";

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

        if (move_uploaded_file($fileTmpPath, $dest_path)) {
            $imagePath = $dest_path;
        } else {
            echo "A apărut o eroare în timpul încărcării fișierului.";
            exit;
        }
    }

    if ($id) {
        // Update event
        if ($imagePath) {
            $sql = "UPDATE Evenimente SET Titlu='$title', Categorie='$category', Descriere='$description', Imagine='$imagePath' WHERE ID=$id";
        } else {
            $sql = "UPDATE Evenimente SET Titlu='$title', Categorie='$category', Descriere='$description' WHERE ID=$id";
        }

        if (mysqli_query($con, $sql)) {
            echo "Eveniment actualizat cu succes!";
        } else {
            echo "Eroare la actualizarea în baza de date: " . mysqli_error($con);
        }
    } else {
        // Add event
        $sql = "INSERT INTO Evenimente (Titlu, Categorie, Descriere, Imagine) VALUES ('$title', '$category', '$description', '$imagePath')";

        if (mysqli_query($con, $sql)) {
            echo "Eveniment adăugat cu succes!";
        } else {
            echo "Eroare la adăugarea în baza de date: " . mysqli_error($con);
        }
    }
} else {
    echo "Metodă de solicitare invalidă.";
}

mysqli_close($con);
?>
