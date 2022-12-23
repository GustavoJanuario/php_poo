<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança-02</title>
</head>
<body>
    <pre>
        <?php 
            require_once("Pessoa.php");
            require_once("Visitante.php");
            require_once("Aluno.php");
            require_once("Bolsista.php");
            require_once("Professor.php");
            require_once("Tecnico.php");

            // $p1 = new Pessoa();
            // print_r($p1);

            $v1 = new Visitante();
            $v1->setNome("Juvenal");
            $v1->setIdade(33);
            $v1->setSexo("M");
            print_r($v1);

            $a1 = new Aluno();
            $a1->setNome("Pedro");
            $a1->setMatricula(1111);
            $a1->setIdade(16);
            $a1->setSexo("M");
            $a1->setCurso("Informática");
            $a1->pagarMensalidade();
            print_r($a1);

            $b1 = new Bolsista();
            $b1->setNome("Maria");
            $b1->setMatricula(2222);
            $b1->setBolsa(12.5);
            $b1->setIdade(18);
            $b1->setSexo("F");
            $b1->setCurso("Administração");
            $b1->pagarMensalidade();
            print_r($b1);

            $p1 = new Professor();
            $p1->setNome("João");
            $p1->setIdade(28);
            $p1->setSexo("M");
            $p1->setEspecialidade("Administração");
            $p1->setSalario(2200);
            $p1->receberAumento(500);
            print_r($p1);

            $t1 = new Tecnico();
            $t1->setNome("Gustavo");
            $t1->setIdade(30);
            $t1->setSexo("M");
            $t1->setMatricula(3333);
            $t1->setCurso("Informática");
            $t1->setRegistroProfissional(123456);
            $t1->praticar();
            print_r($t1);

        ?>
    </pre>
</body>
</html>