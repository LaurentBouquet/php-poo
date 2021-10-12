<?php

final class BruteVoleur extends Personnage implements Voleur {

    public function extraireDeLaPoche(Personnage $adversaire, int $montantExtrait){
        $adversaire->setPoche($adversaire->getPoche() - $montantExtrait);
        $this->setPoche($this->getPoche() + $montantExtrait);
    }

    public function courir(){

    }

    public function attaquer(Personnage $persoAFrapper): Personnage
    {
        return $this;
    }

}