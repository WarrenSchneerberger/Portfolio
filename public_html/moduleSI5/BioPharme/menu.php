<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="icon" href="./Logo-BioPharm-2.png"/>
    <title>BioPharme</title>
    <link rel="stylesheet" href="./Style.css" media="screen" type="text/css">    
</head>
<header>

<div align="center">
<a href="./index.php<?php echo('?id='.$_SESSION['id'])?>"><input type="button" value="Accueil" ></a>
<a href="./medicament.php<?php echo('?id='.$_SESSION['id'])?>"><input type="button" value="Médicament" ></a>
<a href="./forum.php<?php echo('?id='.$_SESSION['id'])?>"><input type="button" value="Forum" ></a>
<a href="./profil.php<?php echo('?id='.$_SESSION['id'])?>"><input type="button" value="Vos Données" ></a> <a href="./deconnexion.php?id="><input type="button" value="Déconnexion" ></a>
</div>
<img src="Logo-BioPharm-1.png" style="width:100px;height:100px;"/>
<br><br>
</header>