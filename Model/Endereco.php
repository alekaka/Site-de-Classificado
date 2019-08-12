<?php 

require_once("Usuario.php");

class Endereco {

    private $cod;
    private $rua;
    private $numero;
    private $bairro;
    private $cidade;
    private $estado;
    private $complemento;
    private $cep;
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

    public function setRua($rua)
    {
        $this->rua = $rua;
    }
    
    public function getRua()
    {
        return $this->rua;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }
    
    public function getNumero()
    {
        return $this->numero;
    }

    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }
    
    public function getBairro()
    {
        return $this->bairro;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }
    
    public function getCidade()
    {
        return $this->cidade;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
    }
    
    public function getEstado()
    {
        return $this->estado;
    }

    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;
    }
    
    public function getComplemento()
    {
        return $this->complemento;
    }

    public function setCep($cep)
    {
        $this->cep = $cep;
    }
    
    public function getCep()
    {
        return $this->cep;
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