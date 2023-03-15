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
                <li class="mytab"><a class="" href="locaux.php">Locaux</a></li>
                <li class="mytab"><a class="" href="personnels.php">Personnels</a></li>
                <li class="mytab"><a class="active" href="materiaux.php">Materiaux</a></li>
                <li class="mytab"><a class="" href="services.php">Services</a></li>
                <li class="mytab"><a class="" href="statut.php">Justice</a></li>
            </ul>
            <!--Materiaux-->
                <div id="materiaux">
                    <div class="presentation">
                        <h1>Matériaux</h1>
                        <p>
                            La M2L ne dispose que de ses propres équipements, dans les bureaux d'administration du CROSL et dans la salle multimédia. Les bureaux des ligues sont équipés par les ligues elles-mêmes (hors mobilier de base). Des ressources d'impression mutualisées payantes sont néanmoins disponibles à l'administration de la M2L.
                        </p>

                        <h5>CONNECTIQUE FOURNIE SELON LES ESPACES</h5>
                            
                        <p>
                            Chaque bureau de ligue du bâtiment A dispose de prises Ethernet de catégorie 5 et de prise téléphonique.<br>
                            Dans le nouveau bâtiment C, ce sont des prises Ethernet de catégorie 6 qui sont disponibles dans chaque bureau pour connecter du matériel informatique ou un appareil de téléphonie IP.<br>
                            Chaque salle de réunion dispose de prise Ethernet pour la connexion d'un PC portable au réseau (de catégorie 5 dans le bâtiment B et 6 dans le bâtiment D). Dispose en outre de système fixe de vidéo projection, mais pas d'ordinateur à demeure.<br>
                            La salle de formation multimédia dispose de prises Ethernet de catégorie 5, utilisable pour les PC des " stagiaire " et celui du " Formateur " , et pour une imprimante réseau.<br> 
                            L'amphithéâtre dispose de prise Ethernet de catégorie 5 sur le pupitre. Il dispose également de système de vidéo projection sur grand écran. Une prise Ethernet est disponible également dans la régie.<br>
                            Les bureaux d'administration de la M2L disposent de prises de catégorie 6, pour les neuf bureaux. La salle de reprographie est dotée de prises Ethernet de catégorie 6 pour les systèmes d’impression numériques connectés.
                        </p>
                    </div>
            <!-- TABLEAU MATERIAUX -->
                    <div class="presentation">
                        <h6>Materiaux disponible</h6>
                        <table class="materiaux">
                            <thead class="thead-materiaux">
                                <tr>
                                    <th> Batiment </th>
                                    <th> Materiel </th>
                                    <th> Nombre </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> Batiment A </td>
                                    <td> Prise Ethernet (5) </td>
                                    <td> 2 </td>
                                </tr>
                                <tr>
                                    <td> Batiment A </td>
                                    <td> Prise Téléphonique </td>
                                    <td> 1 </td>
                                </tr>
                                <tr>
                                    <td> Batiment C </td>
                                    <td> Prise Ethernet (5) </td>
                                    <td> 3 </td>
                                </tr>
                                <tr>
                                    <td> Batiment C </td>
                                    <td> Prise Téléphonique </td>
                                    <td> 1 </td>
                                </tr>
                                <tr>
                                    <td> Salle de Réunion <br> Batiment D </td>
                                    <td> Prise Ethernet (6) </td>
                                    <td> 1 </td>
                                </tr>
                                <tr>
                                    <td> Salle de Réunion <br> Batiment B </td>
                                    <td> Prise Ethernet (5) </td>
                                    <td> 1 </td>
                                </tr>
                                <tr>
                                    <td> Salle de Réunion </td>
                                    <td> Vidéo Projecteur </td>
                                    <td> 1 </td>
                                </tr>
                                <tr>
                                    <td> Salle de Formation Multimédia  </td>
                                    <td> Prise Ethernet (5) </td>
                                    <td> 26 </td>
                                </tr>
                                <tr>
                                    <td> L'amphithéatre </td>
                                    <td> Prise Ethernet (5) </td>
                                    <td> 4 </td>
                                </tr>
                                <tr>
                                    <td> L'amphithéatre </td>
                                    <td> Vidéo projecteur </td>
                                    <td> 1 </td>
                                </tr>
                                <tr>
                                    <td> Régie </td>
                                    <td> Prise Ethernet (5) </td>
                                    <td> 1 </td>
                                </tr>
                                <tr>
                                    <td> Bureaux d'administration M2L </td>
                                    <td> Prise Ethernet (6) </td>
                                    <td> 27 </td>
                                </tr>
                                <tr>
                                    <td> Salle de reprographie </td>
                                    <td> Prise Ethernet (6) </td>
                                    <td> 4 </td>
                                </tr>
                            </tbody>
                        </table>

                        <br>

                        <h5>IMPLANTATION DES ÉCRANS DU RÉSEAU D'AFFICHAGE ET DES BORNES WIFI</h5>
                        <p>
                            Un système de diffusion d'informations est installé sur 3 écrans 42" dans les espaces de circulation. Ils servent essentiellement à l'information des visiteurs sur les lieux de réunion. Les écrans d'information sont renseignés depuis l'administration de la M2L.<br>
                            Un réseau Wifi gratuit est disponible pour les visiteurs dans les espaces de réunion du rez-de-chaussée, mais également dans les étages des bureaux des ligues (les bornes y sont positionnées en quinconce d'un étage à l'autre).
                        </p>

                        <img src="images/locaux 4.jpg" alt="locaux 4">

                        <p>
                            Il y a eu un laps de temps important entre la construction des bâtiments A et B (construits au début des années 90) et C et D (tout dernièrement construits, en 2010).<br>
                            Pour le bâtiment A, on trouve une armoire de brassage secondaire pour chacun des 4 niveaux d'implantation des bureaux de ligues. Chacune de ces armoires regroupe 22 prises Ethernet : 20 vers les bureaux, une vers la borne Wifi et une vers la salle de réunion.<br>
                            On trouve un commutateur 26 ports dans chacune de ces armoires (24 ports 10/100 et deux ports Giga combo RJ-45 / SFP). Ces armoires de brassage sont connectées à une armoire centralisatrice au rez-de-chaussée, dans un petit local climatisé du bâtiment B.<br>
                            Pour le nouveau bâtiment C, on a positionné une seule armoire de brassage au niveau quasi central du second étage du bâtiment. Cette armoire réunit 128 prises, 32 par étage (3 par bureau, une prise pour la salle de réunion et une pour la borne wifi). On y trouve 4 commutateurs 48 ports, dont tous les ports sont utilisables en gigabits/s. Cette armoire est connectée en fibre optique à l'armoire centralisatrice du bâtiment B.<br>
                            Les salles du RDC des nouveaux bâtiments C et D (salles à réservations, bureaux d'administration de la M2L, la salle de reprographie) ainsi que les bornes Wifi et les 3 écrans d'information sont tous connectés à l'armoire de brassage principale du bâtiment B dans laquelle on trouve 2 commutateurs à 24 ports et un routeur. C'est également le lieu d'implantation de l'armoire à serveurs.
                        </p>

                        <img src="images/locaux 5.jpg" alt="locaux 5">

                        <p>
                            C'est au rez-de-chaussée, dans la baie de brassage principale du bâtiment B que sont regroupés les différents réseaux au moyen de 2 commutateurs-routeurs 24 ports empilés, l'accès Internet et l'accès téléphonique standard et IP.
                        </p>

                        <img src="images/locaux 6.jpg" alt="locaux 6"><br>
                    </div>
                </div>
            <!--Footer-->
                <footer>
                    <p>ce site est fictif (projet BTS)</p>
                </footer>   
    </body>
</html>