<?php
session_start();
if(!isset($_SESSION["nom"])){
    header("location:connexion.php");
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>resultat</title>
</head>
<body>
    <header>
    <?php include 'header.php'; ?>
   </header>
   <div class="res">
   <br><br> 
    <?php
    $id = mysqli_connect("localhost","root","","qcm");
        $count=0; $array = array_keys($_POST);
        foreach($_POST as $name => $value){
            $req="select * from reponses where idr = $value";
            $res = mysqli_query($id, $req);
            $ans = mysqli_fetch_assoc($res);
            if($ans['verite']==0){
                $req ="select * from questions where idq = $name";
                $res = mysqli_query($id, $req); $row = mysqli_fetch_assoc($res);
                echo $row['libelleQ'];
                ?><br><?php 
                $req="select * from reponses where idr = $value";
                $res = mysqli_query($id, $req); $row = mysqli_fetch_assoc($res);
                echo $row['libeller'];   
                ?><br><br><?php
            }else{ $count = $count + 1; }
        }
        echo"vous avez $count/10";
        $nom=$_SESSION["nom"];
        $req = "select * from users where nom = '$nom'";
        $res = mysqli_query($id, $req);
        $row = mysqli_fetch_assoc($res);
        $idu=$row['idu'];
        $req = "INSERT INTO resultats VALUES (NULL,'$idu','$count',NOW())";
        mysqli_query($id,$req);
    ?>
    <p><strong>Pour postuler, redirigez-vous vers la page contact, choisir emploie dans le "à propos" et rentrer dans la premiere ligne du "sujet" la balise #<?php echo rand(2300, 5000) ?></strong></p>
    </div>
</body>
</html>