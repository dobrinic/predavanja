CREATE DATABASE IF NOT EXISTS tvrtka DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE tvrtka;

CREATE TABLE IF NOT EXISTS grad (
    id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    ime VARCHAR(50) NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP on update CURRENT_TIMESTAMP NULL DEFAULT NULL) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS poslovnica (
    id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    naziv VARCHAR(10) NOT NULL,
    grad_id INT UNSIGNED NOT NULL,
    FOREIGN KEY (grad_id) REFERENCES grad(id),
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP on update CURRENT_TIMESTAMP NULL DEFAULT NULL) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS zaposlenici (
    id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    ime VARCHAR(20) NOT NULL,
    prezime VARCHAR(20) NOT NULL,
    poslovnica_id INT UNSIGNED NOT NULL,
    FOREIGN KEY (poslovnica_id) REFERENCES poslovnica(id),
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP on update CURRENT_TIMESTAMP NULL DEFAULT NULL) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS voditelj_poslovnice (
    zaposlenik_id INT UNSIGNED NOT NULL,
    FOREIGN KEY (zaposlenik_id) REFERENCES zaposlenici(id),
    poslovnica_id INT UNSIGNED NOT NULL,    
    FOREIGN KEY (poslovnica_id) REFERENCES poslovnica(id),
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP on update CURRENT_TIMESTAMP NULL DEFAULT NULL) ENGINE=InnoDB;


INSERT INTO grad (ime) VALUES ('Zagreb'), ('Pula'), ('Split'), ('Varaždin'), ('Sisak');

INSERT INTO poslovnica (naziv, grad_id) VALUES ('12-106', 1), ('12-107', 2), ('12-108', 3), ('12-109', 4);

INSERT INTO zaposlenici
        (ime, prezime, poslovnica_id)
    VALUES
        ('Pero', 'Perić', 1), ('Marko', 'Markić', 2), ('Ana', 'Anić', 3),('Iva', 'Ivić', 1), ('Lidija', 'Lidić', 4);


INSERT INTO voditelj_poslovnice (zaposlenik_id, poslovnica_id)
    VALUES (2,2), (4,1);

ALTER TABLE zaposlenici ADD godine INT AFTER prezime;

UPDATE zaposlenici SET godine = RAND()*(30)+20;
