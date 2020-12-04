<?php
var_dump($_POST);
$categorie=CategoriesManager::findById($_POST['idCategorie']);
var_dump($categorie);
if ($categorie->getIdCategorie() != '4')
{
    $liste=AnnoncesManager::getByCategorie($categorie);
    var_dump($liste);
}
else
{
    $liste=AnnoncesManager::getList();
    var_dump($liste);
}
