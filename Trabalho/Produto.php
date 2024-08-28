<?php
class Produto
{
    private int $codigo;
    private string $nome;
    private float $valor;

    //CONSTRUCT IMPRIMIR
    public function __construct($codigo, $nome, $valor)
    {
        $this->setCodigo($codigo);
        $this->setNome($nome);
        $this->setValor($valor);
    }
    public function imprimir()
    {
        echo "Código:" . $this->getCodigo();
        echo "Nome:" . $this->getNome();
        echo "Valor:" . $this->getValor();
    }
    //GETS SETS
    public function getCodigo()
    {
        return $this->codigo;
    }
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getValor()
    {
        return $this->valor;
    }
    public function setValor($valor)
    {
        $this->valor = $valor;
    }
}