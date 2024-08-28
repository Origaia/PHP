<?php
require_once "Data.php";
abstract class Pessoa
{
    private string $nome;
    private string $cpf;
    private string $sexo;
    private Data $dataNascimento;

    //CONSTRCUCT IMPRIMIR
    public function __construct($nome, $cpf, $sexo, $dataNascimento)
    {
        $this->setNome($nome);
        $this->setCPF($cpf);
        $this->setSexo($sexo);
        $this->setDataNascimento($dataNascimento);
    }
    public function imprimir()
    {
        echo "Nome:" . $this->getNome();
        echo "CPF:" . $this->getCPF();
        echo "Sexo:" . $this->getSexo();
        echo "Data Nascimento:" . $this->getDataNascimento();
    }
    //GETS SETS
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getCPF()
    {
        return $this->cpf;
    }
    public function setCPF($cpf)
    {
        $this->cpf = $cpf;
    }
    public function getSexo()
    {
        return $this->sexo;
    }
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }
    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }
    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
    }
}