<?php

class personne {
    protected $prenom;
    protected $nom;
    protected $age;

    public function __construct($prenom,$nom,$age){
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->age = $age;
    }

    public function getPrenom(){
        return $this->prenom;
    }
    public function getNom(){
        return $this->nom;
    }
    public function getAge(){
        return $this->age;
    }
}
