<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Justice</title>
</head>
<body>
   <header>
    <?php
        include 'header.php';
    ?>
   </header> 

        <!--Présentation-->
            <!--NAV2-->
            <ul class="presentation" id="mytab">
                <li class="mytab"><a class="" href="locaux.php">Locaux</a></li>
                <li class="mytab"><a class="" href="personnels.php">Personnels</a></li>
                <li class="mytab"><a class="" href="materiaux.php">Materiaux</a></li>
                <li class="mytab"><a class="" href="services.php">Services</a></li>
                <li class="mytab"><a class="active" href="statut.php">Justice</a></li>
            </ul>
            <!--Services-->
            <div class="presentation">
                <h1>Statut juridique</h1>
                <p> La Maison des Ligues est un établissement du Conseil Régional. 
                    Ce n’est pas une entité juridique en propre.
                    Elle est financée à 100 % (pour son fonctionnement et pour 
                    la construction récente de l’extension des bâtiments C et D) 
                    par le Conseil Régional et sans aucune participation du Conseil 
                    Général de Meurthe et Moselle, bien qu’elle abrite un certain 
                    nombre de comités départementaux. Une convention de cogestion a 
                    été passée entre le Conseil Régional et le Comité Régional Olympique et Sportif 
                    de Lorraine pour la gestion de l’outil « Maison des Ligues ». Le 
                    CROSL est une association financée par le ministère via le CNDS 
                    (Centre National de Développement du Sport).</p>
            </div> 
            <!--Footer-->
                <footer>
                    <p>ce site est fictif (projet BTS)</p>
                </footer> 
    </body>
</html>