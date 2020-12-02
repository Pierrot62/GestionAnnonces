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
	"default"=>["PHP/VIEW/","accueil","Accueil"],
	"TestannoncesManager"=>["PHP/VIEW/","TestannoncesManager","Test de annonces"],
	"TestcategoriesManager"=>["PHP/VIEW/","TestcategoriesManager","Test de categories"],
	"TestmessagesManager"=>["PHP/VIEW/","TestmessagesManager","Test de messages"],
	"TestrolesManager"=>["PHP/VIEW/","TestrolesManager","Test de roles"],
	"TestutilisateursManager"=>["PHP/VIEW/","TestutilisateursManager","Test de utilisateurs"],
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