<?php
session_start();

require("./entity/RestauranteEntity.php");
require("./entity/PratoEntity.php");
require("./entity/MenuEntity.php");
require("./entity/ClienteEntity.php");

$restaurante = new RestauranteEntity();
$restaurante->setNome('Pé de Cabra');
$restaurante->setDescricao('Desde de 2023 fazendo tradição');

$cliente = new ClienteEntity();
$cliente->setNome('Caíque Gabriel');
$cliente->setTelefone('(88) 8 8888-8888');

$prato1 = new PratoEntity();
$prato1->setId(1);
$prato1->setNome('Bacalhau ao Azeite');
$prato1->setPeso(600.6);
$prato1->setPreco(125.75);
$prato1->setServeQtdPessoas(2);

$prato2 = new PratoEntity();
$prato2->setId(2);
$prato2->setNome('Pão de Queijo');
$prato2->setPeso(120.6);
$prato2->setPreco(15.25);
$prato2->setServeQtdPessoas(2);

$prato3 = new PratoEntity();
$prato3->setId(3);
$prato3->setNome('Macrrão Alho e Olho');
$prato3->setPeso(220.99);
$prato3->setPreco(19.99);
$prato3->setServeQtdPessoas(1);

$prato4 = new PratoEntity();
$prato4->setId(4);
$prato4->setNome('Café ao Leite');
$prato4->setPeso(55.2);
$prato4->setPreco(2.99);
$prato4->setServeQtdPessoas(1);

$menu = new MenuEntity();
$menu->setPrato($prato1);
$menu->setPrato($prato2);
$menu->setPrato($prato3);
$menu->setPrato($prato4);

$page = $_GET['page'] ?? null;

switch ($page) {
    case 'menu':
        include('html/menu.php');
    break;
    case 'checkout':
        $items = $_SESSION['items'] ?? [];

        foreach ($items as $item) {
            switch($item) {
                case 1:
                    $prato1->addUnidade();  
                break;
                case 2:
                    $prato2->addUnidade();  
                break;
                case 3:
                    $prato3->addUnidade();  
                break;
                case 4:
                    $prato4->addUnidade();  
                break;
            }
        }

        include('html/checkout.php');
    break;
    case 'add_item': var_dump($_SESSION['items']);
        $items = $_SESSION['items'] ?? [];

        if (isset($_GET['id']) && is_numeric($_GET['id']) && in_array($_GET['id'], [1, 2, 3, 4])) {
            $items[] = $_GET['id'];
        }

        $_SESSION['items'] = $items;

        header('Location: index.php?page=menu&success=true');
    break;
    case 'remove_item': var_dump($_SESSION['items']);
        $items = $_SESSION['items'] ?? [];

        if (isset($_GET['id']) && is_numeric($_GET['id']) && in_array($_GET['id'], [1, 2, 3, 4])) {
            $remove_item = $_GET['id'];
        }

        if (isset($remove_item)) {
            foreach ($items as $key => $value) {
                if ($value == $remove_item) {
                    unset($items[$key]);
                    echo "Removendo";
                }
            }
        }

        $_SESSION['items'] = $items;

        header('Location: index.php?page=checkout');
    break;
}
?>