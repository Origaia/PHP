<?php
require_once "Pessoa.php";
class Carro
{
    private string $raca;
    private Pessoa $motorista;
    private string $modelo;
    private string $placa;

    //CONSTRUCT IMPRIMIR
    public function __construct($raca, $modelo, $placa)
    {
        $this->setRaca($raca);
        $this->setModelo($modelo);
        $this->setPlaca($placa);
    }
    //GETS SETS
    public function getRaca()
    {
        return $this->raca;
    }
    public function setRaca($raca)
    {
        $this->raca = $raca;
    }
    public function getMotorista()
    {
        return $this->motorista;
    }
    public function setMotorista($motorista)
    {
        $this->motorista = $motorista;
    }
    public function getModelo()
    {
        return $this->modelo;
    }
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }
    public function getPlaca()
    {
        return $this->placa;
    }
    public function setPlaca($placa)
    {
        $this->modelo = $placa;
    }
}