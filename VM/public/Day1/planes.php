<?php

class Planes extends vehicle
{
    // Declaración de propiedades
 
    public $speed_var = '900 Km/h';
    public $canFly_var ='It can fly';
    public $maxPassengers_var ='650';

    // Declaración de métodos

    protect function speed() {
        echo $this->speed_var ;
    }
    protect function canFly() {
        echo $this->canFly_var ;
    }
    protect function maxPassengers($num) {
        $num->maxPassengers_var;
    }

?>