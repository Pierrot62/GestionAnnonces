<?php
switch ($_GET['mode'])
{
    case 'new':
        $message=new Messages ($_POST);
        $message->setIdUtilisateur($_SESSION['utilisateur']->getIdUtilisateur());
        MessagesManager::add($message);
        echo '<h1 style="text-align: center; color: white;">Votre Message à bien été envoyé !</h1>'; 
        header("refresh:3;url=index.php?page=viewannonce&id=".$_POST['idAnnonce']."");
    break;
    case 'delete':
        $message=MessagesManager::findById($_GET['id']);
        MessagesManager::delete($message);
        header("location: index.php?page=ListeMessage");    
    break;    
}