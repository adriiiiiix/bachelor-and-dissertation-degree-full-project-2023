<?php
$con = mysqli_connect("localhost", "root", "root", "BeSocial");
$user = $_POST['user'];
$parola = $_POST['psw'];
$rol = $_POST['role'];
$x = mysqli_query($con, "SELECT * FROM Utilizator WHERE User='$user' && Parola='$parola' && Rol='$rol';");
$a = 0;
while ($z = mysqli_fetch_assoc($x)) {
    $id = $z["User"];
    $pass = $z["Parola"];
    $role = $z["Rol"];
    $a = 1;
}
if ($a == 0) {
    include "login.html";
} else {
    if ($rol == 'admin') {
        include "admin.html";
    }
    if ($rol == 'user') {
        include "user.html";
    }
}
?>