<?php 
require_once("Usuario.php");
require_once("Categoria.php");

class Classificado {

    private $cod;
    private $nome;
    private $descricao;
    private $tipo;
    private $valor;
    private $data;
    private $status;
    private $perfil;
    private $categoria;
    private $usuario;

    public function __construct()
    {
        $this->usuario = new Usuario();
        $this->categoria = new Categoria();
    }
    
    public function setCod($cod)
    {
        $this->cod = $cod;
    }
    
    public function getCod()
    {
        return $this->cod;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    
    public function getNome()
    {
        return $this->nome;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }
    
    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
    
    public function getTipo()
    {
        return $this->tipo;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }
    
    public function getValor()
    {
        return $this->valor;
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

    public function setPerfil($perfil)
    {
        $this->perfil = $perfil;
    }
    
    public function getPerfil()
    {
        return $this->perfil;
    }

    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }
    
    public function getCategoria()
    {
        return $this->categoria;
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