<?php

require_once 'inheritance.php';
require_once 'salarie.php';
require_once 'Etudiant.php';

$salarie1= new Director('ahmed','kadi',29,2500);
$salarie2= new Director('mohamed','kadi',29,5500);
$salarie3= new Salarie('mohamed','ait el kadi',39,7500);

echo $salarie3->getPrenom();
echo '<br>';
echo $salarie3->getNom();
echo '<br>';
echo $salarie3->getAge() .' an';
echo '<br>';
echo $salarie3->getSalaire();
