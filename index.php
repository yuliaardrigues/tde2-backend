<?php

include('compra.php');

$aviao = new Aviao;

$aviao->setIdAviao(uniqid());
$aviao->setModelo("xr 30");
$aviao->setCapacidade(20);
$aviao->setFabricante('fabricante');




$voo1 = new Voo;
$voo1->setIdVoo(uniqid());
$voo1->setCodigo('0001');
$voo1->setHorarioPartida('18:30');
$voo1->setHorarioChegada('22:00');
$voo1->setAviao($aviao);

var_dump($voo1);




$compra = new Compra();
$compra->setIdCliente(uniqid());
$compra->setHorario("19:20");
$compra->setVoo($voo1);



var_dump($compra);




?>
