<?php

$categorie=CategoriesManager::findById($_POST['idCategorie']);
var_dump($categorie);
if ($categorie != '4')
{
    $annonces=AnnoncesManager::getByCategorie($categorie);
    var_dump($annonces);
}
else
{
    $annonces=AnnoncesManager::getList();
    var_dump($annonces);
}




// foreach ($annonces as $uneannonce)
// {
//     $vendeur=UtilisateursManager::findById($uneannonce->getIdUtilisateur());
//     echo'<article>
//     <div class="imgAnnonce"><img src="IMG/imgAnnonce/'.$uneannonce->getLienImg().'" alt="photo annonce"></div>
//     <div class="divXl">
//         <div class="infoAnnnonce">
//             <div>'.$uneannonce->getTitreAnnonce().'</div>
//             <div><a href="index.php?page=viewannonce&id='.$uneannonce->getIdAnnonce().'">Detail</a></div>
//         </div>
//         <div class=" infoAnnnonce">
//             <div>Prix :'.' '.$uneannonce->getPrixAnnonce().' € </div>
//             <div>Mis en ligne le :'.$uneannonce->getDatePublication().'</div>
//             <div>Par :'.' '.$vendeur->getNomUtilisateur().'</div>
//             <div>Statut :'.' '.($uneannonce->getStatutAnnonce()==1?"disponible":"vendu").'</div>
//         </div>
//     </div>';
// }

?>