<?php

class RestauranteEntity
{

    private ?int $id;

    private ?string $nome;

    private ?string $descricao;

    public function __construct() {

    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }

    public function setDescricao(string $descricao)
    {
        $this->descricao = $descricao;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }
}