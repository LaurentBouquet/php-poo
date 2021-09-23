<?php

include 'header.php'; 

try {
    $db = new PDO($dsn, $user, $password);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); // Si toutes les colonnes sont converties en string
    
    $personnagesManager = new PersonnagesManager($db);
    $personnages = $personnagesManager->getList();

    print('<br/>Liste des personnages :');
    foreach ($personnages as $personnage) {
      print('<br/>
      <a target="_blank" href="personnage_view.php?id='.$personnage->getId().'">' 
      . $personnage->getNom()
      .'</a>');
    }    

    /*
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); // Si toutes les colonnes sont converties en string
    if ($db) {
        print('<br/>Lecture dans la base de données :');
        $request = $db->query('SELECT id, nom, `force`, degats, niveau, experience FROM personnages;');
        while ($ligne = $request->fetch(PDO::FETCH_ASSOC)) // Chaque entrée sera récupérée et placée dans un array.
        {
          // On passe les données (stockées dans un tableau) concernant le personnage au constructeur de la classe.
          // qui va être chargé d'assigner les valeurs qu'on lui a données, aux attributs correspondants.
          $perso = new Personnage($ligne);                
          print('<br/>' . $perso->getNom() . ' a '. $perso->getForce() . ' de force, ' . $perso->getDegats()
            . ' de dégâts, ' . $perso->getExperience() . ' d\'expérience et est au niveau ' . $perso->getNiveau());
        }
    }
    */


} catch (PDOException $e) {
    print('<br/>Erreur de connexion : ' . $e->getMessage());
}