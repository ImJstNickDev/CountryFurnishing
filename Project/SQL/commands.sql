-- CREAZIONE DATABASE TOTALE
CREATE DATABASE countryfurnishings;

USE countryfurnishings;

-- USER TABLE CREATION
CREATE TABLE Utenti(
    uid INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    username VARCHAR(30) NOT NULL,
    passphrase VARCHAR(32) NOT NULL,
    email VARCHAR(128) NOT NULL,
    ragionesociale VARCHAR(40) NOT NULL,
    userlevel INT NOT NULL DEFAULT '0'
); 


-- "098f6bcd4621d373cade4e832627b4f6" = "test"
INSERT INTO utenti(username, passphrase, email, ragionesociale)
	VALUES("test", "098f6bcd4621d373cade4e832627b4f6", "testmail", "SOCIATO");

INSERT INTO utenti(username, passphrase, email, ragionesociale,userlevel)
    VALUES("admin", "098f6bcd4621d373cade4e832627b4f6", "testadmin", "admin", 99);



-- CategorieProdotti Table Creation
CREATE TABLE CategorieProdotti(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(25) NOT NULL
);


-- Prodotti Table Creation
CREATE TABLE Prodotti(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(30) NOT NULL,
    allergeni INT default 0,
    note VARCHAR(50),
    categoria INT,
    FOREIGN KEY (categoria) REFERENCES CategorieProdotti(id)
);


-- Allergeni Table Creation
CREATE TABLE Allergeni(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(30) NOT NULL
);


-- AllergeniLink Table Creation
CREATE TABLE AllergeniLink(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    idprodotto INT NOT NULL,
    idallergene INT NOT NULL,
    FOREIGN KEY (idprodotto) REFERENCES Prodotti(id),
    FOREIGN KEY (idallergene) REFERENCES Allergeni(id)
);