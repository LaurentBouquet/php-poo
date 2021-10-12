<?php

final class Archer extends Personnage {

    public function attaquer(Personnage $persoAFrapper): Personnage
    {
        $persoAFrapper->_degats += $this->_force;
        return $this;
    }
    
    public function insulter()
    {
        print("<br/>Je suis un archer et je te dis : 'Tu vises comme un pied !'");
    }
}