<?php


$server = 'localhost';
$dbname = 'gicrvs';
$user = 'root';
$pass = '';

// etablire la connexion

$base = new PDO("mysql:host=$server;dbname=$dbname",$user,$pass);
$base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

// RECUPERER les donnees 
@$url_image = $_POST['img'];
@$nom_produit = $_POST['nom_produit'];
@$prix = $_POST['prix'];

// on insere les donnes dans la base de donne

if (isset($nom_produit) and isset($prix) and isset($url_image)) {
    $insert =("INSERT INTO produit (url_image, Nom, prix) VALUES (\"$url_image\", \"$nom_produit\", $prix)");
    $base->exec($insert);
    header("location:merci.html");

}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <style>
        *,::before,::after{
            box-sizing : border-box;
            margin : 0;
            padding : 0;
            /* font-family: 'josefin sans', sans-serif; */
        }
        header{
            width: 100%;
            height: 15vh;
            background: #ddec05;
            color: white;
            font-size: 45px;
            margin: auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        body{
            background: #191919;
        }
        
        .col-md-9{
            color: antiquewhite;
            margin: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 40px;
            text-align: center;
        }
        .col-md-9 td{
            padding-top: 50px;
            padding-left: 30px;
        }
        tr :nth-child(2) input{
            width: 320px;
            border-radius: 3pc;
            padding: 7px;
            outline: none;
        }
        tr :nth-child(1){
            text-align: left;
        }
        input[type="submit"]{
            margin: auto;
            display: flex;
            justify-content: center;
            text-align: center;
            width: 100px;
            height: 35px;
            scale: 1.5;
            border-radius: 3pc;
            outline: none;
            border: none;
            background: #ddec05;
            color: aliceblue;
        }
        input[type="submit"]:hover{
            border: 2px solid #ddec05;
            background: #191919;
            color: #ddec05;
            scale: 1.7;
        }
    </style>

    <title>Document</title>
</head>
<body>

    <header>Enregistrer des produits</header>
    <form action="" method="post" class="col-md-9">
        <table border="0">
            <tr>
                <td>Entrer le nom de votre produit</td>
                <td><input type="text" name="nom_produit" required></td>
            </tr>
            <tr>
                <td>Entrer l'url de l'image de votre produit</td>
                <td><input type="text" name="img" required></td>
            </tr>
            <tr>
                <td>Entrer le prix de votre produit</td>
                <td><input type="number" name="prix" min="100" max="1000000" required></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Envoyer"></td>
            </tr>
        </table>
    </form>

</body>
</html>