<?php
session_start();
//éxecution du bouton de connexion
if(isset($_POST["bout"]))
{
    //recupération des informations entrées
    $nom = $_POST["nom"];
    $mdp = $_POST["mdp"];
    //vérification que le pseudo et mdp sont bien enregistrés dans la bdd (et connexion)
    $id = mysqli_connect("127.0.0.1","root","","qcm");
    $req = "select * from users where nom = '$nom' and mdp = '$mdp'";
    $res = mysqli_query($id, $req);
    if(mysqli_num_rows($res)>0){
        $_SESSION["nom"] = $nom;
        header("location:accueil.php");
    }
    else
    {
        echo "<h3>Erreur de pseudo ou de mot de passe!!!";
    }
}
?>
<!-- page de connexion de l'utilisateur-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>connexion</title>
</head>
<body>
<header>
<?php
   include 'header.php';
?>
</header>
    <h1>Connexion au M2L (nécessaire pour contact)</h1><hr><br>
    <form action="" method="post">
        <input type="text" name="nom" placeholder="Pseudo :"><br><br>
        <input type="password" name="mdp" placeholder="Mot de passe :"><br><br>
        <input type="submit" value="Connexion" name="bout">
    </form><br><hr>
    <div class="new">
        nouvel utilisateur ?  :  <a href="inscription.php">inscription</a>
    </div>
</body>
</html>