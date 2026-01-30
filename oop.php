<?php

class Voiture{
    public $marque;
    public $model;
    private $vitesse;

    public function __construct($marque , $model ,$vitesse) {
        $this->marque=$marque;
        $this->model=$model;
        $this->vitesse=$vitesse;
    }

    public function accelerer(){
        $this->vitesse ++;
    }

    public function getVitesse(){
        return $this->vitesse;
    }

    public function setVItesse(int $v){
        $this->vitesse = $v;
    }

}



class CompteBancaire{
    private $solde;
    
    public function deposer($newMontant){
        $this->solde = $newMontant;
    }

    public function retirer($nomtan){
        if($this->solde < 0 ){
            echo ' solde est negtif';
        }
        else{
            $this->solde = $this->solde - $nomtan;
        }
    }
}