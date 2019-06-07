CREATE DATABASE IF NOT EXISTS videoteka DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

USE videoteka;

CREATE TABLE IF NOT EXISTS clanovi (
    id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    ime VARCHAR(50) NOT NULL,
    prezime VARCHAR(50) NOT NULL) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS filmovi (
    id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    naslov VARCHAR(50) NOT NULL) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS posudba (
    id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    datum_posudbe DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    datum_vracanja DATETIME on update CURRENT_TIMESTAMP,
    clanovi_id INT UNSIGNED NOT NULL,
    FOREIGN KEY (clanovi_id) REFERENCES clanovi(id),
    filmovi_id INT UNSIGNED NOT NULL,
    FOREIGN KEY (filmovi_id) REFERENCES filmovi(id)
        ) ENGINE=InnoDB;

INSERT INTO clanovi
        (ime, prezime)
    VALUES
        ('Goran', 'Rumenjak'), ('Marko', 'Markić'), ('Pero', 'Perić'),('Ana', 'Anić');

INSERT INTO filmovi
        (naslov)
    VALUES
        ('Star Wars'), ('Matrix'), ('Django unchained'),('Simpsons');

INSERT INTO posudba
        (clanovi_id, filmovi_id)
    VALUES
        (1,4), (2,3), (3,2),(4,1);

--SELECT ALL USERS /w name + surname--
SELECT c.ime AS Name, c.prezime AS Surname
    FROM clanovi c
    ;

--SELECT ALL USERS /w name + surname who rented --
SELECT c.ime AS Ime, c.prezime AS Prezime, po.datum_posudbe AS 'Datum posudbe'
    FROM clanovi c
    INNER JOIN posudba po ON po.clanovi_id = c.id
    ;

--SELECT ALL USERS /w name + surname who rented + movie title--
SELECT c.ime AS Ime, c.prezime AS Prezime, po.datum_posudbe AS 'Datum posudbe', f.naslov AS 'Ime filma'
    FROM clanovi c
    INNER JOIN posudba po ON po.clanovi_id = c.id
    INNER JOIN filmovi f on f.id = po.filmovi_id
    ;

--SELECT ALL USERS /w name + surname who rented + movie title and did not return--
SELECT c.ime AS Ime, c.prezime AS Prezime, po.datum_posudbe AS 'Datum posudbe', f.naslov AS 'Ime filma'
    FROM clanovi c
    INNER JOIN posudba po ON po.clanovi_id = c.id AND datum_vracanja IS NULL
    INNER JOIN filmovi f on f.id = po.filmovi_id
    ;

--SELECT ALL USERS /w name + surname who DID NOT rent--
SELECT c.ime AS Ime, c.prezime AS Prezime
    FROM clanovi c 
    WHERE c.id 
    NOT IN ( SELECT clanovi_id FROM posudba)
    ;