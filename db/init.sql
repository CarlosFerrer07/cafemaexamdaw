CREATE DATABASE IF NOT EXISTS cafema01;
USE cafema01;

CREATE TABLE IF NOT EXISTS usuarios (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    edad INT NOT NULL,
    estilo VARCHAR(50) NOT NULL
);

INSERT INTO usuarios (nombre, edad, estilo) VALUES 
    ('Carlos', 27, 'Pop'),
    ('Vicent', 46, 'Rock');


