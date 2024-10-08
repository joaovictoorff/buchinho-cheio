CREATE DATABASE IF NOT EXISTS sistema_arrecadacao;
USE sistema_arrecadacao;

CREATE TABLE Doadores (
    id_doador INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255),
    telefone VARCHAR(11),
    senha VARCHAR(255) NOT NULL,
    estado VARCHAR(2),
    cidade ENUM('São_paulo')
    regiao ENUM('Norte', 'Nordeste', 'Centro-Oeste', 'Sudeste', 'Sul')
);
CREATE TABLE Doacoes (
    id_doacao INT AUTO_INCREMENT PRIMARY KEY,
    id_doador INT,
    id_alimento INT,
    quantidade_doada INT NOT NULL,
    data_doacao DATE NOT NULL,
    FOREIGN KEY (id_doador) REFERENCES Doadores(id_doador),
    FOREIGN KEY (id_alimento) REFERENCES Alimentos(id_alimento)
);

CREATE TABLE Alimentos (
    id_alimento INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    quantidade_estoque INT NOT NULL,
    data_validade DATE
);

CREATE TABLE Cestas (
    id_cesta INT AUTO_INCREMENT PRIMARY KEY,
    data_montagem DATE NOT NULL,
    status ENUM('montada', 'entregue') NOT NULL
);

CREATE TABLE Beneficiarios (
    id_beneficiario INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    endereco TEXT NOT NULL,
    telefone VARCHAR(11)
);

CREATE TABLE Doacoes (
    id_doacao INT AUTO_INCREMENT PRIMARY KEY,
    id_doador INT,
    id_alimento INT,
    quantidade_doada INT NOT NULL,
    data_doacao DATE NOT NULL,
    FOREIGN KEY (id_doador) REFERENCES Doadores(id_doador),
    FOREIGN KEY (id_alimento) REFERENCES Alimentos(id_alimento)
);

CREATE TABLE Itens_Cesta (
    id_item_cesta INT AUTO_INCREMENT PRIMARY KEY,
    id_cesta INT,
    id_alimento INT,
    quantidade INT NOT NULL,
    FOREIGN KEY (id_cesta) REFERENCES Cestas(id_cesta),
    FOREIGN KEY (id_alimento) REFERENCES Alimentos(id_alimento)
);

CREATE TABLE Entregas (
    id_entrega INT AUTO_INCREMENT PRIMARY KEY,
    id_cesta INT,
    id_beneficiario INT,
    data_entrega DATE NOT NULL,
    FOREIGN KEY (id_cesta) REFERENCES Cestas(id_cesta),
    FOREIGN KEY (id_beneficiario) REFERENCES Beneficiarios(id_beneficiario)
);
