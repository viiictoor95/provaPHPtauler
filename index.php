<?php

ini_set('display_errors', 1);

require 'tauler.php';

$tauler=new Tauler(4,4,"aleat");
$tauler2=new Tauler(4,4,"escac");

$tauler->show();
$tauler2->show();

