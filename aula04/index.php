<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-POO</title>
</head>

<body>

    <pre>
    <?php

        require_once("Caneta.php");
        require_once("Pessoa.php");

        $c1 = new Caneta("BIC", "Azul", 0.5);
        print_r($c1);

        $c2 = new Caneta("Slim", "Vermelha", 0.7);
        print_r($c2);

        $pessoas = array();

        $p1 = new Pessoa("Gustavo", 28, "M");
        $pessoas[] = $p1;
        
        $p2 = new Pessoa("Maria", 27, "F");
        $pessoas[] = $p2;

        print_r($pessoas);
        
    ?>
    </pre>

</body>

</html>