<?php 

class Contato {

    private $cod;
    private $nome;
    private $email;
    private $assunto;
    private $mensagem;
    private $data;
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

    public function setAssunto($assunto)
    {
        $this->assunto = $assunto;
    }
    
    public function getAssunto()
    {
        return $this->assunto;
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

    public function setIp($ip)
    {
        $this->ip = $ip;
    }
    
    public function getIp()
    {
        return $this->ip;
    }
}