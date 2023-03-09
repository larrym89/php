CREATE DATABASE IF NOT EXISTS mysite;
USE mysite;

CREATE TABLE `mysite`.
`utilizatori` (
    `id`INT UNSIGNED NOT NULL AUTO_INCREMENT, 
    `prenume`VARCHAR(50) NOT NULL, 
    `nume` VARCHAR(50) NOT NULL, 
    `email` VARCHAR(50) NOT NULL, 
    `parola` VARCHAR(100) NOT NULL, 
    `datanastere` DATE NOT NULL, 
    `sex` ENUM('m', 'f', 'n') NOT NULL, 
    `telefon` CHAR(10) NOT NULL, 
    `poza` VARCHAR(50) NOT NULL, 
    `dataadaugare` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, 
    PRIMARY KEY(`id`), UNIQUE `email_unic` (`email`)
) ENGINE = InnoDB;