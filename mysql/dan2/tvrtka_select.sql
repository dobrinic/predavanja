
SELECT ime, prezime FROM zaposlenici;

SELECT ime, prezime FROM zaposlenici WHERE ime = 'Ivana';

ALTER TABLE zaposlenici ADD godine INT;

UPDATE zaposlenici SET godine = 23;

SELECT ime FROM zaposlenici WHERE godine < 25;