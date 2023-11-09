<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //tudo que esta dentro desta tag e PHP

        function somar($num1, $num2){
            $soma = $num1 + $num2;
            return "A soma de $num1 e $num2 é $soma";
        }//fim do metodo somar
            
        function subtrair($num1, $num2){
            $sub = $num1 - $num2;
            return "A subtração de $num1 e $num2 é $sub";
        }//fim do metodo subtrair

        function multiplicar($num1, $num2){
            $mult = $num1 * $num2;
            return "A multiplcação de $num1 e $num2 é $mult";
        }// fim do metodo multiplicar

        function dividir($num1, $num2) {
            if($num2 != 0){
                $div = "A Divisão de $num1 e $num2 é " . $num1 / $num2;
            } else{
                $div = "Impossivel dividir por zero";
            }//fim do if

            return $div;
        }// fim do metodop dividir
        
        function potencia($num1, $num2){
            return "A potencia de $num1 elevado a $num2 é: ".pow($num1,$num2);
        }

        function raiz($num1){
            return "A raiz de $num1 é: ".sqrt($num1);
        }

        function tabuada($num1, $num2){
           
            $result = "";

            for($i = 0; $i <= 10;$i++){
                $result .= "\n$i* $num1 = ".($i*$num1) ;
            }

            for($i = 0; $i <= 10;$i++){
                $result .= "\n$i* $num2 = ".($i*$num2) ;
            }
            return $result;
        }
        
    ?>
    
</body>
</html>