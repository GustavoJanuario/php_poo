<?php 

require_once("Mamifero.php");

class Cachorro extends Mamifero {
    public function emitirSom() {
        echo "Au! Au! Au!";
    }

    public function enterrarOsso() {
        echo "Enterrando osso";
    }

    public function abanarRabo() {
        echo "Abanando o rabo";
    }
}

?>