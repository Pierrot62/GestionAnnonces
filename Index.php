<?php

require("./Outils.php");

Parametres::init();

DbConnect::init();

session_start();

/******Les langues******/
/***On récupère la langue***/
if (isset($_GET['lang']))
{
	$_SESSION['lang'] = $_GET['lang'];
}

/***On récupère la langue de la session/FR par défaut***/
$lang=isset($_SESSION['lang']) ? $_SESSION['lang'] : 'FR';
/******Fin des langues******/

$routes=[
	"default"=>["PHP/VIEW/","Accueil","Accueil"],
	"accueil"=>["PHP/VIEW/","Accueil","Accueil"],

	"formConnect"=>["PHP/VIEW/","FormConnect","Formulaire de connection"],
	"formInscript"=>["PHP/VIEW/","FormInscript","Formulaire d'inscription"],

	"actionConnect"=>["PHP/VIEW/","ActionConnect","Action connection"],
	"actionInscript"=>["PHP/VIEW/","ActionInscript","Action inscription"],


	"TestannoncesManager"=>["PHP/MODEL/TESTMANAGER/","TestannoncesManager","Test de annonces"],
	"TestcategoriesManager"=>["PHP/MODEL/TESTMANAGER/","TestcategoriesManager","Test de categories"],
	"TestmessagesManager"=>["PHP/MODEL/TESTMANAGER/","TestmessagesManager","Test de messages"],
	"TestrolesManager"=>["PHP/MODEL/TESTMANAGER/","TestrolesManager","Test de roles"],
	"TestutilisateursManager"=>["PHP/MODEL/TESTMANAGER/","TestutilisateursManager","Test de utilisateurs"]
];

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