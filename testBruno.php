<?php
/*function ChargerClasse($classe)
{
    require $classe.".Class.php";
}
spl_autoload_register("ChargerClasse");

$reparation=new Factures(["idFacture"=>1,"dateFacture"=>new DateTime("12-11-2020")]);


var_dump($reparation);
echo $reparation->toString();*/

/*function chargerClasse($classe)
{
    if (file_exists("php/controller/".$classe.".class.php"))
    {
        require "php/controller/".$classe.".class.php";
    }
    else if (file_exists("../controller/".$classe.".class.php"))
    {
        require "../controller/".$classe.".class.php";
    }


    if (file_exists("php/model/".$classe.".class.php"))
    {
        require "php/model/".$classe.".class.php";
    }
    else if (file_exists("../model/".$classe.".class.php"))
    {
        require "../model/".$classe.".class.php";
    }
}

spl_autoload_register("chargerClasse");


*/

include "PHP/CONTROLLER/Utilisateurs.Class.php";
include "PHP/CONTROLLER/Annonces.Class.php";
include "PHP/CONTROLLER/Parametres.Class.php";
include "PHP/MODEL/UtilisateursManager.Class.php";
include "PHP/MODEL/AnnoncesManager.Class.php";
include "PHP/MODEL/DbConnect.Class.php";

Parametres::init();
DbConnect::Init();

/****** Test de AdherentsManager ******/

//On teste la recherche par ID
//echo 'Recherche de id=1 <br>';
//$p=FacturesManager::findById(2);
//var_dump($p);

//On teste la recherche par ID
//echo 'Recherche pseudo nono <br>';
//$p=UtilisateursManager::findById(3);
//var_dump($p);
//$tableau=AnnoncesManager::getByUser($p);
//var_dump($tableau);
//foreach($tableau as $elt)
//{
//	echo $elt->toString()."\n";
//}

//On teste l'ajout
//$ticket=ReparationsManager::findById(1);
//$mode=ModesPaiementsManager::findById(1);  
//var_dump($ticket);
//var_dump($mode);
//echo 'On ajoute un objet TVA <br>';
//$pNew = new Annonces(["titreAnnonce"=>"Saxophone","lienImg"=>"sax.jpg","libelleAnnonce"=>"Vends Saxophone Alto","prixAnnonce"=>750.20,"datePublication"=>"02-12-2020","statutAnnonce"=>2,"idUtilisateur"=>1,"idCategorie"=>2]);
//var_dump($pNew);
//AnnoncesManager::add($pNew);

//On teste la suppression
//echo 'On supprime un article <br>';
//$pSupp=AnnoncesManager::findById(2);
//var_dump($pSupp);
//AnnoncesManager::delete($pSupp);


//On teste la mise a jour
//$pRecharge=AnnoncesManager::findById(10);
//$pRecharge->setPrixAnnonce(1000);
//var_dump($pRecharge);
//AnnoncesManager::update($pRecharge);


//On affiche le liste des objets
//echo 'On affiche la liste des objet <br>';
//$tableau=AnnoncesManager::getList();
//var_dump($tableau);
//foreach($tableau as $elt)
//{
//	echo $elt->toString()."\n";
//}
//include "PHP/VIEW/Footer.php";
