<?php
/*
32. Calculadora b´asica: Desenvolver uma fun¸c˜ao que realize a soma de dois n´umeros
quaisquer e exiba o resultado. Quer desafio? Exiba usando um layout destes:
https://www.cssacademy.com/blog/create-a-calculator-in-html-and-css (n˜ao precisa
do JS, isso ´e outra disciplina).
*/
function somar($a, $b) {
    return $a + $b;
}

$num1 = 15;
$num2 = 30;

$resultado = somar($num1, $num2);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora Básica</title>
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }

        .calculadora {
            width: 350px;
            background-color: #222;
            padding: 20px;
            margin: 100px auto;
            border-radius: 15px;
            box-shadow: 0 8px 15px rgba(0,0,0,0.3);
            color: white;
            text-align: center;
        }

        .calculadora h1 {
            margin-bottom: 20px;
            color: #ff9500;
        }

        .display {
            background-color:  rgba(255,255,255,0.1);
            border-radius: 15px;
            padding: 15px 20px;
            font-size: 1.4rem;
            font-weight: 600;
            letter-spacing: 1.5px;
            color: #fff;
            box-shadow:
                0 4px 10px rgba(0,0,0,0.25),
                inset 0 2px 8px rgba(255,255,255,0.1);
            user-select: none;
        }

        .resultado {
            background-color: #444;
            padding: 15px;
            border-radius: 8px;
            font-size: 1.2em;
            margin-top: 20px;
        }

        .numeros {
            background-color: #333;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            padding: 10px 15px;
            background-color: white;
            color: black;
            border: 1px solid gray;
            border-radius: 10px;
            transition: background-color 0.3s, color 0.3s;
        }
        a:hover {
            background-color: red;
            color: white;
        }
    </style>
</head>
<body>

<div class="calculadora">
    <h1>Calculadora Básica</h1>

    <div class="numeros">
        Número 1: <strong><?php echo $num1; ?></strong><br>
        Número 2: <strong><?php echo $num2; ?></strong>
    </div>

    <div class="display">
        Soma: <?php echo $num1; ?> + <?php echo $num2; ?>
    </div>

    <div class="resultado">
        Resultado: <strong><?php echo $resultado; ?></strong>
    </div>

    <a href="../index.php">Voltar para as Questões</a>
</div>

</body>
</html>