<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta Banco</title>
</head>
<body>
    <pre>
        <?php 
            require_once("ContaBanco.php");

            $c1 = new ContaBanco(001, "Gustavo");
            // abrir conta corrente
            $c1->abrirConta("CC");
            // fazer depósito de R$100
            $c1->depositar(100);
            // pagar mensalidade da conta
            $c1->pagarMensal();
            // fazer saque de R$50
            $c1->sacar(50);            
            print_r($c1);

            $c2 = new ContaBanco(002, "Maria");
            // abrir conta corrente
            $c2->abrirConta("CP");
            // fazer depósito de R$100
            $c2->depositar(100);
            // pagar mensalidade da conta
            $c2->pagarMensal();
            // fazer saque de R$50
            $c2->sacar(50);            
            print_r($c2);
        
        ?>
    </pre>
</body>
</html>