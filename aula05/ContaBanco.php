<?php 

class ContaBanco
{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function abrirConta($tipo)
    {
        $this->setTipo($tipo);
        $this->setStatus(true);

        if($tipo == "CC")
        {
            $this->setSaldo(50);
            echo "<p>Conta Corrente aberta com sucesso!</p>";
        }
        elseif($tipo == "CP")
        {
            $this->setSaldo(150);
            echo "<p>Conta Poupança aberta com sucesso!</p>";
        }
    }
    public function fecharConta()
    {
        if($this->getStatus() == true)
        {
            if($this->getSaldo() < 0)
            {
                echo "<p>Conta com saldo negativo, não é possivel fechar conta!</p>";
            }
            elseif($this->getSaldo() > 0)
            {
                echo "<p>Conta com saldo positivo, favor sacar o valor para fechar a conta!</p>";
            }
            else
            {
                $this->setStatus(false);
                echo "<p>Conta fechada com sucesso!</p>";
            }
        }
        else
        {
            echo "<p>Está conta não está aberta!</p>";
        }
            
    }
    public function depositar($valor)
    {
        if($this->getStatus() == true)
        {
            $this->setSaldo($this->getSaldo() + $valor);
            echo "<p>Deposito de R$" . $valor . " realizado com sucesso na conta de " . $this->getDono() . "</p>";
        }
        else
        {
            echo "<p>Está conta não está aberta!</p>";
        }
    }
    public function sacar($valor)
    {
        if($this->getStatus() == true)
        {
            if($this->getSaldo() < $valor)
            {
                echo "<p>Saldo insuficiente!</p>";
            }
            else
            {
                $this->setSaldo($this->getSaldo() - $valor);
                echo "<p>Saque de R$" . $valor . " realizado com sucesso na conta de " . $this->getDono() . "<p>";
            }
        }
        else
        {
            echo "<p>Está conta não está aberta!<p>";
        }
    }
    public function pagarMensal()
    {
        if($this->getTipo() == "CC")
        {
            $mensalidade = 12;
        }
        elseif($this->getTipo() == "CP")
        {
            $mensalidade = 20;
        }

        if($this->getStatus() == true)
        {
            if($this->getSaldo() < $mensalidade)
            {
                echo "<p>Saldo insuficiente!<p>";
            }
            else
            {
                $this->setSaldo($this->getSaldo() - $mensalidade);
                echo "<p>Mensalidade de R$$mensalidade debitada na conta de " . $this->getDono() . "<p>";
            }
        }
        else
        {
            echo "<p>Está conta não está aberta!<p>";
        }
    }

    //construtor
    public function __construct($numConta, $dono)
    {
        $this->setNumConta($numConta);
        $this->setDono($dono);
        $this->saldo = 0;
        $this->status = false;
    }

    /**
     * Get the value of numConta
     */ 
    public function getNumConta()
    {
        return $this->numConta;
    }

    /**
     * Set the value of numConta
     *
     * @return  self
     */ 
    public function setNumConta($numConta)
    {
        $this->numConta = $numConta;

        return $this;
    }

    /**
     * Get the value of tipo
     */ 
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */ 
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of dono
     */ 
    public function getDono()
    {
        return $this->dono;
    }

    /**
     * Set the value of dono
     *
     * @return  self
     */ 
    public function setDono($dono)
    {
        $this->dono = $dono;

        return $this;
    }

    /**
     * Get the value of saldo
     */ 
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * Set the value of saldo
     *
     * @return  self
     */ 
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;

        return $this;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
}


?>