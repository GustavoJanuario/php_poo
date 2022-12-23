<?php 

require_once("Aluno.php");

class Tecnico extends Aluno {
    private $registroProfissional;

    public function praticar() {
        echo "<p>Praticando!</p>";
    }

    /**
     * Get the value of registroProfissional
     */ 
    public function getRegistroProfissional()
    {
        return $this->registroProfissional;
    }

    /**
     * Set the value of registroProfissional
     *
     * @return  self
     */ 
    public function setRegistroProfissional($registroProfissional)
    {
        $this->registroProfissional = $registroProfissional;

        return $this;
    }
}

?>