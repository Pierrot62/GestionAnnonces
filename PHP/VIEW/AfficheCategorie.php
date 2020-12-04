<?php
var_dump($_POST);
$categorie=CategoriesManager::findById($_POST['idCategorie']);

if ($categorie != '4')
{
    $liste=AnnoncesManager::getByCategorie($categorie);
    var_dump($liste);
}
else
{
    $liste=AnnoncesManager::getList();
    var_dump($liste);
}




// foreach ($liste as $uneannonce)
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