-- Mohamed HABBAAINA le : jeu. 24 nov. 2022

-- Ecrivez dans le fichier “job15.sql” une requête permettant de récupérer le nom des
-- salles et le nom de leur étage.
SELECT `nom` FROM `salles` UNION SELECT `nom` FROM `etage`;
