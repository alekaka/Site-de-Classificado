<?php 

require_once("Usuario.php");

class Telefone {

    private $cod;
    private $tipo;
    private $numero;
    private $usuario;

    public function __construct()
    {
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

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
    
    public function getTipo()
    {
        return $this->tipo;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }
    
    public function getNumero()
    {
        return $this->numero;
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