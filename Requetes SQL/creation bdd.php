<?php
DROP TABLE if EXISTS Utilisateur;
CREATE TABLE Utilisateur(id_Utilisateur INT AUTO_INCREMENT NOT null, nom_Utilisateur VARCHAR(40), prenom_Utilisateur VARCHAR(40), email_Utilisateur VARCHAR(40), statut_Utilisateur INT, date_inscription_Utilisateur DATE, mot_de_passe_Utilisateur VARCHAR(255), PRIMARY KEY(id_Utilisateur)) ENGINE = InnoDB;
DROP TABLE if EXISTS Article;
CREATE TABLE Article(id_Article INT AUTO_INCREMENT NOT null, nom_Article VARCHAR(100), contenu_Article TEXT, statut_Article INT, id_Utilisateur INT, PRIMARY KEY(id_Article)) ENGINE = InnoDB;

ALTER TABLE Article ADD CONSTRAINT FK_Article_id_Utilisateur FOREIGN KEY(id_Utilisateur) REFERENCES Utilisateur(id_Utilisateur);