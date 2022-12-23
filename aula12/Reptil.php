<?php 

require_once("Animal.php");

class Reptil extends Animal {
    private $corEscama;

    public function locomover() {
        echo "<p>Rastejando</p>";
    }

    public function alimentar() {
        echo "<p>Comendo vegetais</p>";
    }

    public function emitirSom() {
        echo "<p>Som de Réptil</p>";
    }

    /**
     * Get the value of corEscama
     */ 
    public function getCorEscama()
    {
        return $this->corEscama;
    }

    /**
     * Set the value of corEscama
     *
     * @return  self
     */ 
    public function setCorEscama($corEscama)
    {
        $this->corEscama = $corEscama;

        return $this;
    }
}

?>