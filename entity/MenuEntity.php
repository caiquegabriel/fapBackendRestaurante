<?php

require_once("entity/PratoEntity.php");

class MenuEntity
{

    private ?array $pratos;

    public function __construct() {

    }

    public function setPrato(PratoEntity $prato)
    {
        $this->pratos[] = $prato;
    }

    public function getPratos(): array
    {
        return $this->pratos;
    }

}