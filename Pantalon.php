<?php

class Chaussures extends Vetements
{
    public $taille;
    
    public function __construct($taille, $prix, $disponibilite)
    {
        parent:: __construct($prix, $disponibilite);
        $this->taille = $taille;
        
    }

}