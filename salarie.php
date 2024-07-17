<?php

require_once 'inheritance.php';

class Salarie extends personne{
    private $salaire;

    public function __construct($prenom,$nom,$age,$salaire)
    {
        parent::__construct($prenom,$nom,$age);
        $this->salaire = $salaire;
    }

    public function getSalaire(){
        return $this->salaire;
    }
}

class Director extends Salarie{

}

