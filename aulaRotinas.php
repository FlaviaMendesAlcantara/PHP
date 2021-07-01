<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de repetiçao</title>
</head>
<body>
  <form method="get">
    num1: <input type="number" name="n1"/>
    <br>num2: <input type="number" name="n2"/>
    <input type="submit" value="Calcular">
  </form>
  <?php
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    function soma ($n1,$n2){
     $result=$n1 + $n2;
     return $result;
    }

    function soma2(){
      $par = func_get_args();
      $nPar = func_num_args();

      for($i=0; $i<$nPar; $i++){
        $som += $par[$i];
      }
      return $som;
    }

    function soma3 (&$x){
      $x = $x + 2;
      echo "O resultado de x é $x ";
    }
    $a = 3;
    soma3($a);
    echo "O valor de A é $a";
    
  ?>

</body>
</html>