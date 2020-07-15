<?php

class Chaussures extends Vetements
{
    public $pointure;
    
    public function __construct($pointure, $prix, $disponibilite)
    {
        parent:: __construct($prix, $disponibilite);
        $this->pointure = $pointure;
        
    }

}


