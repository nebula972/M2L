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

        <!--Présentation-->
            <!--NAV2-->
            <ul class="presentation" id="mytab">
                <li class="mytab"><a class="active" href="locaux.php">Locaux</a></li>
                <li class="mytab"><a class="" href="personnels.php">Personnels</a></li>
                <li class="mytab"><a class="" href="materiaux.php">Materiaux</a></li>
                <li class="mytab"><a class="" href="services.php">Services</a></li>
                <li class="mytab"><a class="" href="statut.php">Justice</a></li>
            </ul>
            <!--Locaux-->
                <div id="locaux">
                    <div class="presentation">
                        <h1>Les Locaux</h1>
                        <h5>La structure des batiments</h5>
                        <p>
                            Le site se compose de quatre b&#226;timents, dont deux sont dot&#233;s de quatre &#233;tages,
                             et donc de 5 niveaux 
                            (les b&#226;timents A et C) et deux de plain-pied (les b&#226;timents B et D) dot&#233;s d&#39;un
                             seul rez-de-chauss&#233;e.
                             Les b&#226;timents C et D sont On &#233;t&#233; construit r&#233;cemment . Les b&#226;timents A 
                             et B datent d&#39;une quinzaine d&#39;ann&#233;es.
                        </p>
                        <img src="images/locaux 1.jpg" alt="locaux 1">
            
                        <p>
                            Les &#233;tages des b&#226;timents A et C h&#233;bergent les bureaux des ligues locataires et
                             le rez-de-chauss&#233;e des quatres b&#226;timents h&#233;bergent des espaces mutualis&#233;s :
                              un amphith&#233;&#226;tre de 200 places avec une r&#233;gie, 8 salles de r&#233;union de 12 &#226; 
                              50 places, un hall d&#39;accueil, une salle de convivialit&#233; et son office traiteur, ainsi qu&#39;
                              une salle de formation multim&#233;dia dot&#233;e de 24 postes. On y trouve &#233;galement la partie 
                              accueil des neuf bureaux de l&#39;administration de la M2L. L&#39;autre partie se trouve au premier &#233;
                              tage du b&#226;timent C. Diff&#233;rents locaux de service (archives, stockage local d&#39;entretien ...) 
                              se trouvent en sous-sol.
                        </p>
                        <img src="images/locaux 2.jpg" alt="locaux 2">
                        <br>
                        <br>
                        <br>
                        <br>
                        <img src="images/locaux 3.jpg" alt="locaux 3">
            
                        <p>
                            En fonction de leur taille, les 24 structures h&#233;berg&#233;es occupent un ou plusieurs bureaux. 
                            Au total, la M2L offre 80 bureaux. &#192; chaque &#233;tages des b&#226;timents de bureaux se trouve une
                             petite salle de r&#233;union que les ligues utilisent sans r&#233;servation. L&#39;ensemble des autres 
                             salles ressources sont accessibles sur r&#233;servation, en journ&#233;e comme en soir&#233;e.
                        </p>
            
                        <p>
                            Les salles Majorelle, Gubber, Lonwgy, Daum, Gall&#233;, Corbin et Baccarat sont des salles de r&#233;union 
                            disponible &#226; la r&#233;servation.<br>
                            La salle multim&#233;dia est une salle dedi&#233;e aux stages de formation &#226; inscription libez propos&#233; 
                            par le
                            CROSL ou pour les stages organis&#233; par les ligues.<br>
                            L&#39;amphith&#233;atre est r&#233;servable pour les assembl&#233;s g&#233;n&#233;rales ou pour d&#39;autre r&#233;
                            unions importantes.<br>
                            La salle de convivialit&#233;, et son office attenant, est &#233;galement disponible &#226; la r&#233;servation,
                             souvent par
                            les repas " traiteur" qui suivent les r&#233;unions.<br>
                            Toutes ces salles sont accessibles en soir&#233;e : Un syst&#232;me de "digicode" permet d&#39;entrer dans
                             les locaux
                            en dehors des heures d&#39;ouverture des brureaux.<br>
                            La salle de reprographie est un espace commun aux ligues et &#226; l&#39;administrateur de la M2L.
                        </p>
            
                        <h5>Prix de Location</h5>
                        <p>
                            Chaque locataire devra  payer 5 euros par m² par mois. Avec une augmentation pr&#233;vue de 1 euro dans les ann&#233;
                            e a suivre. Un appel est effectu&#233; sur cette base forfaitaire en d&#233;but d&#39;ann&#233;e et une r&#233;
                            gularisation pourrait ete demand&#233;e en fin d&#39;ann&#233;e en cas de d&#233;passement de la conssomation
                             d&#39;&#233;l&#233;ctricit&#233; ( Mais cela n&#39;a jamais &#233;t&#233; fait jusqu&#39;&#226; maintenant).
                             <br>
                            Les charges comprennent le chauffage, le nettoyage, l&#39;acc&#232;s internet, mais le t&#233;l&#233;phone 
                            n&#39;en fait pas
                            partie.
                        </p>
                        <br>
                    </div>
                </div>
            <!--Footer-->
                <footer>
                    <p>ce site est fictif (projet BTS)</p>
                </footer>   
    </body>
</html>