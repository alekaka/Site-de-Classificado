<?php 

class Categoria {

    private $cod;
    private $nome;
    private $thumb;
    private $descricao;
    private $link;
    
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
    
    public function setThumb($thumb)
    {
        $this->thumb = $thumb;
    }
    
    public function getThumb()
    {
        return $this->thumb;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }
    
    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setLink($link)
    {
        $this->link = $link;
    }
    
    public function getLink()
    {
        return $this->link;
    }
}