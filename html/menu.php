<?php if (!isset($menu)) die(); ?>

<h1>Menu</h1>
<?php if(isset($_GET['success'])): ?>
<p>Item adicionado ao seu carrinho com sucesso! <a href="index.php?page=checkout">Ver meus pedidos</a></p>
<?php endif; ?>
<ul>
<?php foreach ($menu->getPratos() as $prato): ?>
    <li style="list-style:none !important;">
        <div style="padding: 10px; border: 1px solid #EEE; background: #E2E2E2; margin: 0px 0px 12px 0px;">
            <p style="padding: 3px; margin: 0px !important;"><?= $prato->getNome() ?> | Serve <strong><?= $prato->getServeQtdPessoas() ?> pessoas</strong> | R$ <?= $prato->getPreco() ?></p>
            <p style="padding: 3px; margin: 0px !important;"><a href="index.php?page=add_item&id=<?= $prato->getId() ?>">Adicionar item</a></p>
        </div>
    </li>
<?php endforeach; ?>
</ul>