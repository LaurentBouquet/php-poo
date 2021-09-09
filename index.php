<?php

include("Personnage.php");

print("<h1>Jeu de combat</h1>");

// $perso = new Personnage();
// $perso->parler();
// $perso->gagnerExperience();
// print("Expérience = ".$perso->afficherExperience());

// On crée deux personnages
$perso1 = new Personnage('Mario');
$perso1->setExperience(15);

$perso2 = new Personnage("Lara", 60, 0);
$perso2->setExperience(1);
    
// Ensuite, on veut que le personnage n°1 frappe le personnage n°2.
$perso1->frapper($perso2);
$perso2->frapper($perso1);

print("<br/>Dégats du joueur n°1 = ".$perso1->getDegats());
print("<br/>Dégats du joueur n°2 = ".$perso2->getDegats());




