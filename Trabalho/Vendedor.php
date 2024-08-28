<?php
require_once "Pessoa.php";
require_once "Data.php";
class Vendedor extends Pessoa
{
    private float $salario;
    private float $comissao;

    //CONSTRUCT IMPRIMIR
    public function __construct($nome, $cpf, $sexo, $dataNascimento, $salario, $comissao)
    {
        parent::__construct($nome, $cpf, $sexo, $dataNascimento);
        $this->setSalario($salario);
        $this->setComissao($comissao);
    }
    public function imprimir()
    {
        parent::imprimir();
        echo "Salário:" . $this->getSalario();
        echo "Comissâo:" . $this->getComissao();
    }
    //GETS SETS
    public function getSalario()
    {
        return $this->salario;
    }
    public function setSalario($salario)
    {
        $this->salario = $salario;
    }
    public function getComissao()
    {
        return $this->comissao;
    }
    public function setComissao($comissao)
    {
        $this->comissao = $comissao;
    }
}