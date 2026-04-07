# Desafio2-kvrr
-- Crear base de datos
CREATE DATABASE techstore;

-- Usar la base de datos
USE techstore;

-- Tabla usuarios
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);

-- Tabla productos
CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    precio DECIMAL(10,2) NOT NULL,
    stock INT NOT NULL
);

-- Usuario de prueba
INSERT INTO usuarios (username, password)
VALUES ('admin', MD5('123456'));

-- Productos de prueba
INSERT INTO productos (nombre, precio, stock) VALUES
('Laptop', 850.00, 10),
('Mouse', 15.50, 50),
('Teclado', 25.00, 30);
