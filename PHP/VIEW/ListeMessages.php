<?php
$messages=MessagesManager::getByDestinataire($_SESSION['utilisateur']);
if(empty($messages))
{
    echo '<article>
        <div class="infoAnnnonce center">
            <h2>'.langue('Aucun message à afficher').'</h2>
        </div>
      </article>';
}

foreach ($messages as $unmessage)
{
    $expediteur=UtilisateursManager::findById($unmessage->getIdUtilisateur());
    echo'<article>
        <div class="divXl">
        <div class="infoAnnnonce">
            <div>'.langue('titre').' :'.$unmessage->getLibelleMessage().'</div>
            <div>'.langue('Envoyé par').' :'.$expediteur->getNomUtilisateur().'</div>
        </div>
        <div class="infoAnnnonce">
            <div>'.$unmessage->getContenueMessage().'</div>
        </div>
        <div>
          <a href="index.php?page=traitementMessage&mode=delete&id='.$unmessage->getIdMessage().'">'.langue('Supprimer').'</a>
        </div>
    </div>
    </article>';
}
