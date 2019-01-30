<?php
DROP TABLE if EXISTS Utilisateur;
CREATE TABLE Utilisateur(id_Utilisateur INT AUTO_INCREMENT NOT null, nom_Utilisateur VARCHAR(255), prenom_Utilisateur VARCHAR(255), email_Utilisateur VARCHAR(255), statut_Utilisateur VARCHAR(255), date_inscription_Utilisateur DATE, mot_de_passe_Utilisateur VARCHAR(255), PRIMARY KEY(id_Utilisateur)) ENGINE = InnoDB;
DROP TABLE if EXISTS Questionnaire;
CREATE TABLE Questionnaire(id_Questionnaire INT AUTO_INCREMENT NOT null, nom_Questionnaire VARCHAR(255), categorie_Questionnaire VARCHAR(255), date_creation_Questionnaire DATE, date_modification_Questionnaire DATE, statut_Questionnaire VARCHAR(255), id_Utilisateur INT, id_Categorie INT, PRIMARY KEY(id_Questionnaire)) ENGINE = InnoDB;
DROP TABLE if EXISTS Questions;
CREATE TABLE Questions(id_Questions INT AUTO_INCREMENT NOT null, question_Questions TEXT, choix_Questions JSON, id_Questionnaire INT, PRIMARY KEY(id_Questions)) ENGINE = InnoDB;
DROP TABLE if EXISTS Categorie;
CREATE TABLE Categorie(id_Categorie INT AUTO_INCREMENT NOT null, nom_Categorie VARCHAR(255), PRIMARY KEY(id_Categorie)) ENGINE = InnoDB;
DROP TABLE if EXISTS Note;
CREATE TABLE Note(id_Notes INT AUTO_INCREMENT NOT null, note_Note INT, PRIMARY KEY(id_Notes)) ENGINE = InnoDB;
DROP TABLE if EXISTS Recoit;
CREATE TABLE Recoit(id_Notes INT NOT null, id_Questionnaire INT NOT null, compteur_Recoit INT, PRIMARY KEY(compteur_Recoit)) ENGINE = InnoDB;

ALTER TABLE Questionnaire ADD CONSTRAINT FK_Questionnaire_id_Utilisateur FOREIGN KEY(id_Utilisateur) REFERENCES Utilisateur(id_Utilisateur);
ALTER TABLE Questionnaire ADD CONSTRAINT FK_Questionnaire_id_Categorie FOREIGN KEY(id_Categorie) REFERENCES Categorie(id_Categorie);
ALTER TABLE Questions ADD CONSTRAINT FK_Questions_id_Questionnaire FOREIGN KEY(id_Questionnaire) REFERENCES Questionnaire(id_Questionnaire);
ALTER TABLE Recoit ADD CONSTRAINT FK_Recoit_id_Notes FOREIGN KEY(id_Notes) REFERENCES Note(id_Notes);
ALTER TABLE Recoit ADD CONSTRAINT FK_Recoit_id_Questionnaire FOREIGN KEY(id_Questionnaire) REFERENCES Questionnaire(id_Questionnaire); 