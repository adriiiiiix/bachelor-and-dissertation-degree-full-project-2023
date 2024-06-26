<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "BeSocial";

// Crearea conexiunii
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificarea conexiunii
if ($conn->connect_error) {
    die("Conexiune eșuată: " . $conn->connect_error);
}

$action = $_GET['action'] ?? '';

if ($action === 'fetch') {
    $sql = "SELECT Titlu, Descriere, Categorie, Imagine, Link FROM ads";
    $result = $conn->query($sql);

    $events = [];

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $events[] = $row;
        }
        echo json_encode($events);
    } else {
        echo json_encode([]);
    }
} else {
    echo json_encode([]);
}

$conn->close();
?>
