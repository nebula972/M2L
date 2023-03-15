<?php
session_start();
//éxecution du bouton de connexion
if(isset($_POST["bout"])){
    //recupération des informations entrées
    $nom = $_POST["nom"];
    $mdp = $_POST["mdp"];
    $mail= $_POST["mail"];
    //vérification que le nom et mdp sont bien enregistrés dans la bdd (et connexion)
    $id = mysqli_connect("127.0.0.1","root","","qcm");
    $req = "select * from users where nom = '$nom'";
    $res = mysqli_query($id, $req);
    if(mysqli_num_rows($res)>0){
        echo "<h3>le nom est deja prit, essayez un autre</h3>"; 
    }else{
        $_SESSION["nom"] = $nom;  
        echo "<h3>inscription réussit</h3>"; 
        $req = "INSERT INTO users 
        VALUES (NULL,'$nom','$mdp','$mail',1)"; 
        mysqli_query($id,$req);
        header("refresh:1.5; url=connexion.php");
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
    <title>inscription</title>
</head>
<body>
<header>
    <?php
        include 'header.php';
    ?>
</header>
    <h1>Inscription à la M2L</h1><hr><br>
    <form action="" method="post">
        <input type="text" name="nom" placeholder="nom :" required><br><br>
        <input type="password" name="mdp" placeholder="Mot de passe :"required><br><br>
        <input type="email" name="mail" placeholder="adresse mail :"required><br><br>
        <input type="submit" value="inscription" name="bout">
    </form><br><hr>
</body>
</html>