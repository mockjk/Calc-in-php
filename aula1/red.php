<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Calc</title>
</head>
<body>
    <form action="calc2.php" method="post"> 
            <input type="number" name="n1">
            <input type="number" name="n2">
            <select name="operacao"> <!-- Seleção das operações matemáticas -->
                <option>+</option>
                <option>-</option>
                <option>*</option>
                <option>/</option>
                <option>√</option>   
            </select>
            <button>=</button>
    </form>

<?php
    
    if(isset($_POST['soma'])){
        $operador = $_POST['soma'];
        echo $operador;
    }
    else if(isset($_POST['sub'])){
        $operador = $_POST['sub'];
        echo $operador;
    }
    else if(isset($_POST['mul'])){
        $operador = $_POST['mul'];
        echo $operador;
    }
    else if(isset($_POST['div'])){
        $operador = $_POST['div'];
        if($operador != '∄'){
            echo number_format($operador,2);
        }
        else{
            echo "∄";
        }
    }
    else if(isset($_POST['raiz1']) && isset($_POST['2raiz2'])){
        $operador = $_POST['operacao'];
        echo "Primeira Raiz -->".number_format($operador['raiz'],2)."<br>"."Segunda Raiz -->".number_format($operador['2raiz'],2);
    }

    
    
?>



</body>
</html>