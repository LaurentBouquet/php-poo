<?php

class Magicien extends Personnage {

    private $_magie; // Indique la puissance du magicien sur 100, sa capacité à produire de la magie.
  
    public function attaquer(Personnage $persoAFrapper): Personnage
    {
        $persoAFrapper->_degats += $this->_magie;
        return $this;
    }

}