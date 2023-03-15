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
                <li class="mytab"><a class="" href="materiaux.php">Materiaux</a></li>
                <li class="mytab"><a class="active" href="services.php">Services</a></li>
                <li class="mytab"><a class="" href="statut.php">Justice</a></li>
            </ul>
            <!--Services-->
                <div id="services">
                    <div class="presentation">
                        <h1>Services</h1>

                        <h5>SERVICES ACCÈS INTERNET</h5>
                        <p>Les ligues disposent d'un accès Internet mutualisé que la M2L loue à un prestataire extérieur.</p>

                        <h5> ACCÈS WIFI</h5>
                        <p>Dans tous les espaces, un réseau Wifi "visiteurs" est disponible, avec une clé WPA renouvelée régulièrement et communiquée aux ligues. Ce réseau ne permet que l'accès à Internet.</p>

                        <h5>TÉLÉPHONIE</h5>
                        <p>Dans les bâtiments anciens A et B, les salles et bureaux sont équipés de prises de téléphone analogiques. La M2L y fournit les combinés téléphoniques. Dans les bâtiments neufs C et D, l'équipement téléphonique est de type VoIP. La M2L loue des postes téléphoniques IP aux ligues.</p>

                        <h5>AFFRANCHISSEMENT</h5>
                        <p>Une machine à affranchir permet un affranchissement rapide et en nombre. Cette prestation est facturée aux ligues au coût de l'affranchissement. Chaque mois, on relie la machine à affranchir à une imprimante pour obtenir une liste de codes de gestion correspondant aux ligues associés à une quantité et un type d'affranchissement. La prise en compte de ces informations permet au CROSL d'éditer des factures.</p>

                        <h5>IMPRESSIONS</h5>
                        <p> 
                            Les ligues disposent de la possibilité d'imprimer en volume et en qualité d'imprimerie sur des ressources d'impression numériques connectées situées dans le local reprographie du rez-de-chaussée dont l'usage fait l'objet d'une facturation à prix coûtant.<br><br>
                            Un système de comptage situé sur le serveur d'impression permet au CROSL d’effectuer une facturation mensuelle auprès des ligues:
                        </p>
                        <ul class="presentation">
                            <li>Une photocopieuse noir et blanc à 70 pages/minute avec différents dispositifs de finition;</li><br>
                            <li>Une imprimante Laser couleur A4/A3 à encre solide à 25 pages/minute;</li><br>
                            <li>Un traceur A2 (1 page / minute) utilisé pour les affiches et banderoles.</li><br>
                        </ul>

                        <h5>SERVEUR FTP DOCUMENTAIRE</h5>
                        <p>La M2L met à disposition des ligues un serveur FTP documentaire intranet/internet regroupant des textes légaux, des modèles de dossiers, de statuts, des programmes de formation (...) compilés par le CROSL.</p>

                        <h5>DIGICODE DU JOUR ET CLÉ WIFI</h5>
                        <p>La M2L met à disposition des ligues un site web d'information sur le digicode permettant l'accès à la M2L ainsi que sur la clé Wifi "visiteurs". Le système de réservation donne également le digicode du jour dans le compte-rendu de réservation envoyé automatiquement par mail.</p>

                        <h5>SYSTÈME DE GESTION DES CONFIGURATIONS</h5>
                        <p>M2L gère à travers un logiciel de gestion des configurations l'ensemble du parc informatique incluant les postes fixes des ligues.</p>

                        <h5>INTÉGRATION DES POSTES INFORMATIQUES DES LIGUES</h5>
                        <p>
                            Lorsque les ligues acquièrent du matériel informatique, il y a une phase obligatoire d'intégration qui consiste à : <br><br>
                        </p>
                        <ul class="presentation">
                            <li>Installer un antivirus affilié au serveur antiviral de la M2L ;<br></li>
                            <li>Installer la dernière version de l'agent qui réalise l’inventaire matériel et logiciel ; <br></li>
                            <li>Paramétrer le poste en adressage IP automatique ; <br></li>
                            <li>Installer un système de sauvegarde de données sur un site FTP de sauvegarde géré par la M2L ; <br></li>
                            <li>Effectuer les dernières mises à jour systèmes et à paramétrer leur automatisation ; <br></li>
                            <li>Paramétrer les noms des postes selon les règles de gestion suivantes : <br></li>
                            <li>B[code bâtiment]E[numéro étage]L[numéro ligue]S[numéro salle].P[numéro poste] <br></li>
                            <li>Code bâtiment qui peut être A ou C <br></li>
                            <li> N° étage est compris entre 1 et 4 (puisque les locaux du rez-de-chaussée n'hébergent pas de ligues) <br></li>
                            <li>N° ligue sur 2 chiffres : correspond à un nombre attribué à la ligue allant pour l'instant de 01 à 24 <br></li>
                            <li>N° salle sur 2 chiffres : correspond aux bureaux occupés par les ligues <br></li>
                            <li>N° poste sur 2 chiffres : correspond au numéro écrit sur la prise murale <br><br></li>
                        </ul>

                        <p>
                            <u>Exemple:</u> 
                            Le nom d'hôte BAE2L06S01P01 correspond au poste installé sur la prise N°1 du bureau A201occupé par la ligue de Volley, bureau situé au deuxième étage du bâtiment A. <br><br>
                            Cette intégration est contractualisée. Les ligues et CD étant toutes des structures associatives indépendantes, leurs postes ne sont pas intégrés dans un annuaire central. Par contre, les postes de l'administration de la M2L et de la salle multimédia le sont. 
                        </p>

                        <h5>INTÉGRATION D'IMPRIMANTES</h5>
                        <p>Lorsque les structures hébergées s'équipent d'imprimante réseau, la connexion en est réalisée par l'informaticien bénévole du CROSL, sans passer par un serveur d'impression. Le nom de l'imprimante est lui aussi codifié de la même façon que celui des postes (la lettre L vient remplacer la lettre P). </p>

                        <h5>RÉSERVATION DE SALLES</h5>
                        <p>La M2L met à disposition des ligues un site web de réservation des salles (réunions, amphithéâtre, restauration). Ce site est accessible en intranet, mais aussi depuis l'internet. Les réservations payantes sont facturées par la Région aux utilisateurs. L’administration de la M2L lui communique les informations nécessaires à cette facturation de façon hebdomadaire.</p>

                        <h5>ÉTABLISSEMENT DE BULLETINS DE SALAIRE</h5>
                        <p>Le CRIB (Centre Régional d'Information des Bénévoles) est un label donné au CROSL qui, entre autres missions d'information (sur les textes réglementaires, la convention nationale du sport ...), propose un service d'établissement de bulletins de salaires aux ligues et à leurs clubs affiliés. Le CROSL est tiers de confiance pour l'URSSAF et, à ce titre, établit des bulletins de salaires réglementaires et tous les documents annexes. La prestation est facturée au forfait (60 € par an) et au bulletin édité (5 €). Un employé du CROSL est affecté à cette mission à raison de 0,8 ETP.</p>
                    </div>
                </div> 
            <!--Footer-->
                <footer>
                    <p>ce site est fictif (projet BTS)</p>
                </footer> 
    </body>
</html>