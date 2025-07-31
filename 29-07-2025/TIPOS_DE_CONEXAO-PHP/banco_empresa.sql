CREATE DATABASE empresa;

USE empresa;

CREATE TABLE cliente(
    id_cliente INT(11) PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50),
    endereco VARCHAR(80),
    telefone VARCHAR(20),
    email VARCHAR(50)
);