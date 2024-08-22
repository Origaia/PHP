<?php
require_once "Pessoa.php";
class Conta{
    private int $numeroConta;
    private int $numeroCVC;
    private int $agencia;
    private  float $saldo;
    private float $credito=0;
    private Pessoa $titular=0;

    //CONSTRUCT IMPRIMIR
    public function __construct($numeroConta, $numeroCVC, $agencia, $titular)
    {
        $this->setNumeroConta($numeroConta);
        $this->setNumeroCVC($numeroCVC);
        $this->setAgencia($agencia);
        $this->setTitular($titular);
    }

    //GETS SETS
    public function getNumeroConta()
    {
        return $this->numeroConta;
    }
    public function setNumeroConta($numeroConta)
    {
        $this->numeroConta = $numeroConta;
    }
    public function getNumeroCVC()
    {
        return $this->numeroCVC;
    }
    public function setNumeroCVC($numeroCVC)
    {
        $this->numeroCVC = $numeroCVC;
    }
    public function getSaldo()
    {
        return $this->saldo;
    }
    public function setSaldo($saldo)
    {
        $this->saldo -= $saldo;
    }
    public function getCredito()
    {
        return $this->credito;
    }
    public function setCredito($credito)
    {
        $this->credito = $credito;
    }
    public function getTitular()
    {
        return $this->titular;
    }
    public function setTitular($titular)
    {
        $this->titular = $titular;
    }
    public function getAgencia()
    {
        return $this->agencia;
    }
    public function setAgencia($agencia)
    {
        $this->agencia = $agencia;
    }
}