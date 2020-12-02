<?php
$uti = UtilisateursManager::findByEmail($_POST['emailUtilisateur']);
if ($uti != false)
{
    if ($_POST['mdpUtilisateur'] == $uti->getMdpUtilisateur())
    {
        echo "connection ok";
        $_SESSION['utilisateur']=$uti;
        header("refresh:3;url=Index.php?page=Accueil");
    }
    else
    {
        echo "mot de passe inconnu";
        header("refresh:3;url=Index.php?page=formConnect");
    }
}
else
{
    echo "emil n'existe pas";
    header("refresh:3;url=Index.php?page=formConnect");
}