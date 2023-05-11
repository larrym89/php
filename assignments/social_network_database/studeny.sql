CREATE DATABASE facultate;
USE facultate;

CREATE TABLE student (
	idstudent INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nume VARCHAR(255) UNIQUE NOT NULL,
    prenume VARCHAR(255) UNIQUE NOT NULL,
    grupa INT CHECK (grupa <= 4 AND grupa >= 1),
    email VARCHAR(255) UNIQUE,
    data_inscrierii DATETIME DEFAULT CURRENT_TIMESTAMP,
    statut ENUM ('admis', 'respins', 'neevaluat') DEFAULT 'neevaluat'
);