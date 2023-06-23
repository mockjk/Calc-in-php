<?php 

//Pegar os valores do Form
$num1 = $_GET['n1'];
$num2 = $_GET['n2'];
$op = $_GET['operacao'];



    switch ($op) { //switch para definir o valor da variável "$op"
        case "+":
            $soma = $num1+$num2;
            echo $soma;
            header("Location: calculadora.php?soma=$soma"); //Define a URL da página como "calculadora.php?soma=$soma" //Complementa o link, adiciona mais contéudo ao URL retornando à página
        break;
        
        case "-": 
            $sub = $num1-$num2;
            echo $sub;
            header("Location: calculadora.php?sub=$sub");
            break;
        
        case "*":
            $mul = $num1*$num2;
            echo $mul;
            header("Location: calculadora.php?mul=$mul");
            break;

        case "/":
            if($num2 != 0){
                $div = $num1/$num2;
                echo $div;
                header("Location: calculadora.php?div=$div");
                break;   
            }
            else{
                $div = "∄";
                echo "∄";
                header("Location: calculadora.php?div=$div");
                break;
            }

        case "√":
            $raiz1 = sqrt($num1);
            $raiz2 = sqrt($num2);

            echo "Primeira Raiz -->".$raiz1."<br>"."Segunda Raiz -->".$raiz2;
            header("Location: calculadora.php?raiz=$raiz1&2raiz=$raiz2");
            break;

    }


?>