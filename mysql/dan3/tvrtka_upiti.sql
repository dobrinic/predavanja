SELECT * FROM grad;
SELECT * FROM zaposlenici;

SELECT ime, prezime, godine FROM zaposlenici;

SELECT ime, prezime, godine FROM zaposlenici WHERE id = 3;

SELECT ime, prezime, godine FROM zaposlenici WHERE id = 3 OR id = 5;

SELECT ime, prezime, godine FROM zaposlenici WHERE id = 3 AND ime = 'Ana';

SELECT ime, prezime, godine FROM zaposlenici WHERE id = 3 OR id = 5 AND ime = 'Ana';

SELECT ime AS 'Ime zaposlenika', prezime AS 'Prezime' FROM zaposlenici;

SELECT * FROM zaposlenici WHERE NOT (id = 3 OR id = 5);

SELECT ime, prezime, poslovnica.naziv AS Poslovnica
    FROM zaposlenici, poslovnica
    WHERE zaposlenici.poslovnica_id = poslovnica.id;

SELECT z.ime, z.prezime, p.naziv AS Poslovnica
    FROM zaposlenici z, poslovnica p
    WHERE z.poslovnica_id = p.id;

 /* Spajanje dviju tablica naredbom JOIN*/
SELECT z.ime, z.prezime, p.naziv AS Poslovnica
    FROM zaposlenici z
    INNER JOIN poslovnica p
    ON z.poslovnica_id = p.id;

SELECT z.ime, z.prezime, p.naziv AS Poslovnica, g.ime AS Grad
    FROM zaposlenici z
    INNER JOIN poslovnica p
    ON z.poslovnica_id = p.id
    INNER JOIN grad g
    ON p.grad_id = g.id;

/* Dohvati imena i prezimena zaposlenika i ime poslovnice u kojoj radi
   i grad u kojem se nalazi te ih sortiraj po imenu silazno */

SELECT z.ime, z.prezime, p.naziv AS Poslovnica, g.ime AS Grad
    FROM zaposlenici z
    INNER JOIN poslovnica p ON z.poslovnica_id = p.id
    INNER JOIN grad g ON p.grad_id = g.id
    ORDER BY g.ime DESC, z.ime DESC;

/* Dohvati imena i prezimena zaposlenika i ime poslovnice u kojoj radi
   i grad u kojem se nalazi te ih grupiraj po imenu grada */

SELECT z.ime, z.prezime, p.naziv AS Poslovnica, g.ime AS Grad, count(g.ime) AS 'Broj pojavljivanja'
    FROM zaposlenici z
    INNER JOIN poslovnica p ON z.poslovnica_id = p.id
    INNER JOIN grad g ON p.grad_id = g.id
    GROUP BY g.ime;

SELECT DISTINCT g.ime AS Grad
    FROM grad g;

SELECT CONCAT(z.ime, ' ', z.prezime) AS 'Ime i Prezime'
    FROM zaposlenici z;

/* Dohvati poslovnice koje nemaju voditelja */
SELECT poslovnica_id FROM voditelj_poslovnice; /* vraća [2,4] */

SELECT p.naziv Poslovnica
    FROM poslovnica p
    WHERE p.id NOT IN (
        SELECT poslovnica_id FROM voditelj_poslovnice
    );

IF(boolean, true, false)
IF(true, 'DA', 'NE')

SELECT z.ime, z.prezime, p.naziv AS Poslovnica, g.ime AS Grad, IF((
        SELECT zaposlenik_id FROM voditelj_poslovnice vp, poslovnica p
        WHERE vp.poslovnica_id = p.id AND vp.zaposlenik_id = z.id), 'DA', 'NE')
        AS Voditelj
    FROM zaposlenici z
    JOIN poslovnica p ON z.poslovnica_id = p.id
    JOIN grad g ON p.grad_id = g.id;


SELECT zaposlenik_id FROM voditelj_poslovnice vp, poslovnica p, zaposlenici z
    WHERE vp.poslovnica_id = p.id AND vp.zaposlenik_id = z.id;

/* Kreiranje tablice putem SELECT naredbe*/
CREATE TABLE zaposlenici_poslovnice_TABLE AS
    SELECT z.ime, z.prezime, p.naziv AS Poslovnica
    FROM zaposlenici z
    INNER JOIN poslovnica p ON z.poslovnica_id = p.id;

/* Kreiranje pogleda o zaposleniku (ime, prezime, poslovnica) */
CREATE OR REPLACE VIEW view_zaposlenici_poslovnice AS
    SELECT z.ime, z.prezime, p.naziv AS Poslovnica
    FROM zaposlenici z
    INNER JOIN poslovnica p ON z.poslovnica_id = p.id;


SELECT ime, prezime, godine FROM zaposlenici WHERE ime LIKE '%na';

SELECT ime, prezime, godine FROM zaposlenici WHERE prezime LIKE '%nić';

SELECT ime, prezime, godine FROM zaposlenici WHERE prezime LIKE '%ni_';