<?php

require_once 'inheritance.php';

class Etudiant extends personne{
    private $note;

    public function __construct($prenom,$nom,$age,$note)
    {
        parent::__construct($prenom,$nom,$age);
        $this->note = $note;
    }

    public function getNote(){
        return $this->note;
    }
}
