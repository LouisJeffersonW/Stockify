<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    

    if ($password === $confirm_password) {
        echo "Registrasi berhasil untuk $username dengan email $email.";
    } else {
        echo "Password dan konfirmasi password tidak cocok.";
    }
}
?>
