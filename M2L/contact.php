<?php
session_start();
//renvoie à page de connexio si pas connecté au préalable
if(isset($_POST["bout"]))
{
    if(!isset($_SESSION["nom"]))
    {   
        header("location:connexion.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contact</title>
</head>
<body>
    <header>
    <?php
   include 'header.php';
   ?>
</header>
    <?php
        if(!isset($_SESSION["nom"]))
        {   
            ?>
            <b><p style="color:#FF0000;font-size:15px;">veuillez d'abord vous connecter</p></b>
            <?php
        }
        ?>
    <div class="container">
    <form action="" method="post">

        <label for="nom">Nom</label>
        <input type="text" name="nom" placeholder="Votre nom...">

        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" placeholder="Votre Prénom..">

        <label for="sujet">à propos</label>
        <select id="sujet" name="sujet">
            <option value="ligues">ligues</option>
            <option value="emploi">emploi</option>
            <option value="technique">technique</option>
            <option value="autre">autre</option>
        </select>

        <label for="sujet">sujet</label>
        <textarea id="sujet" name="sujet" placeholder="Ecrivez votre requete.." style="height:200px"></textarea>

        <input type="submit" value="envoyer" name="bout">
    </form>
    </div> 
    <footer>
       <p>ce site est fictif (projet BTS)</p>
   </footer>
</body>
</html>