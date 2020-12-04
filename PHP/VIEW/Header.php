<?php

/* construction de l'url en fonction de l'uri existante  */
// var_dump($_SERVER);
$uri = $_SERVER['REQUEST_URI'];
if (substr($uri, strlen($uri) - 1) == "/") // se termine par /
{
    $uri .= "index.php?";
}
else if (in_array("?", str_split($uri))) // si l'uri contient deja un ?
{
    $uri .= "&";
}
else
{
    $uri .= "?";
}

    ?>
<header>
    <div>
        <a href="index.php"><img src="./IMG/logo.png" alt=""></a>
    </div>

    <div class="lang">
        <div>
            <a href="<?php echo $uri; ?>lang=EN">
                <img src="./IMG/EN.jpg" alt="drapeaux anglais">
            </a>
        </div>
        <div></div>
        <div>
            <a href="<?php echo $uri; ?>lang=FR">
                <img src="./IMG/FR.jpg" alt="drapeaux francais">
            </a>
        </div>
        <div></div>
    </div>
    
    <div class="elmHeader divXl titre">La Bonne Annonce<span> .fr</span></div>

    <!-- Si pas connecter -->
    <!-- <div class="elmHeader">
        <a href="index.php?codePage=login">Connection</a>
    </div> -->
    <div class="elmHeader colonne ">
    <?php
    if(isset($_SESSION['utilisateur']))
    { 
        echo'<div>'.$_SESSION['utilisateur']->getNomUtilisateur().' '.$_SESSION['utilisateur']->getPrenomUtilisateur().'</div>
        <div>
            <button><a href="index.php?page=actionConnect&mode=disconnect">deconnexion</a></button>
        </div>';
    }
    else{
        echo'<div class="elmHeader">
        <button><a href="index.php?page=formConnect">Connection</a></button>
        </div>';
    }
    ?>
    </div>

</header>