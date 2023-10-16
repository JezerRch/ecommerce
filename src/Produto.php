<?php

class Produto
{
    private $id;
    private $nome_produto;
    private $quantidade_produto;
    private $valor_produto;

    public function __construct($id, $nome_produto, $quantidade_produto, $valor_produto)
    {
        $this->id = $id;
        $this->nome_produto = $nome_produto;
        $this->quantidade_produto = $quantidade_produto;
        $this->valor_produto = $valor_produto;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNomeProduto()
    {
        return $this->nome_produto;
    }

    public function setNomeProduto($nome_produto)
    {
        $this->nome_produto = $nome_produto;
    }

    public function getQuantidadeProduto()
    {
        return $this->quantidade_produto;
    }

    public function setQuantidadeProduto($quantidade_produto)
    {
        $this->quantidade_produto = $quantidade_produto;
    }

    public function getValorProduto()
    {
        return $this->valor_produto;
    }

    public function setValorProduto($valor_produto)
    {
        $this->valor_produto = $valor_produto;
    }
}
