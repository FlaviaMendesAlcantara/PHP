<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 07</title>
</head>
<body>
    <div>
        <!--mostar a situação do aluno de acordo com sua media obtida-->
        <h1>Informe suas notas</h1>
        <?php
            $a=$_GET["a"];
            $b=$_GET["b"];
            $c=$_GET["c"];
            $d=$_GET["d"];
            $m=(($a+$b+$c+$d)/4);
            $r= $m>60 ?"aprovado":"reprovado";
            echo $r;
        ?>
    
    <!--operador unario obtem 2 numeros e obtem a escolha do usuario em somar ou multiplicar e mostra o resultado-->
    <!--h1>Escolha 1 se vc deseja somar ou 2 se deseja multiplicar um numero</h1-->
       <!-- ?php
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            $tipo =$_GET["op"];
            $r = ($tipo == 1)?$n1+$n2:$n1*$n2;
            echo "$n1 * $n2 = $r<br/>";
        ?-->
    </div>


    
</body>
</html>