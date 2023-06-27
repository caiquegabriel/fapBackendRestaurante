<?php

require("./entity/RestauranteEntity.php");
require("./entity/PratoEntity.php");
require("./entity/MenuEntity.php");
// require_once("entitys/ClienteEntity.php");

$prato1 = new PratoEntity();
$prato1->setNome('Bacalhau ao Azeite');
$prato1->setPeso(600.6);
$prato1->setPreco(125.75);
$prato1->setServeQtdPessoas(2);

$prato2 = new PratoEntity();
$prato2->setNome('Pão de Queijo');
$prato2->setPeso(120.6);
$prato2->setPreco(15.25);
$prato2->setServeQtdPessoas(2);

$prato3 = new PratoEntity();
$prato3->setNome('Macrrão Alho e Olho');
$prato3->setPeso(220.99);
$prato3->setPreco(19.99);
$prato3->setServeQtdPessoas(1);

$prato4 = new PratoEntity();
$prato4->setNome('Café ao Leite');
$prato4->setPeso(55.2);
$prato4->setPreco(2.99);
$prato4->setServeQtdPessoas(1);

$menu = new MenuEntity();
$menu->setPrato($prato1);
$menu->setPrato($prato2);
$menu->setPrato($prato3);
$menu->setPrato($prato4);
echo "Certo";