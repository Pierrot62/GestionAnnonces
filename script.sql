

DROP DATABASE IF EXISTS annonces;
CREATE DATABASE annonces;
USE annonces;

CREATE TABLE categories(
        idCategorie      Int  Auto_increment  NOT NULL PRIMARY KEY,
        libelleCaterogie Varchar (10) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;




CREATE TABLE role(
        idRole      Int  Auto_increment  NOT NULL PRIMARY KEY,
        libelleRole Varchar (50) NOT NULL ,
        codeRole    Int NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE utilisateur(
        idUtilisateur     Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomUtilisateur    Varchar (50) NOT NULL ,
        prenomutilisateur Varchar (50) NOT NULL ,
        emailUtilisateur  Varchar (50) NOT NULL ,
        pseudoUtilisateur Varchar (50) NOT NULL ,
        mdpUtilisateur    Varchar (50) NOT NULL ,
        telUtilisateur    Varchar (10) NOT NULL ,
        idRole            Int NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE annonces(
        idAnnonce       Int  Auto_increment  NOT NULL PRIMARY KEY,
        titreAnnonce    Varchar (50) NOT NULL ,
        lienImg         Varchar (100) NOT NULL ,
        LibelleAnnonce  Varchar (100) NOT NULL ,
        prixAnnonce     Float NOT NULL ,
        datePublication Varchar (10) NOT NULL ,
        statutAnnonce   Int NOT NULL ,
        idUtilisateur   Int NOT NULL ,
        idCategorie     Int NOT NULL

)ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE message(
        idMessage  Int  Auto_increment  NOT NULL PRIMARY KEY,
        libelleMessage  Varchar (500) NOT NULL ,
        contenueMessage Varchar (500) NOT NULL ,
        x  Int NOT NULL ,
        idUtilisateur   Int NOT NULL

)ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE message ADD CONSTRAINT FK_message_utilisateur FOREIGN KEY (idUtilisateur) REFERENCES utilisateur(idUtilisateur);

ALTER TABLE utilisateur ADD CONSTRAINT FK_utilisateur_role FOREIGN KEY (idRole) REFERENCES role(idRole);

ALTER TABLE annonces ADD CONSTRAINT FK_annonces_utilisateur FOREIGN KEY (idUtilisateur) REFERENCES utilisateur(idUtilisateur);
ALTER TABLE annonces ADD CONSTRAINT FK_annonces_categories0 FOREIGN KEY (idCategorie) REFERENCES categories(idCategorie);