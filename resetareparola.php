<?php
// Conectarea la baza de date
$con = mysqli_connect("localhost", "root", "root", "BeSocial");

if (mysqli_connect_errno()) {
    die("Conexiunea la baza de date a eșuat: " . mysqli_connect_error());
}

// Include PHPMailer și clasele necesare
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Funcție pentru trimiterea emailului de resetare a parolei
function sendPasswordResetEmail($email, $newPassword) {
    $mail = new PHPMailer(true);

    try {
        // Configurăm serverul SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'adresa-ta@gmail.com'; // Adresa ta de Gmail
        $mail->Password = 'parola-generata'; // Parola de aplicație generată pentru Gmail
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Configurăm detalii email
        $mail->setFrom('adresa-ta@gmail.com', 'Numele tău');
        $mail->addAddress($email);
        $mail->Subject = 'Resetare parolă';
        $mail->Body = "Noua ta parolă este: $newPassword";

        // Trimitem emailul
        $mail->send();
        return true;
    } catch (Exception $e) {
        return "Trimiterea emailului a eșuat: {$mail->ErrorInfo}";
    }
}

// Funcție pentru trimiterea altui tip de email (de exemplu, notificare)
function sendNotificationEmail($email, $message) {
    $mail = new PHPMailer(true);

    try {
        // Configurăm serverul SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'adresa-ta@gmail.com'; // Adresa ta de Gmail
        $mail->Password = 'parola-generata'; // Parola de aplicație generată pentru Gmail
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Configurăm detalii email
        $mail->setFrom('adresa-ta@gmail.com', 'Numele tău');
        $mail->addAddress($email);
        $mail->Subject = 'Notificare importantă';
        $mail->Body = $message;

        // Trimitem emailul
        $mail->send();
        return true;
    } catch (Exception $e) {
        return "Trimiterea emailului a eșuat: {$mail->ErrorInfo}";
    }
}

// Verificăm metoda de request și procesăm datele pentru resetare parolă
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Filtrăm și preluăm adresa de email
    $email = mysqli_real_escape_string($con, $_POST['email']);

    // Generăm o nouă parolă
    $newPassword = generateRandomPassword();

    // Actualizăm parola în baza de date
    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
    $sql = "UPDATE Utilizator SET Parola = '$hashedPassword' WHERE Email = '$email'";

    if (mysqli_query($con, $sql)) {
        // Trimitem emailul de resetare a parolei
        $result = sendPasswordResetEmail($email, $newPassword);

        if ($result === true) {
            echo "Un email a fost trimis la adresa ta cu noua parolă.";
        } else {
            echo $result;
        }
    } else {
        echo "Eroare la actualizarea parolei: " . mysqli_error($con);
    }
}

// Funcție pentru generarea unei parole aleatoare
function generateRandomPassword($length = 8) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomPassword = '';
    for ($i = 0; $i < $length; $i++) {
        $randomPassword .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomPassword;
}

// Închidem conexiunea la baza de date
mysqli_close($con);
?>
