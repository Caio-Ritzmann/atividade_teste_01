-- criou o banco de dados variavel
CREATE DATABASE sistema_simples_m1;

USE sistema_simples_m1;
-- colocou o que o sistema usara para login
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(87) NOT NULL,
    senha VARCHAR(255) NOT NULL
);
-- aqui usa para atribui valor
INSERT INTO usuarios (usuario, senha) VALUES ('admin','123');