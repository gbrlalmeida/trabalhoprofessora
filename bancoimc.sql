CREATE DATABASE imcalculadora;

USE imcalculadora;

CREATE TABLE calculos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    idade INT,
    peso FLOAT NOT NULL,
    altura FLOAT NOT NULL,
    imc FLOAT NOT NULL,
    data TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
