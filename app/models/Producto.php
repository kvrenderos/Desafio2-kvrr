<?php
require_once __DIR__ . '/../../config/db.php';

class Producto {

    public static function getAll() {
        global $conn;
        return $conn->query("SELECT * FROM productos");
    }

    public static function create($nombre, $precio, $stock) {
        global $conn;
        $conn->query("INSERT INTO productos(nombre, precio, stock)
                      VALUES('$nombre', '$precio', '$stock')");
    }

    public static function delete($id) {
        global $conn;
        $conn->query("DELETE FROM productos WHERE id=$id");
    }

    public static function getById($id) {
        global $conn;
        $result = $conn->query("SELECT * FROM productos WHERE id=$id");
        return $result->fetch_assoc();
    }

    public static function update($id, $nombre, $precio, $stock) {
        global $conn;
        $conn->query("UPDATE productos 
                      SET nombre='$nombre', precio='$precio', stock='$stock' 
                      WHERE id=$id");
    }
}
?>