<?php 
require_once("Classificado.php");
require_once("Usuario.php");

class Comentario {

    private $cod;
    private $mensagem;
    private $data;
    private $status;
    private $classificado;
    private $usuario;

    public function __construct()
    {
        $this->classificado = new Classificado();
        $this->usuario = new Usuario();
    }
    
    public function setCod($cod)
    {
        $this->cod = $cod;
    }
    
    public function getCod()
    {
        return $this->cod;
    }

    public function setMensagem($mensagem)
    {
        $this->mensagem = $mensagem;
    }
    
    public function getMensagem()
    {
        return $this->mensagem;
    }

    public function setData($data)
    {
        $this->data = $data;
    }
    
    public function getData()
    {
        return $this->data;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }
    
    public function getStatus()
    {
        return $this->status;
    }

    public function setClassificado($classificado)
    {
        $this->classificado = $classificado;
    }
    
    public function getClassificado()
    {
        return $this->classificado;
    }

    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }
    
    public function getUsuario()
    {
        return $this->usuario;
    }
}