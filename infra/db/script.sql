CREATE DATABASE sistema_simples;

USE sistema_simples;

CREAT TABLE usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAE (255) NOT NULL,
    senha VARCHAR (255) NOT NULL,

);

INSERT INTO usuario(usario,senha) VALUES ('admin','123');
