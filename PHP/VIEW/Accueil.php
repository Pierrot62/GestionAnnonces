
<?php

// $categorie=CategoriesManager::findById($_POST['idCategorie']);

// if ($categorie->getIdCategorie() != '4')
// {
//     $annonces=AnnoncesManager::getByCategorie($categorie);

// }
// else
// {
    $annonces=AnnoncesManager::getList();

// }

if (isset($_GET['view'])) {
    $view = $_GET['view'];
    if ($view == "admin"){
        if (isset($_SESSION['utilisateur'])) {
            $annonces = AnnoncesManager::getList();
        } 
    }else if ($view == "user"){
        if (isset($_SESSION['utilisateur'])) {
        $annonces = AnnoncesManager::getByUser($_SESSION['utilisateur']);
    } 
    }
   




// } else {
//     $categorie = CategoriesManager::findById($_POST['idCategorie']);
//     if ($categorie->getIdCategorie() != '4') {
//         $annonces = AnnoncesManager::getByCategorie($categorie);
//     } else {
//         $annonces = AnnoncesManager::getList();
//     }
}
if(empty($annonces))
{
    echo '<article>
        <div class="infoAnnnonce center">
            <h2>Aucune Annonce à afficher</h2>
        </div>
      </article>';
}

foreach ($annonces as $uneannonce) {
    $vendeur = UtilisateursManager::findById($uneannonce->getIdUtilisateur());
    echo '<article class="articleListe">
    <div class="imgAnnonce"><img src="' . $uneannonce->getLienImg() . '" alt="photo annonce"></div>
    <div class="divXl">
        <div class="infoAnnnonce">
            <div>' . $uneannonce->getTitreAnnonce() . '</div>
            <div><a href="index.php?page=viewannonce&id=' . $uneannonce->getIdAnnonce() . '">'.langue('Consulter').'</a></div>
        </div>
        <div class=" infoAnnnonce">
            <div>'.langue('Prix').':'.' '. $uneannonce->getPrixAnnonce().' € </div>
            <div>'.langue('Publiée le').':'.' '.$uneannonce->getDatePublication().'</div>
            <div>'.langue('Par').':'.' '. $vendeur->getNomUtilisateur().'</div>
            <div>'.langue('Statut').':'.' '.($uneannonce->getStatutAnnonce() == 1 ? langue('Disponible') : langue('Vendu')).'</div>
        </div>
    </div>';
    if (isset($_GET['view'])) {
        echo '<div class="crud">
          <div><a href="index.php?page=FormAnnonces&mode=update&id=' . $uneannonce->getIdAnnonce() . '">'.langue('Modifier').'</a></div>
          <div>
            <a href="index.php?page=FormAnnonces&mode=delete&id=' . $uneannonce->getIdAnnonce() . '">'.langue('Supprimer').'</a
            >
          ';
    }
    echo '</article>';
}
if (isset($_GET['view'])) {
    echo '<button><a href="index.php?page=accueil">'.langue('Retour').'</a></button>';
}
