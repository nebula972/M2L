<?php $page = basename($_SERVER['PHP_SELF']); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<header>
        <ul>
        <li class="<?php if($page == 'accueil.php'){ echo ' active"';}?>"><a href="accueil.php">Accueil</a></li>
        <li class="<?php if($page == 'locaux.php' || $page == 'materiaux.php' || $page == 'services.php' || $page == 'personnels.php' || $page == 'statut.php' )
            { echo ' active"';}?>"><a href="locaux.php">Presentation</a></li>
        <li class="<?php if($page == 'reservation.php'){ echo ' active"';}?>"><a href="reservation.php">Reservation</a></li>
        <li class="<?php if($page == 'questionnaire.php'){ echo ' active"';}?>"><a href="questionnaire.php">Emploie</a></li>
        <li class="<?php if($page == 'contact.php'){ echo ' active"';}?>"><a href="contact.php">Contact</a></li>
        <li class="deroulant"> <a href="#">Ligues</a>
            <ul class="sous">
            <li><a href="https://lgef.fff.fr" target="_blank">foot</a></li>
            <li><a href="https://lge-natation.fr" target="_blank">natation</a></li>
            <li><a href="https://www.ligue-grandest-fft.fr" target="_blank">tennis</a></li>
            <li><a href="https://www.lrgeb.fr" target="_blank">basket</a></li>
            <li><a href="http://www.grandesthandball.fr" target="_blank">handball</a></li>
            <li><a href="https://www.judograndest.fr" target="_blank">judo</a></li>
            
            </ul>
        </li>
        <?php
            
            if(!isset($_SESSION["nom"]))
            {   
                ?>
                <li class="<?php if($page == 'connexion.php'){ echo ' active"';}?>" style="float:right"><a href="connexion.php">connexion</a></li>
                <?php
            }
            else
            {
                $nom=$_SESSION["nom"];
                ?>
                <li class="<?php if($page == 'deconnexion.php'){ echo ' active"';}?>" style="float:right"><a href="deconnexion.php">déconnexion</a></li>
                <li style="float:right"><a href="accueil.php"><?php echo "$nom" ?></a></li>
                
                <?php
            }
        ?>
    </ul> 
    <div class="banner">
    </div>
</header> 



