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
    $link = $_POST['link'];
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
            $sql = "UPDATE ads SET Titlu='$title', Categorie='$category', Descriere='$description', Imagine='$imagePath', Link='$link' WHERE ID=$id";
        } else {
            $sql = "UPDATE ads SET Titlu='$title', Categorie='$category', Descriere='$description', Link='$link' WHERE ID=$id";
        }

        if (mysqli_query($con, $sql)) {
            echo "Anunț actualizat cu succes!";
        } else {
            echo "Eroare la actualizarea în baza de date: " . mysqli_error($con);
        }
    } else {
        // Add event
        $sql = "INSERT INTO ads (Titlu, Categorie, Descriere, Imagine, Link) VALUES ('$title', '$category', '$description', '$imagePath', '$link')";

        if (mysqli_query($con, $sql)) {
            echo "Anunț adăugat cu succes!";
        } else {
            echo "Eroare la adăugarea în baza de date: " . mysqli_error($con);
        }
    }
} else {
    echo "Metodă de solicitare invalidă.";
}

mysqli_close($con);
?>