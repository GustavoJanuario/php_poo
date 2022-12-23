<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal</title>
</head>
<body>
    <pre>
        <?php 
            require_once("Mamifero.php");
            require_once("Lobo.php");
            require_once("Cachorro.php");

            $m = new Mamifero;
            $m->emitirSom();
            
            $l = new Lobo;
            $l->emitirSom();
            
            $c = new Cachorro;
            $c->reagirFrase("olá");
            $c->reagirFrase("Vai apanhar");
            $c->reagirHora(11, 45);
            $c->reagirHora(21, 00);
            $c->reagirDono(true);
            $c->reagirDono(false);
            $c->reagirIdade(2, 12.5);
            $c->reagirIdade(17, 4.5);


        ?>
    </pre>
</body>
</html>