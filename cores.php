<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
    $texto = isset($_GET["texto"])?$_GET["texto"]:"Texto Generico";
    $tam = isset($_GET["tam"])?$_GET["tam"]."pt":"20pt" ;
    $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";    
    ?>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 08</title>
    <style>
           span.texto{
            font-size:<?php echo $tam; ?>;
            color:<?php echo $cor; ?>;
        }v


    </style>
</head>
<body>
    <?php
         echo "<span class='texto'>$texto</span>"
    ?>
   
</body>
</html>