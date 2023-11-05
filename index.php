<?php
include_once "Ikan.php";

$ikan1 = new Ikan();
echo $ikan1->bernapas();
echo $ikan1->berenang();
echo $ikan1->berkembangbiak();

$SingaLaut1 = new SingaLaut();
echo $SingaLaut1->bernapas();
echo $SingaLaut1->berenang();
echo $SingaLaut1->berkembangbiak();