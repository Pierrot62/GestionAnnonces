<?php
$messages=MessagesManager::getByDestinataire($_SESSION['utilisateur']);
if(empty($messages))
{
    echo '<article>
        <div class="infoAnnnonce center">
            <h2>Aucun Message à afficher</h2>
        </div>
      </article>';
}

foreach ($messages as $unmessage)
{
    $expediteur=UtilisateursManager::findById($unmessage->getIdUtilisateur());
    echo'<article>
        <div class="divXl">
        <div class="infoAnnnonce">
            <div>Titre :'.$unmessage->getLibelleMessage().'</div>
            <div>Envoye par :'.$expediteur->getNomUtilisateur().'</div>
        </div>
        <div class="infoAnnnonce">
            <div>'.$unmessage->getContenueMessage().'</div>
        </div>
        <div>
          <a href="index.php?page=traitementMessage&mode=delete&id='.$unmessage->getIdMessage().'">Supprimer</a>
        </div>
    </div>
    </article>';
}
