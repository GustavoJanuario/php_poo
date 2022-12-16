<?php 

class Caneta {
    public $modelo;
    public $cor;
    public $ponta;
    public $carga;
    public $tampada;
    
    public function rabiscar() {
        if ($this->tampada == true) {
            echo "<p>Erro! Não posso rabiscar!</p>";
        }else{
            echo "<p> Estou rabiscando...</p>";
        }
    }
    
    public function tampar() {
        $this->tampada = true;
    }
    
    public function destampar(){
        $this->tampada = false;
    }

}


?>