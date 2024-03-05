<?php 

    class PokerDice{

        public $figuras = array("As","K","Q","J","8","9");
        public static $totalThrows = 0;

        public function throw(){

            self::$totalThrows += 1;

            return array_rand($this->figuras);
        }

        public function shapeName(){

            return $this->figuras[$this->throw()];
        }

        public function throwFive(){

            $tiradas = array();

            for ($i=0; $i < 5; $i++) { 
                $tirada = $this->throw();
                array_push($tiradas, $tirada);
            }

            return $tiradas;
        }

        public function getTotalThrows(){

            return self::$totalThrows;
        }
    }
    $dado = new PokerDice();

    $dado->throw();
    $dado->throwFive();
    echo $dado->getTotalThrows();


?>