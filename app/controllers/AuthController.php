<?php
require_once __DIR__ . '/../models/Usuario.php';
session_start();

if (isset($_POST['login'])) {
    $user = Usuario::login($_POST['username'], $_POST['password']);
    if ($user) {
        $_SESSION['user'] = $user;
        header("Location: /Desafio2/index.php?page=dashboard");
        exit;
    } else {
        echo "Credenciales incorrectas";
    }
}

if (isset($_POST['registrar'])) {
    Usuario::register($_POST['username'], $_POST['password']);
    header("Location: /Desafio2/index.php?page=login");
    exit;
}
?>