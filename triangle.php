<?php
require_once "exo.php";  
    class cotes extends Forme{
    public $cote;

        public function __construct($cote)
        {
            $this->cote = $cote;
        }
    public function calculerAire($x, $y, $z)
    {
        $d = ($x + $y + $z) / 2;
        $Aire = sqrt($d * ($d - $a) * ($d - $b) * ($d - $c));

        return $Aire;
    }
    public function calculerLePerimetre()
    {
        return $this->cote + $this->cote + $this->cote + $this->cote;
    } 
}

$triangle = New triangle(2, 3, 4);

$Aire_triangle = calculerAire($x, $y, $z);
$Perimetre_triangle = calculerLePerimetre($x, $y, $z);

echo "l'aire du triangle : $Aire_triangle \n";
echo "Perimetre du triangle : $Perimetre_triangle \n";