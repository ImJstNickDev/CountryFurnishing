/*TABLE CREATION*/
CREATE TABLE Utenti(
    uid INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    username VARCHAR(30) NOT NULL,
    passphrase VARCHAR(32) NOT NULL,
    userlevel INT NOT NULL DEFAULT '0'
); 


INSERT INTO utenti(username, passphrase)
	VALUES("username", "passphrase");






/*CREAZIONE DATABASE TOTALE*/
CREATE DATABASE countryfurnishings;

USE countryfurnishings;


CREATE TABLE Utenti(
    uid INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    username VARCHAR(30) NOT NULL,
    passphrase VARCHAR(32) NOT NULL,
    userlevel INT NOT NULL DEFAULT '0'
);


INSERT INTO utenti(username, passphrase)
	VALUES("UtenteNormale", "b87b63c6b43a4ad2a757619e3ba2aaec");
    
INSERT INTO utenti(username, passphrase, userlevel)
	VALUES("admin", "21232f297a57a5a743894a0e4a801fc3", 10);