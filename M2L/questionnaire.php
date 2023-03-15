<?php
session_start();
if(!isset($_SESSION["nom"])){
    header("location:connexion.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>questionnaire</title>
</head>
<body>
<header>
    <?php include 'header.php'; ?>
   </header>
   <br><br> 
   Veuillez remplire ce questionnaire d'aptitude afin de determiner votre niveau.
   <br><br>
    <form action="questionnaire.php" method="post">
        debutant<input type="radio" name="choix" value='0' checked> expert<input type="radio" name="choix" value='1'><br><br> 
        <input type="submit" value="Choisir" name='diff'>
    </form>
    <?php if(isset($_POST["diff"])){   $niv = $_POST["choix"]; ?>
    <form action="resultat.php" method="post">   
    <ol>
    <?php
    $id = mysqli_connect("localhost","root","","qcm");
    $req = "select * from questions where niveau = $niv order by rand() limit 10 " ;
    $res = mysqli_query($id, $req);
    while($ligne = mysqli_fetch_assoc($res)){
        echo "<h3><li>".$ligne["libelleQ"]."</li><h3><br>";
        $idq=$ligne["idq"];
        $req2 = "select * from reponses where idq = $idq order by rand()";
        $res2 = mysqli_query($id, $req2);
        while($ligne2 = mysqli_fetch_assoc($res2)){
            $idr=$ligne2["idr"];
            echo "<input type='radio' name='$idq' id='' value='$idr' checked >".$ligne2["libeller"]."<br>";
        }
    }
    ?>
    </ol>
    <input type="submit" value="Envoyer">
    </form>
    <?php } ?>
</body>
</html>