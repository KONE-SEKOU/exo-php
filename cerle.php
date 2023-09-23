<?php
require_once "exo.php";                                                                                                           
    class Cerle extends Forme{
    public $rayon;

    public function __construct($rayon){
        $this->rayon = $rayon;
    }

    public function calculerAire(){
        return M_PI * $this->rayon**2;
    }
    public function calculerLePerimetre(){
        return 2 * M_PI * $this->rayon;
    }
}

$Cerle = new Cerle(8);
$Aire_Cercle = $Cerle->calculerAire();
$Perimetre_Cercle = $Cerle->calculerPerimetre();

echo "l'aire du cercle : $Aire_Cercle \n";
echo "le perimetre du cercle : $Perimetre_Cercle \n";