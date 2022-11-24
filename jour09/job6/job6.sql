-- Mohamed HABBAAINA le : jeu. 24 nov. 2022

-- Ecrivez dans le fichier “job06.sql” une requête permettant de sélectionner l’ensemble
-- des informations des étudiants dont prenom commence par un “T”.
SELECT * FROM `etudiants` WHERE prenom LIKE 'T%';
