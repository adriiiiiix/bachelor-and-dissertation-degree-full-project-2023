<?php
session_start();
$con = mysqli_connect("localhost", "root", "root", "BeSocial");

if (isset($_POST['user'], $_POST['psw'])) {
    $user = mysqli_real_escape_string($con, $_POST['user']);
    $parola = mysqli_real_escape_string($con, $_POST['psw']);

    $query = "SELECT * FROM Utilizator WHERE User='$user' AND Parola='$parola'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        // Setarea variabilelor de sesiune
        $_SESSION['Prenume'] = $row['Prenume'];
        $_SESSION['Nume'] = $row['Nume'];

        // Verificare rol pentru redirecționare
        if ($row['Rol'] == 'admin') {
            // Utilizatorul este admin
            header('Location: admin.php');
        } else {
            // Utilizatorul este user obișnuit
            header('Location: user.php');
        }
        exit();
    } else {
        echo "Autentificare eșuată. Verificați utilizatorul și parola.";
        include "login-register.html"; // Poți include formularul de login din nou în caz de eroare
    }
} else {
    echo "Nu s-au trimis toate datele necesare pentru autentificare.";
}
?>
