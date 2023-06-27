<?php if (!isset($menu)) die(); ?>

<h1 style="text-align: center !important;"><?= $restaurante->getNome() ?></h1>
<p style="text-align: center !important;"><?= $restaurante->getDescricao() ?></p>
<p style="font-size: 19.6px; text-align: center !important;"><strong>Olá,</strong> <?= $cliente->getNome() ?></p>

<h3>Menu</h3>

<?php if(isset($_GET['success'])): ?>
<p><?= $cliente->getNome() ?>, o item foi adicionado ao seu carrinho com sucesso! <a href="index.php?page=checkout">Ver meus pedidos</a></p>
<?php endif; ?>
<ul>
<?php foreach ($menu->getPratos() as $prato): ?>
    <li style="list-style:none !important;">
        <div style="padding: 10px; border: 1px solid #EEE; background: #E2E2E2; margin: 0px 0px 12px 0px;">
            <p style="padding: 3px; margin: 0px !important;"><?= $prato->getNome() ?> | Para <strong><?= $prato->getServeQtdPessoas() ?> pessoas</strong> | R$ <?= $prato->getPreco() ?></p>
            <p style="padding: 3px; margin: 0px !important;"><a href="index.php?page=add_item&id=<?= $prato->getId() ?>">Adicionar item</a></p>
        </div>
    </li>
<?php endforeach; ?>
</ul>