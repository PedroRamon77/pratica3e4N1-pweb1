<?php
/*
4. Status de pedido:
• Crie uma variável booleana para o status de um pedido.
• Exiba o status em forma compreensível usando condicional.
*/
$pedidoFinalizado = true;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Questão 4</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<h1>Status do Pedido</h1>

<p>O pedido está: 
    <?php
        if ($pedidoFinalizado) {
            echo "Finalizado";
        } else {
            echo "Em andamento";
        }
    ?>
</p>

<br>
<a href="../index.php">Voltar para as Questões</a>

</body>
</html>
