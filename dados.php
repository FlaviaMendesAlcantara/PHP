<?php
   /* $ano= $_GET["ano"];
    $cal = date('Y') - $ano;
    
    if ($cal < 16) {
        echo "Não pode votar nem dirigir";
    } else if ($cal == 17) {
        echo "Ele pode voltar mas não pode dirigir";
    } else {
        echo "Pode votar e dirigir";
    };*/
    
    $nota1 = $_GET["n1"];
    $nota2 = $_GET["n2"];
    $media = ($nota1+$nota2)/2;
    if ($media<=5) {
        echo 'A média entre <span class="notas">'.$nota1.'</span> e <span class="notas">'.$nota2.'</span> é igual a <span class="notas">'.$media.'</span><br>
        Situação do aluno: REPROVADO.' ;
    }elseif ($media >5) {
        echo 'A média entre <span class="notas">'.$nota1.'</span> e <span class="notas">'.$nota2.'</span> é igual a <span class="notas">'.$media.'</span><br>
        Situação do aluno: Aprovado.' ;
    };
?>