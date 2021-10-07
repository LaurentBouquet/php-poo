<?php

class Archer extends Personnage {

    public function frapper(Personnage $persoAFrapper): Personnage
    {
        $persoAFrapper->_degats += $this->_force;
        return $this;
    }
    
}