<?php
$uti = UtilisateursManager::findByEmail($_POST['emailUtilisateur']);
if ($uti != false)
{
    if ($_POST['mdpUtilisateur'] == $uti->getMdpUtilisateur())
    {
        echo texte('connectOk');
        $_SESSION['utilisateur']=$uti;
        header("refresh:3;url=Index.php?page=Accueil");
    }
    else
    {
        echo texte('incPwd');
        header("refresh:3;url=Index.php?page=formConnect");
    }
}
else
{
    echo texte('inExist');
    header("refresh:3;url=Index.php?page=formConnect");
}