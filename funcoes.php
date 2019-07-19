<?php

    //1- Gerar um arquivo chamado funcoes.php:
    //A- Definir uma função maior() que receba 3 números e retorne o maior deles
    function maior($a,$b,$c){
        if($a > $b){
            if($a > $c){
                return $a;
            }
            else{
                return $c;
            }
        }
        else{
            if($b > $c){
                return $b;
            }
            else{
                return $c;
            }
        }
    }
    echo maior(20,35,40);
    echo ('<br>');
    //B- Definir uma função sequencia() que receba um parâmetro base, um
    //parâmetro limite, e retorne um array com a sequência de números a
    //partir do número base até o número limite
    function sequencia($base, $limite){
        $seq = [];
        for ($i=$base; $i <= $limite; $i++) { 
            $seq [] = $i;
        }
        return $seq;
    }
    echo('<pre>');
    var_dump (sequencia(1,5));
    echo('</pre>');
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
    
</body>
</html>