<?php
class Pessoa
{
    private int $codigo;
    private string $nome;
    private string $date;


    //CONSTRUCT IMPRIMIR
    public function __construct($codigo, $nome, $date)
    {
        $this->setCodigo($codigo);
        $this->setNome($nome);
        $this->setDate($date);
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
    public function getDate()
    {
        return $this->date;
    }
    public function setDate($date)
    {
        $this->date = $date;
    }
}