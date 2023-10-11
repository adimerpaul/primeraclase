<?php
require 'vendor/autoload.php';
use Luecano\NumeroALetras\NumeroALetras;

$formatter = new NumeroALetras();
echo $formatter->toWords(1545454);
?>