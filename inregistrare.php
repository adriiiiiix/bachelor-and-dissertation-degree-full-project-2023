<?php
session_start();
$con = mysqli_connect("localhost", "root", "root", "BeSocial");

if (isset($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['psw'], $_POST['user'])) {
    $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $parola = mysqli_real_escape_string($con, $_POST['psw']);
    $user = mysqli_real_escape_string($con, $_POST['user']);

    // Setăm automat rolul utilizatorului ca "user"
    $rol = "user";

    // Înscrierea utilizatorului în baza de date cu rolul implicit "user"
    $query = "INSERT INTO Utilizator (Nume, Prenume, Email, Parola, User, Rol) 
              VALUES ('$lastname', '$firstname', '$email', '$parola', '$user', '$rol')";
    
    if (mysqli_query($con, $query)) {
        echo "Înregistrare reușită.";
        header('Location: user.php'); // Redirecționare către pagina pentru utilizator
        exit();
    } else {
        echo "Eroare la înregistrare: " . mysqli_error($con);
        include "login-register.html"; // Poți include formularul de înregistrare din nou în caz de eroare
    }
} else {
    echo "Nu s-au trimis toate datele necesare pentru înregistrare.";
}
?>
