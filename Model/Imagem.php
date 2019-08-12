<?php 
require_once("Classificado.php");

class Imagem {

    private $cod;
    private $imagem;
    private $classificado;

    public function __construct()
    {
        $this->classificado = new Classificado();
    }
    
    public function setCod($cod)
    {
        $this->cod = $cod;
    }
    
    public function getCod()
    {
        return $this->cod;
    }

    public function setImagem($imagem)
    {
        $this->imagem = $imagem;
    }
    
    public function getImagem()
    {
        return $this->imagem;
    }

    public function setClassificado($classificado)
    {
        $this->classificado = $classificado;
    }
    
    public function getClassificado()
    {
        return $this->classificado;
    }
}