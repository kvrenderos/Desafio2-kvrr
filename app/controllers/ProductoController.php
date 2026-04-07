<?php
require_once __DIR__ . '/../models/Producto.php';

if (isset($_POST['crear'])) {
    Producto::create($_POST['nombre'], $_POST['precio'], $_POST['stock']);
    header("Location: /Desafio2/index.php?page=productos");
    exit;
}

if (isset($_GET['delete'])) {
    Producto::delete($_GET['delete']);
    header("Location: /Desafio2/index.php?page=productos");
    exit;
}

if (isset($_POST['actualizar'])) {
    Producto::update($_POST['id'], $_POST['nombre'], $_POST['precio'], $_POST['stock']);
    header("Location: /Desafio2/index.php?page=productos");
    exit;
}
?>