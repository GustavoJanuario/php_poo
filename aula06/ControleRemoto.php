<?php 
require_once 'Controlador.php';
class ControleRemoto implements Controlador
{
    private $volume;
    private $ligado;
    private $tocando;

    function __construct()
    {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

    /**
     * Get the value of volume
     */ 
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Set the value of volume
     *
     * @return  self
     */ 
    public function setVolume($volume)
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Get the value of ligado
     */ 
    public function getLigado()
    {
        return $this->ligado;
    }

    /**
     * Set the value of ligado
     *
     * @return  self
     */ 
    public function setLigado($ligado)
    {
        $this->ligado = $ligado;

        return $this;
    }

    /**
     * Get the value of tocando
     */ 
    public function getTocando()
    {
        return $this->tocando;
    }

    /**
     * Set the value of tocando
     *
     * @return  self
     */ 
    public function setTocando($tocando)
    {
        $this->tocando = $tocando;

        return $this;
    }

    public function ligar()
    {
        $this->setLigado(true);
    }
    public function desligar()
    {
        $this->setLigado(false);
    }
    public function abrirMenu()
    {
        echo "<br>Está ligado? " . ($this->getLigado()?"SIM":"NÃO");
        echo "<br>Está tocando? " . ($this->getTocando()?"SIM":"NÃO");
        echo "<br>Volume: " . $this->getVolume();
        for($i=0; $i <= $this->getVolume(); $i+=10)
        {
            echo "|";
        }
        echo "<br>";

    }
    public function fecharMenu()
    {
        echo "Fechando Menu..";
    }
    public function maisVolume()
    {
        if($this->getLigado())
        {
            $this->setVolume($this->getVolume()+5);
        }
    }
    public function menosVolume()
    {
        if($this->getLigado())
        {
            $this->setVolume($this->getVolume()-5);
        }
    }
    public function ligarMudo()
    {
        if($this->getLigado() && $this->getVolume()>0)
        {
            $this->setVolume(0);
        }
    }
    public function desligarMudo()
    {
        if($this->getLigado() && $this->getVolume()==0)
        {
            $this->setVolume(50);
        }
    }
    public function play()
    {
        if($this->getLigado() && !($this->getTocando()))
        {
            $this->setTocando(true);
        }
    }
    public function pause()
    {
        if($this->getLigado() && $this->getTocando())
        {
            $this->setTocando(false);
        }
    }
}


?>