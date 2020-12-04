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
    <div class="elmNav">
    <div class="lang">

            <a href="<?php echo $uri; ?>lang=EN">
                <img src="./IMG/EN.jpg" alt="drapeaux anglais">
            </a>
            
            <a href="<?php echo $uri; ?>lang=FR">
                <img src="./IMG/FR.jpg" alt="drapeaux francais">
            </a>
        
    </div>
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