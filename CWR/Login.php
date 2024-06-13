<?php
session_start();


$valid_username = "admin";
$valid_password = "password";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == $valid_username && $password == $valid_password) {
       
        $_SESSION["username"] = $username;
        echo "Login berhasil! Selamat datang, " . $username;
    } else {
        
        echo "Username atau password salah!";
    }
} else {
    echo "Invalid request method.";
}
?>
