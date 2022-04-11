/*TABLE CREATION*/
CREATE TABLE Utenti(
    uid INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    username VARCHAR(30) NOT NULL,
    passphrase VARCHAR(32) NOT NULL,
    userlevel INT NOT NULL DEFAULT '0'
); 


INSERT INTO utenti(username, passphrase)
	VALUES("username", "passphrase");