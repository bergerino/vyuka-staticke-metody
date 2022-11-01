<?php
    class LesniZver
    {
        public String $druh;
        public String $jmeno;
        public int $vek;
        public static int $pocetZvirat = 0;
        public static int $celkovyVekZvirat = 0;

        public function __construct(String $druh, String $jmeno, int $vek){
            $this->druh = $druh;
            $this->jmeno = $jmeno;
            $this->vek = $vek;

            self::$pocetZvirat++;
            self::$celkovyVekZvirat = self::$celkovyVekZvirat + $vek;
        }

        public function __destruct() {
            self::$pocetZvirat--;
            self::$celkovyVekZvirat = self::$celkovyVekZvirat - $this->vek;
            echo "Z lesa odesel ".$this->druh." ".$this->jmeno.", bylo mu ".$this->vek." let. Ted uz je v lese jen ".self::$pocetZvirat." zvirat.\n";
        }

        public function VypisZvire(){
            echo "Do lesa prichazi ".$this->druh." ".$this->jmeno.", je mu ".$this->vek." let. Nyni je v lese ".self::$pocetZvirat." zvirat.\n";
        }

        public static function prumernyVek(){
            $prumernyVek = self::$celkovyVekZvirat/self::$pocetZvirat;
            echo "Prumerny vek zvirat v lese je ".$prumernyVek." let\n";
        }
    }
?>