<?php

$categorie=CategoriesManager::findById($_POST['idCategorie']);
var_dump($categorie);
if ($categorie->getIdCategorie() != '4')
{
    $annonces=AnnoncesManager::getByCategorie($categorie);
    var_dump($annonces);
}
else
{
    $annonces=AnnoncesManager::getList();
    var_dump($annonces);
}
