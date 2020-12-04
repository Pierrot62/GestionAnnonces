<?php


$id = $_GET['id'];

$user = UtilisateursManager::findById($id);

$mode = $_GET['mode'];

switch ($mode)
{
    case "modif":
            {
            UtilisateursManager::update($annonce);
            break;
        }
    case "delete":
            {
            UtilisateursManager::delete($user);
            break;
        }
}

header("location: index.php?page=listeUtilisateur");