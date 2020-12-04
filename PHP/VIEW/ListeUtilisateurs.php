
<article>
<div class="divXl ">
<?php 

$user=UtilisateursManager::getList();



foreach ($user as $unuser) {


    var_dump ($unuser->getIdUtilisateur());
        echo '
            <div class="listeUsers flex">
                <div class="user">' . $unuser->getNomUtilisateur() . '</div>
                <div class="user">' . $unuser->getPrenomUtilisateur() . '</div>
                <div class="user">' . $unuser->getEmailUtilisateur() . '</div>
                <div><a href="index.php?page=actionUtilisateurs&mode=delete&id='.$unuser->getIdUtilisateur().'">Supprimer</a></div>
                <div><a href="index.php?page=formInscript&mode=update&id='.$unuser->getIdUtilisateur().'">Modifier</a></div>
            </div>';
}

        ?>
        </div>
    </article>


