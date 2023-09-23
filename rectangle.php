<?php
require_once "exo.php";  
        class Rectangle extends Forme{
        public $longeur;
        public $largeur;

            public function __construct($longeur, $largeur)
            {
                $this->longeur = $longeur;
                $this->largeur = $largeur;
            }

        public function calculerAire()
        {
            return $this->longeur * $this->largeur;
        }
        public function calculerLePerimetre()
        {
            return 2 * ($this->longeur + $this->largeur);
        }
    }

    $rectangle = New rectangle(2 + 4);

    $Aire_rectangle = $rectangle->calculerAire();
    $Perimetre_rectangle = $rectangle->calculerLePerimetre();
    echo "Aire du rectangle : $Aire_rectangle \n";
    echo "Perimetre du rectangle : $Perimetre_rectangle \n";
