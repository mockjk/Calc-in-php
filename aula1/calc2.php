<?php

$num1 = $_POST['n1'];
$num2 = $_POST['n2'];
$op = $_POST['operacao'];

switch ($op) {
    case "+":
        $soma = $num1+$num2;
        header("Location: red.php");
        echo $soma;
        break;

    case "-": 
        $sub = $num1-$num2;
        echo $sub;
        header("Location: red.php");
        break;
    
    case "*":
        $mul = $num1*$num2;
        echo $mul;
        header("Location: red.php");
        break;

    case "/":
        if($num2 != 0){
            $div = $num1/$num2;
            echo $div;
            header("Location: red.php");
            break;   
        }
        else{
            $div = "∄";
            echo '∄';
            header("Location: red.php");
            break;
        }

    case "√":
        $raiz1 = sqrt($num1);
        $raiz2 = sqrt($num2);
        header("Location: red.php");
        break;

}


?>