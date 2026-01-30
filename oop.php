<?php

class Voiture{
    public $marque;
    public $model;
    public $vitesse;

    public function __construct($marque , $model ,$vitesse) {
        $this->marque=$marque;
        $this->model=$model;
        $this->vitesse=$vitesse;
    }

    public function accelerer(){
        $this->vitesse ++;
    }

}