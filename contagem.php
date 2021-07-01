<?php
    $ini=$_GET["ini"];
    $final=$_GET["fin"];
    $inc=$_GET["inc"];
    $cont=$ini;

    while($cont>=$ini && ($cont<=($final-$inc))){
        $cont+=$inc;
        echo $cont." ";
    }    
?>