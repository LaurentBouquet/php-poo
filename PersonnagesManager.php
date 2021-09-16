<?php

class PersonnagesManager
{
    private $_db;

    public function __construct(PDO $db)
    {
        $this->setDb($db);
    }

    public function setDb(PDO $db): PersonnagesManager
    {
        $this->_db = $db;
        return $this;
    }

    public function add(Personnage $perso):Personnage
    {
        // Préparation de la requête d'insertion.
        // Assignation des valeurs pour le nom, la force, les dégâts, l'expérience et le niveau du personnage.
        // Exécution de la requête.
    }

    public function delete(Personnage $perso):bool
    {
        // Préparation de la requête d'insertion.
        // Assignation des valeurs pour le nom, la force, les dégâts, l'expérience et le niveau du personnage.
        // Exécution de la requête.
    }

    public function getOne(int $id)
    {
        // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personnage.
    }

    public function getList():array
    {
        // Retourne la liste de tous les personnages.
    }

    public function update(Personnage $perso):bool
    {
        // Prépare une requête de type UPDATE.
        // Assignation des valeurs à la requête.
        // Exécution de la requête.
    }

}
