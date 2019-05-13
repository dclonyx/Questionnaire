<?php
include '../php/Traitement/Database.php';

// Suppresion de la table si elle existe
$req = $pdo-> prepare("DROP TABLE if EXISTS Utilisateur");
$req -> execute();
$req -> closeCursor();
// Création de la table
$req = $pdo-> prepare("CREATE TABLE Utilisateur(id_Utilisateur INT AUTO_INCREMENT NOT null, nom_Utilisateur VARCHAR(40), prenom_Utilisateur VARCHAR(40), email_Utilisateur VARCHAR(40), statut_Utilisateur INT, date_inscription_Utilisateur DATE, mot_de_passe_Utilisateur VARCHAR(255), PRIMARY KEY(id_Utilisateur)) ENGINE = InnoDB;");
$req -> execute();
$req -> closeCursor();
// Suppresion de la table si elle existe
$req = $pdo-> prepare("DROP TABLE if EXISTS Article");
$req -> execute();
$req -> closeCursor();
// Création de la table
$req = $pdo-> prepare("CREATE TABLE Article(id_Article INT AUTO_INCREMENT NOT null, nom_Article VARCHAR(100), contenu_Article TEXT, statut_Article INT, id_Utilisateur INT, PRIMARY KEY(id_Article)) ENGINE = InnoDB;");
$req -> execute();
$req -> closeCursor();
// Clés étrangères
$req = $pdo-> prepare("ALTER TABLE Article ADD CONSTRAINT FK_Article_id_Utilisateur FOREIGN KEY(id_Utilisateur) REFERENCES Utilisateur(id_Utilisateur);");
$req -> execute();
$req -> closeCursor();