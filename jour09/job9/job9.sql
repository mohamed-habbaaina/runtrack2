-- Mohamed HABBAAINA le : jeu. 24 nov. 2022

-- Ecrivez dans le fichier “job09.sql” une requête permettant de sélectionner l’ensemble
-- des informations des étudiants qui ont moins de 18 ans.
SELECT * FROM `etudiants` WHERE naissance < '2004-11-24';