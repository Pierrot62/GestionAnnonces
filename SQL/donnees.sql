INSERT INTO `categories`(`idCategorie`, `libelleCategorie`) VALUES (NULL,"meubles");
INSERT INTO `categories`(`idCategorie`, `libelleCategorie`) VALUES (NULL,"voitures");
INSERT INTO `categories`(`idCategorie`, `libelleCategorie`) VALUES (NULL,"pc");

INSERT INTO `roles`(`idRole`, `libelleRole`, `codeRole`) VALUES (NULL,"administrateur",1);
INSERT INTO `roles`(`idRole`, `libelleRole`, `codeRole`) VALUES (NULL,"utilisateur",2);


INSERT INTO `utilisateurs`(`idUtilisateur`, `nomUtilisateur`, `prenomutilisateur`, `emailUtilisateur`, `pseudoUtilisateur`, `mdpUtilisateur`, `telUtilisateur`, `idRole`) VALUES (NULL,"Boboze","Toto","Toto@gmail.com","toto59","toto59","0324256742",1);
INSERT INTO `utilisateurs`(`idUtilisateur`, `nomUtilisateur`, `prenomutilisateur`, `emailUtilisateur`, `pseudoUtilisateur`, `mdpUtilisateur`, `telUtilisateur`, `idRole`) VALUES (NULL,"Bobozo","Titi","Titi@gmail.com","titi59","titi59","0344251142",2);
INSERT INTO `utilisateurs`(`idUtilisateur`, `nomUtilisateur`, `prenomutilisateur`, `emailUtilisateur`, `pseudoUtilisateur`, `mdpUtilisateur`, `telUtilisateur`, `idRole`) VALUES (NULL,"Babouze","Tutu","Tutu@gmail.com","tutu59","tutu59","0328321042",2);

INSERT INTO `annonces`(`idAnnonce`, `titreAnnonce`, `lienImg`, `libelleAnnonce`, `prixAnnonce`, `datePublication`, `statutAnnonce`, `idUtilisateur`, `idCategorie`) VALUES (NULL,"ordinateur1","ordi1.jpg","ceci est un ordinateur en bon etat",50,"2020-05-25",1,2,3);
INSERT INTO `annonces`(`idAnnonce`, `titreAnnonce`, `lienImg`, `libelleAnnonce`, `prixAnnonce`, `datePublication`, `statutAnnonce`, `idUtilisateur`, `idCategorie`) VALUES (NULL,"ordinateur2","ordi2.jpeg","ceci est un ordinateur en bon etat",100,"2020-04-25",2,3,3);
INSERT INTO `annonces`(`idAnnonce`, `titreAnnonce`, `lienImg`, `libelleAnnonce`, `prixAnnonce`, `datePublication`, `statutAnnonce`, `idUtilisateur`, `idCategorie`) VALUES (NULL,"ordinateur3","ordi3.jpg","ceci est un ordinateur en bon etat",200,"2020-10-25",2,3,3);
INSERT INTO `annonces`(`idAnnonce`, `titreAnnonce`, `lienImg`, `libelleAnnonce`, `prixAnnonce`, `datePublication`, `statutAnnonce`, `idUtilisateur`, `idCategorie`) VALUES (NULL,"voiture1","voiture1.jpg","ceci est une voiture tres belle",5000,"2020-09-11",1,2,2);
INSERT INTO `annonces`(`idAnnonce`, `titreAnnonce`, `lienImg`, `libelleAnnonce`, `prixAnnonce`, `datePublication`, `statutAnnonce`, `idUtilisateur`, `idCategorie`) VALUES (NULL,"voiture2","voiture2.jpg","ceci est une voiture tres belle",2000,"2020-03-22",1,3,2);
INSERT INTO `annonces`(`idAnnonce`, `titreAnnonce`, `lienImg`, `libelleAnnonce`, `prixAnnonce`, `datePublication`, `statutAnnonce`, `idUtilisateur`, `idCategorie`) VALUES (NULL,"voiture3","voiture3.jpg","ceci est une voiture tres belle",1000,"2020-07-08",1,3,2);
INSERT INTO `annonces`(`idAnnonce`, `titreAnnonce`, `lienImg`, `libelleAnnonce`, `prixAnnonce`, `datePublication`, `statutAnnonce`, `idUtilisateur`, `idCategorie`) VALUES (NULL,"voiture4","voiture4.jpg","ceci est une voiture tres belle",4000,"2020-04-17",2,2,2);
INSERT INTO `annonces`(`idAnnonce`, `titreAnnonce`, `lienImg`, `libelleAnnonce`, `prixAnnonce`, `datePublication`, `statutAnnonce`, `idUtilisateur`, `idCategorie`) VALUES (NULL,"meuble1","meuble1.jpg","un meuble en tres bon etat",10,"2020-02-04",1,3,1);
INSERT INTO `annonces`(`idAnnonce`, `titreAnnonce`, `lienImg`, `libelleAnnonce`, `prixAnnonce`, `datePublication`, `statutAnnonce`, `idUtilisateur`, `idCategorie`) VALUES (NULL,"meuble2","meuble2.jpg","un meuble en tres bon etat",15,"2020-01-10",2,2,1);

INSERT INTO `messages`(`idMessage`, `libelleMessage`, `contenueMessage`, `idDestinataire`, `idUtilisateur`) VALUES (NULL,"interresse","je suis interresser par votre bien",2,3);
INSERT INTO `messages`(`idMessage`, `libelleMessage`, `contenueMessage`, `idDestinataire`, `idUtilisateur`) VALUES (NULL,"j achete","je vous achete cet objet",3,2);
INSERT INTO `messages`(`idMessage`, `libelleMessage`, `contenueMessage`, `idDestinataire`, `idUtilisateur`) VALUES (NULL,"possible de negocier?","je vous propose 5 euros pour ce produit",2,3);
