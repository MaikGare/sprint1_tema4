<?php

    class Shape{

        public $base;
        public $altura;

        public function __construct($base, $altura){
           
            $this->base = $base;
            $this->altura = $altura;

        }
    }

    class Rectangle extends Shape{

        public function area(){
            return $this->base * $this->altura;
        }
    }

    class Triangle extends Shape{

        public function area(){
            return ($this->base * $this->altura) / 2;
        }
    }

    $rectangle = new Rectangle(6,5);
    echo $rectangle->area();

    echo "<br>";

    $triangle = new Triangle(8,5);
    echo $triangle->area();
?>