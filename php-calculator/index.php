<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Calculadora - Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form action="action.php">
        <input type="text" name="num1" placeholder="Number 1">
        <input type="text" name="num2" placeholder="Number 2">
        <select name="operator">
            <option>Nada</option>
            <option>Adicionar</option>
            <option>Subtrair</option>
            <option>Multiplicar</option>
            <option>Dividir</option>
        </select>
        <br>
        <button name="submit" value="submit" type="submit">Calcular</button>
    </form>
    <p>A resposta é::</p>


    <?php
    if(isset($_GET['submit'])) {
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operator'];
        switch($operator) {
            case "Nada":
                echo "Você precisa selecionar um operador.";
            break;
            case "Adicionar":
                echo $result1 + $result2 ;
            break;
            case "Subtrair":
                echo $result1 - $result2;
            break;
            case "Multiplicar":
                echo $result1 * $result2;
            break;
            case "Dividir":
                echo $result1 / $result2;
            break;


        }

    }
    ?>

</body>
</html>