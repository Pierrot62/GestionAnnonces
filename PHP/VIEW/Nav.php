<nav>
    <div class="elmNav">
        <select name="categorie" id="categorie-select">
<?php echo '<option value="voiture">'.langue('Voiture').'</option>
            <option value="vetement">'.langue('Vetement').'</option>'; ?>
        </select>
    </div>
    <div class="elmNav">
<?php echo' <button>'.langue('Rechercher').'</button>' ;?>
    </div>
    <?php
    if (isset($_SESSION['utilisateur']))
    {
       echo' <div class="elmNav"><button><a href="index.php?page=accueil&view=user">'.langue('Mes Annonces').'</a></button></div>
        <div class="elmNav"><button><a href="index.php?page=ListeMessage">'.langue('Mes Messages').'</a></button></div>
        <div class="elmNav"><button><a href="index.php?page=FormAnnonces&mode=ajout">'.langue('Ajouter une Annonce').'</a></button></div>';
    }
    ?>
</nav>
<body>