<?php

class ClienteEntity
{

    private ?int $id;

    private ?string $nome;

    private ?string $telefone;

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

    public function setTelefone(string $telefone)
    {
        $this->telefone = $telefone;
    }

    public function getTelefone(): string
    {
        return $this->telefone;
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