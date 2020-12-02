#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: categories
#------------------------------------------------------------

CREATE TABLE categories(
        idCategorie      Int  Auto_increment  NOT NULL ,
        libelleCaterogie Varchar (10) NOT NULL
	,CONSTRAINT categories_PK PRIMARY KEY (idCategorie)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: role
#------------------------------------------------------------

CREATE TABLE role(
        idRole      Int  Auto_increment  NOT NULL ,
        libelleRole Varchar (50) NOT NULL ,
        codeRole    Int NOT NULL
	,CONSTRAINT role_PK PRIMARY KEY (idRole)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: utilisateur
#------------------------------------------------------------

CREATE TABLE utilisateur(
        idUtilisateur     Int  Auto_increment  NOT NULL ,
        nomUtilisateur    Varchar (50) NOT NULL ,
        prenomutilisateur Varchar (50) NOT NULL ,
        emailUtilisateur  Varchar (50) NOT NULL ,
        pseudoUtilisateur Varchar (50) NOT NULL ,
        mdpUtilisateur    Varchar (50) NOT NULL ,
        telUtilisateur    Varchar (10) NOT NULL ,
        idRole            Int NOT NULL
	,CONSTRAINT utilisateur_PK PRIMARY KEY (idUtilisateur)

	,CONSTRAINT utilisateur_role_FK FOREIGN KEY (idRole) REFERENCES role(idRole)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: annonces
#------------------------------------------------------------

CREATE TABLE annonces(
        idAnnonce       Int  Auto_increment  NOT NULL ,
        titreAnnonce    Varchar (50) NOT NULL ,
        lienImg         Varchar (100) NOT NULL ,
        LibelleAnnonce  Varchar (100) NOT NULL ,
        prixAnnonce     Float NOT NULL ,
        datePublication Varchar (10) NOT NULL ,
        statutAnnonce   Int NOT NULL ,
        idUtilisateur   Int NOT NULL ,
        idCategorie     Int NOT NULL
	,CONSTRAINT annonces_PK PRIMARY KEY (idAnnonce)

	,CONSTRAINT annonces_utilisateur_FK FOREIGN KEY (idUtilisateur) REFERENCES utilisateur(idUtilisateur)
	,CONSTRAINT annonces_categories0_FK FOREIGN KEY (idCategorie) REFERENCES categories(idCategorie)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: message
#------------------------------------------------------------

CREATE TABLE message(
        idMessage       Int  Auto_increment  NOT NULL ,
        libelleMessage  Varchar (500) NOT NULL ,
        contenueMessage Varchar (500) NOT NULL ,
        idDestinataire  Int NOT NULL ,
        idUtilisateur   Int NOT NULL
	,CONSTRAINT message_PK PRIMARY KEY (idMessage)

	,CONSTRAINT message_utilisateur_FK FOREIGN KEY (idUtilisateur) REFERENCES utilisateur(idUtilisateur)
)ENGINE=InnoDB;

