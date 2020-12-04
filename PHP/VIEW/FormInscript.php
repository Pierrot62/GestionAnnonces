<?php

if (isset($_GET['mode'])) {

    $idUser = $_GET['id'];
    $user = UtilisateursManager::findById($idUser);
    echo '<article>
    <form action="Index.php?page=actionConnect&mode=update" method="POST">
        <div><label for="nomUtilisateur">Nom</label></div>
    <div>

        <input type="text"  name="nomUtilisateur" value="'. $user->getNomUtilisateur() .'"  required />
    </div>
    <div>    <label for="prenomUtilisateur">Prénom</label>
    </div>
    <div>
        <input type="text" name="prenomUtilisateur" value="'. $user->getPrenomUtilisateur() .'" required />
    </div>
    <div>    <label for="pseudoUtilisateur">Pseudo</label>
    </div>
    <div>
        <input type="text" name="pseudoUtilisateur" value="'. $user->getPseudoUtilisateur() .'"  required />
    </div>
    <div>    <label for="mdpUtilisateur">Mot de passe</label>
    </div>
    <div>
        <input type="password" name="mdpUtilisateur" value="'. $user->getMdpUtilisateur() .'"  required />
    </div>
    <div>    <label for="confirmation">Confirmation du mot de passe</label>
    </div>
    <div>
        <input type="password" name="confirmation" value="'. $user->getMdpUtilisateur() .'"  required />
    </div>
    <div>    <label for="emailUtilisateur">Adresse e-mail</label>
    </div>
    <div>
        <input type="text" name="emailUtilisateur" value="'. $user->getEmailUtilisateur() .'"  required />
    </div>
    <div>    <label for="telUtilisateur">telephone</label>
    </div>
    <div>
        <input type="text" name="telUtilisateur" value="'. $user->getTelUtilisateur() .'"  required />
    </div>
    <div>
        <select name="idRole">
        <option value="2">Utilisateur</option>
        <option value="1">Administrateur</option>

    </div>
    <input name="idUtilisateur" value="'.$user->getIdUtilisateur().'" type="hidden">

    <div class="buttonForm">
        <div></div>
        <button><a href="index.php">Accueil</a></button>
        <div></div>
        <button type="submit">Sauvegarder</button>
        <div></div>
      </div>

    </form>
    </article>';

} else {

    echo '<article>
    <form action="Index.php?page=actionConnect&mode=new" method="POST">
        <div><label for="nomUtilisateur">Nom</label></div>
    <div>

        <input type="text"  name="nomUtilisateur" required />
    </div>
    <div>    <label for="prenomUtilisateur">Prénom</label>
    </div>
    <div>
        <input type="text" name="prenomUtilisateur" required />
    </div>
    <div>    <label for="pseudoUtilisateur">Pseudo</label>
    </div>
    <div>
        <input type="text" name="pseudoUtilisateur" required />
    </div>
    <div>    <label for="mdpUtilisateur">Mot de passe</label>
    </div>
    <div>
        <input type="password" name="mdpUtilisateur" required />
    </div>
    <div>    <label for="confirmation">Confirmation du mot de passe</label>
    </div>
    <div>
        <input type="password" name="confirmation" required />
    </div>
    <div>    <label for="emailUtilisateur">Adresse e-mail</label>
    </div>
    <div>
        <input type="text" name="emailUtilisateur" required />
    </div>
    <div>    <label for="telUtilisateur">telephone</label>
    </div>
    <div>
        <input type="text" name="telUtilisateur" required />
    </div>
    <input name="idRole" value="2" type="hidden">

    <div class="buttonForm">
        <div></div>
        <button><a href="index.php">Accueil</a></button>
        <div></div>
        <button type="submit">Inscription</button>
        <div></div>
      </div>
      <div >
          Vous avez deja un compte ? <a href="index.php?page=formConnect">Connecter vous ici</a>
      </div>
    </form>
    </article>';

}
