<?php
/*
19. C´alculo de sal´ario: Uma folha de pagamento precisa determinar o sal´ario base de
um funcion´ario. Com base no cargo ("Desenvolvedor", "Designer", "Gerente"),
defina e exiba o sal´ario correspondente
*/
$cargo = "Designer";
$salario = 0;

switch ($cargo) {
    case "Desenvolvedor":
        $salario = 5000;
        break;
    case "Designer":
        $salario = 4000;
        break;
    case "Gerente":
        $salario = 8000;
        break;
    default:
        $salario = 0;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Questão 19</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<h1>Cálculo de Salário</h1>

<p>
    Cargo: <?php echo $cargo; ?><br>
    Salário: R$ <?php echo number_format($salario, 2, ",", "."); ?>
</p>

<br>
<a href="../index.php">Voltar para as Questões</a>

</body>
</html>
