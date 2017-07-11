<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>PHP Challenge 2</title>
</head>
<body>

<h1> Les Loops </h1>
<p>Vous devez réaliser une fonction d'affichage. La fonction prend en paramètres 2 nombres qui correspondent au début et à la fin d’une plage de nombres.

Vous devez afficher tous les nombres de cette plage en respectant les règles ci-dessous :

Les nombres doivent être affichés sous forme de liste
Les nombres paires sont en bleu
Les nombres impaires sont en orange
Les nombres qui sont des carrés parfaits sont en gras</p>
<?php 
include "function.php";
echo print_the_range (1,20);

 ?>

 <h1> Le Plus grand Gap </h1>
 <p>Créer un algorithme qui calcule le plus grand écart entre deux entiers consecutifs dans un tableau passé en paramètre d'entrée.<p>

 <?php
$tab = [8, 10, 50];
echo biggest_gap($tab);
 ?>






 <h1>Jeux de la fourchette</h1>

 <p>Simuler le jeu de la fourchette. Ce jeu consiste à essayer de découvrir un nombre quelconque compris entre 1 et 100 inclus, tiré au sort par l’ordinateur (la primitive rand(min, max) retourne un entier entre min et max). L’utilisateur a droit à huit essais maximum. À chaque essai, vous devrez afficher un message indicatif « nombre donné trop petit » ou « nombre donné trop grand ». En conclusion, soit « bravo, vous avez trouvé en [nombre] essai(s) » soit « désolé, le nombre était [valeur] ».</p>
 <?php


$number_to_guess = '3';


echo forkgame($number_to_guess);


 ?>
</body>
</html>