<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animais</title>
</head>
<body>
    <pre>
        <?php

use LDAP\Result;

            require_once("Mamifero.php");
            require_once("Reptil.php");
            require_once("Peixe.php");
            require_once("Ave.php");
            require_once("Canguru.php");
            require_once("Cachorro.php");
            require_once("Cobra.php");
            require_once("Tartaruga.php");
            require_once("Goldfish.php");
            require_once("Arara.php");

            $m = new Mamifero();
            $m->setPeso(33.5);
            $m->locomover();

            $a = new Ave();
            $a->locomover();

            $r = new Reptil();
            $r->locomover();

            $p = new Peixe();
            $p->locomover();

            $c = new Canguru();
            $c->locomover();

            $k = new Cachorro();
            $k->locomover();

            $t = new Tartaruga();
            $t->locomover();
            
        ?>
    </pre>
</body>
</html>