<?php

    function concatena($srt1, $str2){
        return $srt1.' '.$str2;
    }


    function soma_mult($x,$y=0){ //quando nada for atribuido no y ele vai ter seu valor = 0
        return ($x+$y)*2;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php
        $resultado = concatena('joao','feijao');
        echo $resultado;

        echo('<br>');

        echo concatena('maria','do rosario');

        echo('<br>');
        echo("o resultado da soma de X e Y e multiplicação por 2 é: ");
        echo soma_mult(5,8);
    ?>
    
</body>
</html>