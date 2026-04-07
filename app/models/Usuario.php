<?php
require_once __DIR__ . '/../../config/db.php';

class Usuario {

    public static function login($username, $password) {
        global $conn;
        $password = md5($password);
        $sql = "SELECT * FROM usuarios WHERE username='$username' AND password='$password'";
        $result = $conn->query($sql);
        return $result->fetch_assoc();
    }

    public static function register($username, $password) {
        global $conn;
        $password = md5($password);
        $conn->query("INSERT INTO usuarios(username, password) VALUES('$username', '$password')");
    }
}
?>