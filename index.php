<?php
require_once 'classes/Smartphone.php';
require_once 'classes/Tv.php';
require_once 'classes/SmartTv.php';



$cell1 = new Smartphone('samsung', 's10', 900);
var_dump($cell1);

$tv1 = new SmartTv('samsung', 'eu55jru', 1000, 'android');
var_dump($tv1);
var_dump($tv1->getQuantita());
