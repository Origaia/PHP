<?php
require_once "Produto.php";
class ItemPedido
{
    private Produto $item;
    private int $quantidade;
    private float $valor;

    //CONSTRUCT IMPRIMIR
    public function __construct($item, $quantidade)
    {
        $this->setItem($item);
        $this->setQuantidade($quantidade);
        $this->setValor();
    }
    //GETS SETS
    public function getItem()
    {
        return $this->item;
    }
    public function setItem($item)
    {
        $this->item = $item;
    }
    public function getQuantidade()
    {
        return $this->quantidade;
    }
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }
    public function getValor()
    {
        return $this->valor;
    }
    public function setValor()
    {
        $this->valor = $this->quantidade * $this->item->getValor();
    }
}