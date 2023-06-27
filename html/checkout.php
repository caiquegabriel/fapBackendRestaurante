<?php if (!isset($menu)) die(); ?>

<h1 style="text-align: center !important;"><?= $restaurante->getNome() ?></h1>
<p style="text-align: center !important;"><?= $restaurante->getDescricao() ?></p>
<p style="font-size: 19.6px; text-align: center !important;"><strong>Olá,</strong> <?= $cliente->getNome() ?></p>
<h3> <a href="index.php?page=menu">< Voltar</a>  | Checkout</h3>

<ul>
<?php foreach ($menu->getPratos() as $prato): ?>
    <?php if ($prato->getUnidades() > 0): ?>
    <li style="list-style:none !important;">
        <div style="padding: 10px; border: 1px solid #EEE; background: #E2E2E2; margin: 0px 0px 12px 0px;">
            <p style="padding: 3px; margin: 0px !important;"><?= $prato->getNome() ?> | Unitário: R$ <?= $prato->getPreco() ?></p>
            <p style="padding: 3px; margin: 0px !important;"><?= $prato->getUnidades() ?> unidades | Total de R$ <?= $prato->getTotal() ?> </p>
            <p style="padding: 3px; margin: 0px !important;"><a href="index.php?page=remove_item&id=<?= $prato->getId() ?>">Remover item</a></p>
        </div>
    </li>
    <?php endif; ?>
<?php endforeach; ?>
</ul>