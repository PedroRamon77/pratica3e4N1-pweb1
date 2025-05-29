<?php
/*
18. Preferˆencia de cor: Um site permite que o usu´ario escolha uma cor de tema.
Se a cor escolhida for "Vermelho", "Azul" ou "Verde", exiba uma mensagem de
confirma¸c˜ao. Caso contr´ario, sugira uma cor padr˜ao.
*/
$cor = "Vermelho";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Questão 18</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<h1>Preferência de Cor</h1>

<p> Cor de Tema:
    <?php
        if ($cor == "Vermelho" || $cor == "Azul" || $cor == "Verde") {
            echo $cor;
        } else {
            echo "Cor não disponível. Usando cor padrão.";
        }
    ?>
</p>

<br>
<a href="../index.php">Voltar para as Questões</a>

</body>
</html>
