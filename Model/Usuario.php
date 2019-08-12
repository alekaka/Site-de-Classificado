<?php 

class Usuario {
    
    private $cod;
    private $nome;
    private $email;
    private $cpf;
    private $usuario;
    private $senha;
    private $nascimento;
    private $sexo;
    private $status;
    private $permissao;
    private $ip;

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

    public function setEmail($email)
    {
        $this->email = $email;
    }
    
    public function getEmail()
    {
        return $this->email;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }
    
    public function getCpf()
    {
        return $this->cpf;
    }

    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }
    
    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }
    
    public function getSenha()
    {
        return $this->senha;
    }

    public function setNascimento($nascimento)
    {
        $this->nascimento = $nascimento;
    }
    
    public function getNascimento()
    {
        return $this->nascimento;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }
    
    public function getSexo()
    {
        return $this->sexo;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }
    
    public function getStatus()
    {
        return $this->status;
    }

    public function setPermissao($permissao)
    {
        $this->permissao = $permissao;
    }
    
    public function getPermissao()
    {
        return $this->permissao;
    }

    public function setIp($ip)
    {
        $this->ip = $ip;
    }
    
    public function getIp()
    {
        return $this->ip;
    }
}