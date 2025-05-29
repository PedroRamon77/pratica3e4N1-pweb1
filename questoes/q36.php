<?php
/*
36. Sistema de elegibilidade: Refatorar a l´ogica de verifica¸c˜ao de maioridade (exerc´ıcio
11) em uma fun¸c˜ao reutiliz´avel, que receba a idade e retorne o status de elegibilidade.
J´a fez a 11 usando fun¸c˜ao? Pois refa¸ca agora e fa¸ca melhor.
*/

function verificarElegibilidade($idade) {
    if ($idade >= 18) {
        return "Maior de idade - Elegível";
    } else {
        return "Menor de idade - Não elegível";
    }
}

$idade = 18;

$status = verificarElegibilidade($idade);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Elegibilidade</title>
</head>
<body>

<div class="container">
    <h1>Sistema de Elegibilidade</h1>

    <p>Idade informada: <?php echo $idade; ?> anos</p>

    <div class="resultado">
        <?php echo $status; ?>
    </div>

    <a href="../index.php">Voltar para as Questões</a>
</div>

</body>
</html>
