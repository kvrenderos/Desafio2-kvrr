<?php
session_start();
$page = $_GET['page'] ?? 'login';

switch($page){
case 'login': include 'views/login.php'; break;
case 'registro': include 'views/registro.php'; break;
case 'dashboard': include 'views/dashboard.php'; break;
case 'productos': include 'views/productos.php'; break;
case 'editar': include 'views/editar.php'; break;
}
?>