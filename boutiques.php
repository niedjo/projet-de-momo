<?php

$server = 'localhost';
$dbname = 'gicrvs';
$user = 'root';
$pass = '';

// etablire la connexion

$base = new PDO("mysql:host=$server;dbname=$dbname",$user,$pass);

$content = $base->query("SELECT * FROM produit ORDER BY identifiant DESC");





?> 







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bout2.css">
    <title>Document</title>
</head>
<body>
    <header>
        Boutiques
    </header>

    <div class="les_box row">
    

        <?php
        
        while ($a = $content->fetch()) {
            $url = $a['url_image'];
            $nom = $a['Nom'];
            $prix = $a['prix'];
            $src = "src = $url";

            echo "
            
                <div class=\"contenu col-md-3\">
                    <img $src></img>
                    <div class=\"nom\">".$nom."</div>
                    <div class=\"prix\">".$prix." fcfa</div>
                    <button>Acheter</button>
                </div>,
            
                ";

            }
        
        ?>

    </div>



</body> 
</html>