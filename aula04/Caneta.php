<?php 

class Caneta{
    protected $modelo;
    protected $cor;
    protected $ponta;
    protected $tampada;

    public function __construct($modelo, $cor, $ponta)
    {
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ponta = $ponta;
        $this->setTampada(true);
    }

    public function tampada()
    {
        $this->tampada = true;
    }


    /**
     * Get the value of tampada
     */ 
    public function getTampada()
    {
        return $this->tampada;
    }

    /**
     * Set the value of tampada
     *
     * @return  self
     */ 
    public function setTampada($tampada)
    {
        $this->tampada = $tampada;

        return $this;
    }

    /**
     * Get the value of ponta
     */ 
    public function getPonta()
    {
        return $this->ponta;
    }

    /**
     * Set the value of ponta
     *
     * @return  self
     */ 
    public function setPonta($ponta)
    {
        $this->ponta = $ponta;

        return $this;
    }

    /**
     * Get the value of cor
     */ 
    public function getCor()
    {
        return $this->cor;
    }

    /**
     * Set the value of cor
     *
     * @return  self
     */ 
    public function setCor($cor)
    {
        $this->cor = $cor;

        return $this;
    }

    /**
     * Get the value of modelo
     */ 
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     *
     * @return  self
     */ 
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }
}
