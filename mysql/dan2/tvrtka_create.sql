/********* KREIRANJE TABLICA ************/

SHOW TABLES;

CREATE TABLE IF NOT EXISTS grad (
    id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    ime VARCHAR(50) NOT NULL ) ENGINE=InnoDB;

DESCRIBE grad;

CREATE TABLE IF NOT EXISTS poslovnica (
    id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    naziv VARCHAR(10) NOT NULL,
    grad_id INT UNSIGNED NOT NULL,
    FOREIGN KEY (grad_id) REFERENCES grad(id) ) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS zaposlenici (
    id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    ime VARCHAR(20) NOT NULL,
    prezime VARCHAR(20) NOT NULL,
    poslovnica_id INT UNSIGNED NOT NULL,
    FOREIGN KEY (poslovnica_id) REFERENCES poslovnica(id) ) ENGINE=InnoDB;

ALTER TABLE zaposlenici ADD adresa VARCHAR(50);

ALTER TABLE zaposlenici ADD OiB VARCHAR(11) DEFAULT null;

ALTER TABLE zaposlenici DROP COLUMN OiB;

ALTER TABLE zaposlenici DROP FOREIGN KEY poslovnica_id;

DROP TABLE zaposlenici;

CREATE TABLE IF NOT EXISTS zaposlenici (
    id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    ime VARCHAR(20) NOT NULL,
    prezime VARCHAR(20) NOT NULL,
    poslovnica_id INT UNSIGNED NOT NULL) ENGINE=InnoDB;

ALTER TABLE zaposlenici ADD FOREIGN KEY (poslovnica_id) REFERENCES poslovnica(id);


/********* POPUNJAVANJE TABLICA ************/

INSERT INTO grad VALUES (1, 'Zagreb');

INSERT INTO grad (ime) VALUES ('Pula');

INSERT INTO grad (ime) VALUES ('Split'), ('Varaždin');

SELECT * FROM grad;

INSERT INTO poslovnica (naziv, grad_id) VALUES ('12-106', 2), ('12-107', 3);

INSERT INTO zaposlenici
        (ime, prezime, poslovnica_id)
    VALUES
        ('Pero', 'Perić', 1), ('Marko', 'Markić', 2), ('Ana', 'Anić', 3),('Iva', 'Ivić', 1);


CREATE TABLE IF NOT EXISTS voditelj_poslovnice (
    zaposlenik_id INT UNSIGNED NOT NULL,
    FOREIGN KEY (zaposlenik_id) REFERENCES zaposlenici(id),
    poslovnica_id INT UNSIGNED NOT NULL,    
    FOREIGN KEY (poslovnica_id) REFERENCES poslovnica(id)
    ) ENGINE=InnoDB;

INSERT INTO voditelj_poslovnice (zaposlenik_id, poslovnica_id)
    VALUES (2,2), (4,1);

UPDATE zaposlenici SET ime = 'Periša' WHERE id = 1;

UPDATE zaposlenici SET prezime = 'Perić' WHERE id = 2;

UPDATE zaposlenici SET ime = 'Ivana' WHERE prezime = 'Perić';

DELETE FROM zaposlenici WHERE id = 4;

DELETE FROM zaposlenici WHERE ime = 'Ana';