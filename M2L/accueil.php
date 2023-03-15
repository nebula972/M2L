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
    <title>Accueil</title>
</head>
<body>
   <header>
    <?php
   include 'header.php';
   ?>
   </header> 
   <div class="pres">
        <h2>Bienvenue sur le site de la maison des ligues de Lorraine</h2>
        <p>La Maison des Ligues de Lorraine (M2L) a pour mission de fournir des espaces 
            et des services aux différentes ligues sportives régionales et à d’autres structures hébergées. 
            La M2L est une structure financée par le Conseil Régional de Lorraine dont l'administration est déléguée 
            au Comité Régional Olympique et Sportif de Lorraine (CROSL).</p>
        <p>Decouvrez tous les différentes ligues sportives, mais aussi toutes les formations et services que la M2L vous propose</p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/YiRj8FPiAdU" 
            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
            clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>
    </div>
   <footer>
       <p>ce site est fictif (projet BTS)</p>
   </footer>
</body>
</html>