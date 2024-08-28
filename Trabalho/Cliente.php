<?php
require_once "Pessoa.php";
require_once "Data.php";
class Cliente extends Pessoa
{
    private Data $dataCadastro;
    private string $preferencias;

    //CONSTRUCT IMPRIMIR
    public function __construct($nome, $cpf, $sexo, $dataNascimento)
    {
        parent::__construct($nome, $cpf, $sexo, $dataNascimento);
        $this->setDataCadastro();
    }
    public function imprimir()
    {
        parent::imprimir();
        echo "Data de Cadastro:" . $this->getDataCadastro();
        echo "Preferencias:" . $this->getPreferencias();
    }
    //GETS SETS
    public function getDataCadastro()
    {
        return $this->dataCadastro;
    }
    public function setDataCadastro()
    {
        $this->dataCadastro = new Data(date('d'), date('m'), date('Y'));
    }
    public function getPreferencias()
    {
        return $this->preferencias;
    }
    public function setPreferencias($preferencias)
    {
        $this->preferencias = $preferencias;
    }

}