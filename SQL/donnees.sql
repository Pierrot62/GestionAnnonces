INSERT INTO `categories`(`idCategorie`, `libelleCategorie`) VALUES (NULL,"meubles");
INSERT INTO `categories`(`idCategorie`, `libelleCategorie`) VALUES (NULL,"voitures");
INSERT INTO `categories`(`idCategorie`, `libelleCategorie`) VALUES (NULL,"pc");
INSERT INTO `categories`(`idCategorie`, `libelleCategorie`) VALUES (NULL,"Toutes categories");

INSERT INTO `roles`(`idRole`, `libelleRole`, `codeRole`) VALUES (NULL,"administrateur",1);
INSERT INTO `roles`(`idRole`, `libelleRole`, `codeRole`) VALUES (NULL,"utilisateur",2);


INSERT INTO `utilisateurs`(`idUtilisateur`, `nomUtilisateur`, `prenomutilisateur`, `emailUtilisateur`, `pseudoUtilisateur`, `mdpUtilisateur`, `telUtilisateur`, `idRole`) VALUES (NULL,"Boboze","Toto","Toto@gmail.com","toto59","toto59","0324256742",1);
INSERT INTO `utilisateurs`(`idUtilisateur`, `nomUtilisateur`, `prenomutilisateur`, `emailUtilisateur`, `pseudoUtilisateur`, `mdpUtilisateur`, `telUtilisateur`, `idRole`) VALUES (NULL,"Bobozo","Titi","Titi@gmail.com","titi59","titi59","0344251142",2);
INSERT INTO `utilisateurs`(`idUtilisateur`, `nomUtilisateur`, `prenomutilisateur`, `emailUtilisateur`, `pseudoUtilisateur`, `mdpUtilisateur`, `telUtilisateur`, `idRole`) VALUES (NULL,"Babouze","Tutu","Tutu@gmail.com","tutu59","tutu59","0328321042",2);
INSERT INTO `utilisateurs` (`idUtilisateur`, `nomUtilisateur`, `prenomutilisateur`, `emailUtilisateur`, `pseudoUtilisateur`, `mdpUtilisateur`, `telUtilisateur`, `idRole`) VALUES (NULL, 'Test', 'Retest', 'test@test', 'test', 'd9b1d7db4cd6e70935368a1efb10e377', '0202020202', '1');

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


insert into langue (idLangue,nomLangue,codeLangue,texteLangue) Values (NULL,"Voiture","FR","Voiture");
insert into langue (idLangue,nomLangue,codeLangue,texteLangue) Values (NULL,"Voiture","EN","Car");
insert into langue (idLangue,nomLangue,codeLangue,texteLangue) Values (NULL,"Vetement","FR","Vetement");
insert into langue (idLangue,nomLangue,codeLangue,texteLangue) Values (NULL,"Vetement","EN","clothing");
insert into langue (idLangue,nomLangue,codeLangue,texteLangue) Values (NULL,"Rechercher","FR","Rechercher");
insert into langue (idLangue,nomLangue,codeLangue,texteLangue) Values (NULL,"Rechercher","EN","Search");
insert into langue (idLangue,nomLangue,codeLangue,texteLangue) Values (NULL,"Mes Annonces","FR","Mes Annonces");
insert into langue (idLangue,nomLangue,codeLangue,texteLangue) Values (NULL,"Mes Annonces","EN","My Ads");
insert into langue (idLangue,nomLangue,codeLangue,texteLangue) Values (NULL,"Ajouter une Annonce","FR","Ajouter une Annonce");
insert into langue (idLangue,nomLangue,codeLangue,texteLangue) Values (NULL,"Ajouter une Annonce","EN","Add ad");
insert into langue (idLangue,nomLangue,codeLangue,texteLangue) Values (NULL,"deconnexion","FR","deconnexion");
insert into langue (idLangue,nomLangue,codeLangue,texteLangue) Values (NULL,"deconnexion","EN","disconnection");
insert into langue (idLangue,nomLangue,codeLangue,texteLangue) Values (NULL,"titre","FR","titre");
insert into langue (idLangue,nomLangue,codeLangue,texteLangue) Values (NULL,"titre","EN","title");
insert into langue (idLangue,nomLangue,codeLangue,texteLangue) Values (NULL,"Image","FR","image");
insert into langue (idLangue,nomLangue,codeLangue,texteLangue) Values (NULL,"image","EN","Picture");
insert into langue (idLangue,nomLangue,codeLangue,texteLangue) Values (NULL,"libelle","FR","libelle");
insert into langue (idLangue,nomLangue,codeLangue,texteLangue) Values (NULL,"libelle","EN","Name");
insert into langue (idLangue,nomLangue,codeLangue,texteLangue) Values (NULL,"Prix","FR","Prix");
insert into langue (idLangue,nomLangue,codeLangue,texteLangue) Values (NULL,"Prix","EN","price");
insert into langue (idLangue,nomLangue,codeLangue,texteLangue) Values (NULL,"Date de publication","FR","Date de publication");
insert into langue (idLangue,nomLangue,codeLangue,texteLangue) Values (NULL,"Date de publication","EN","publication date");
insert into langue (idLangue,nomLangue,codeLangue,texteLangue) Values (NULL,"Statut de l'annonce","FR","Statut de l'annonce");
insert into langue (idLangue,nomLangue,codeLangue,texteLangue) Values (NULL,"Statut de l'annonce","EN","ad status");
insert into langue (idLangue,nomLangue,codeLangue,texteLangue) Values (NULL,"Disponible","FR","Disponible");
insert into langue (idLangue,nomLangue,codeLangue,texteLangue) Values (NULL,"Disponible","EN","Available");
insert into langue (idLangue,nomLangue,codeLangue,texteLangue) Values (NULL,"Vendu","FR","Vendu");
insert into langue (idLangue,nomLangue,codeLangue,texteLangue) Values (NULL,"Vendu","EN","sold");
insert into langue (idLangue,nomLangue,codeLangue,texteLangue) Values (NULL,"Categorie","FR","Categorie");
insert into langue (idLangue,nomLangue,codeLangue,texteLangue) Values (NULL,"Categorie","EN","Category");
insert into langue (idLangue,nomLangue,codeLangue,texteLangue) Values (NULL,"Meuble","FR","Meuble");
insert into langue (idLangue,nomLangue,codeLangue,texteLangue) Values (NULL,"Meuble","EN","furniture item");
insert into langue (idLangue,nomLangue,codeLangue,texteLangue) Values (NULL,"pc","FR","pc");
insert into langue (idLangue,nomLangue,codeLangue,texteLangue) Values (NULL,"pc","EN","Computer");
insert into langue (idLangue,nomLangue,codeLangue,texteLangue) Values (NULL,"Retour","FR","Retour");
insert into langue (idLangue,nomLangue,codeLangue,texteLangue) Values (NULL,"Retour","EN","return");
