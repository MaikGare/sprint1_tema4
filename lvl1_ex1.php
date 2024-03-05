<?php 

    class Employee{

        public string $nom;
        public int $sou;
        
        public function __construct($nom, $sou){

            $this->nom = $nom;
            $this->sou = $sou;
        }
        
        public function calculaImpostos(){

            if ($this->sou > 6000){
                $resposta = $this->nom . " ha de pagar impostos.";
            } else {
                $resposta = $this->nom . " no ha de pagar impostos.";
            }
            return $resposta;
        }
    }

    $miguel = new Employee("miguel",24000);

    echo $miguel->calculaImpostos();

?>