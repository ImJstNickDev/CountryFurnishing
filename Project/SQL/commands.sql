-- CREAZIONE DATABASE TOTALE
CREATE DATABASE countryfurnishings;

USE countryfurnishings;

-- USER TABLE CREATION
CREATE TABLE Utenti(
    uid INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(30) NOT NULL,
    cognome VARCHAR(30) NOT NULL,
    username VARCHAR(30) NOT NULL,
    passphrase VARCHAR(32) NOT NULL,
    email VARCHAR(128) NOT NULL,
    ragionesociale VARCHAR(40) default "n/d",
    piva VARCHAR(30) default "n/d",
    codfis VARCHAR(18) NOT NULL,
    userlevel INT NOT NULL DEFAULT 0,
    statoattivazione INT NOT NULL DEFAULT -1
); 


-- "098f6bcd4621d373cade4e832627b4f6" = "test"
INSERT INTO utenti(nome, cognome, username, passphrase, email, ragionesociale, piva, codfis, statoattivazione)
	VALUES("testo", "testato", "test", "098f6bcd4621d373cade4e832627b4f6", "testmail@mail.com", "SOCIATO", "IT349286492", "MRJCKE02O03H482C", 1);

INSERT INTO utenti(nome, cognome, username, passphrase, email, ragionesociale, piva, codfis, userlevel, statoattivazione)
    VALUES("admino", "peppino", "admin", "098f6bcd4621d373cade4e832627b4f6", "admin@mail.com", "admin", "IT349286491", "ADMPPI01P02H501C", 99, 1);



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