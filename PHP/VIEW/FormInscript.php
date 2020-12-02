<form action="Index.php?page=actionInscript" method="POST">
<div>
    <label for="nomUtilisateur">Nom</label>
    <input type="text"  name="nomUtilisateur" required />
</div>
<div>
    <label for="prenomutilisateur">Prénom</label>
    <input type="text" name="prenomutilisateur" required />
</div>
<div>
    <label for="pseudoUtilisateur">Pseudo</label>
    <input type="text" name="pseudoUtilisateur" required />
</div>
<div>
    <label for="mdpUtilisateur">Mot de passe</label>
    <input type="password" name="mdpUtilisateur" required />
</div>
<div>
    <label for="confirmation">Confirmation du mot de passe</label>
    <input type="password" name="confirmation" required />
</div>
<div>
    <label for="emailUtilisateur">Adresse e-mail</label>
    <input type="text" name="emailUtilisateur" required />
</div>
<div>
    <label for="telUtilisateur">telephone</label>
    <input type="text" name="telUtilisateur" required />
</div>
<div>
    <label for="idRole">Role (1 administrateur 2 utilisateur)</label>
    <input type="text" name="idRole" required />
</div>
<div>
    <button type="submit"><a href="Index.php?page=Accueil">Accueil</a></button>
    <button type="submit">Connexion</button>
</div>
</form>