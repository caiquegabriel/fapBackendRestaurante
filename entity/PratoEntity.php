<?php

class PratoEntity
{

    private ?int $id;

    private ?string $nome;

    private ?float $preco;

    private ?float $peso;

    private int $unidades = 0;

    private ?int $serveQtdPessoas;

    public function __construct() {

    }

    public function setUnidades(int $unidades)
    {
        $this->unidades = $unidades;
    }

    public function getUnidades():int
    {
        return $this->unidades;
    }

    public function addUnidade()
    {
        $this->unidades++;
    }

    public function setServeQtdPessoas(int $serveQtdPessoas)
    {
        $this->serveQtdPessoas = $serveQtdPessoas;
    }

    public function getServeQtdPessoas(): int
    {
        return $this->serveQtdPessoas;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }

    public function setPreco(float $preco)
    {
        $this->preco = $preco;
    }

    public function getPreco(): float
    {
        return $this->preco;
    }

    public function setPeso(float $peso)
    {
        $this->peso = $peso;
    }

    public function getPeso(): float
    {
        return $this->peso;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getTotal()
    {
        return $this->preco * $this->unidades;
    }
}