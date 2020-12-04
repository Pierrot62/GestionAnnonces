<?php

require("./Outils.php");

Parametres::init();

DbConnect::init();

session_start();



$routes=[
	"default"=>["PHP/VIEW/","Accueil","Accueil"],
	"accueil"=>["PHP/VIEW/","Accueil","Accueil"],

	"formConnect"=>["PHP/VIEW/","FormConnect","Formulaire de connection"],
	"formInscript"=>["PHP/VIEW/","FormInscript","Formulaire d'inscription"],
	"FormAnnonces"=>["PHP/VIEW/","FormAnnonces","Formulaire d'annonces"],

	"actionUtilisateurs"=>["PHP/VIEW/","ActionUtilisateurs","Action Utilisateurs"],
	"actionConnect"=>["PHP/VIEW/","ActionConnect","Action connection"],
	"actionInscript"=>["PHP/VIEW/","ActionInscript","Action inscription"],
	"actionAnnonces"=>["PHP/VIEW/","ActionAnnonces","Action annonce"],
	"actionMessages"=>["PHP/VIEW/","ActionMessage","Action annonce"],
	"traitementMessage"=>["PHP/VIEW/","TraitementMessage","Action inscription"],

	/***routes de test affichage par categories */
	"navtest"=>["PHP/VIEW/","NavTest","testnav"],
	"afficheCategorie"=>["PHP/VIEW/","AfficheCategorie","nom de la categorie"],

	/******* Pages *******/
	"viewannonce"=>["PHP/VIEW/","ViewAnnonce","Détail de l'annonces"],
	"contactvendeur"=>["PHP/VIEW/","ContactVendeur","Contacter le vendeur"],
	"ListeMessage"=>["PHP/VIEW/","ListeMessages","Contacter le vendeur"],
	"listeUtilisateur"=>["PHP/VIEW/","ListeUtilisateurs","Liste des utilisteurs"],

	"TestannoncesManager"=>["PHP/MODEL/TESTMANAGER/","TestannoncesManager","Test de annonces"],
	"TestcategoriesManager"=>["PHP/MODEL/TESTMANAGER/","TestcategoriesManager","Test de categories"],
	"TestmessagesManager"=>["PHP/MODEL/TESTMANAGER/","TestmessagesManager","Test de messages"],
	"TestrolesManager"=>["PHP/MODEL/TESTMANAGER/","TestrolesManager","Test de roles"],
	"TestutilisateursManager"=>["PHP/MODEL/TESTMANAGER/","TestutilisateursManager","Test de utilisateurs"]
];

/******Les langues******/
/***On récupère la langue***/
if (isset($_GET['lang']))
{
	$_SESSION['lang'] = $_GET['lang'];
}

/***On récupère la langue de la session/FR par défaut***/
$lang=isset($_SESSION['lang']) ? $_SESSION['lang'] : 'FR';

/**
 * fonction qui ramène le texte dans la bonne langue
 */
function langue($nomLangue)
{
   
    global $lang; //on appel la variable globale
    
    return LangueManager::findByCodes($lang, $nomLangue);
}
/******Fin des langues******/

if(isset($_GET["page"]))
{

	$page=$_GET["page"];

	if(isset($routes[$page]))
	{
		AfficherPage($routes[$page]);
	}
	else
	{
		AfficherPage($routes["default"]);
	}
}
else
{
	AfficherPage($routes["default"]);
}