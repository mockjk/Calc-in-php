<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"> <!-- linkando a página ao css -->
    <link rel="icon" type="image/png" href="img/calculadora.png"/> <!-- definição de icone -->
    <title>Math Calc</title>
</head>
<body>

    <div id="top"> <!-- div que contém a função de exibir uma imagem e um texto na página  -->
        <img src="img/calculadora.png" height="175px" width="175px">
        Math Calc
    </div>
    
    <div id="caixa">
        
        <form action="calc.php" method="get">  <!-- Form serve para criar um formulário, action é o caminho method é o método a ser utilizado-->
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

        <h3> <!-- tag utilizada como um quadrante para que as seguintes tags inseridas dentro dela possam receber padronizações que devem ser seguidas -->
            <?php 
                if(isset($_GET['soma'])){  //utilização de condições para que satisfaça o valor da variável "$operador".
                    $operador = $_GET['soma'];
                    echo $operador;
                }
                else if(isset($_GET['sub'])){
                    $operador = $_GET['sub'];
                    echo $operador;
                }
                else if(isset($_GET['mul'])){
                    $operador = $_GET['mul'];
                    echo $operador;
                }
                else if(isset($_GET['div'])){
                    $operador = $_GET['div'];
                    if($operador != '∄'){
                        echo number_format($operador,2);
                    }
                    else{
                        echo "∄";
                    }
                
                    
                }
                else if(isset($_GET['raiz']) && isset($_GET['2raiz'])){
                    $operador = $_GET;
                    echo "Primeira Raiz -->".number_format($operador['raiz'],2)."<br>"."Segunda Raiz -->".number_format($operador['2raiz'],2);
                }
                
            ?>
        </h3> 

    </div>
    
</body>
</html>