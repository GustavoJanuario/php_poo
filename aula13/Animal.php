<?php 

abstract class Animal {
    protected $peso, $idade, $membros;

    public abstract function emitirSom();

    /**
     * Get the value of membros
     */ 
    public function getMembros()
    {
        return $this->membros;
    }

    /**
     * Set the value of membros
     *
     * @return  self
     */ 
    public function setMembros($membros)
    {
        $this->membros = $membros;

        return $this;
    }
}

?>