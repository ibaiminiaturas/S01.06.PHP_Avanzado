<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    echo "<h2>Datos enviados:</h2>";
    echo "<p>Nombre de usuario: $username</p>";
    echo "<p>Correo electrónico: $email</p>";
    echo "<p>Mensaje: $message</p>";

    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;

    echo "<h2>Datos guardados en sesión:</h2>";
    echo "<p>Nombre de usuario en sesión:" . $_SESSION['username'] . "</p>";
    echo "<p>Correo electrónico en sesión:" . $_SESSION['email'] . "</p>";
} else {
    echo "<p>No se enviaron datos del formulario.</p>";
}
?>