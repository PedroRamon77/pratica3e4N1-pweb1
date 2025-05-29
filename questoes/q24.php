<?php
/*
24. Processamento Limitado: Processar uma lista de 100 itens, mas interromper o
processamento assim que 50 itens forem processados para evitar sobrecarga.
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Questão 24</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<h1>Processamento Limitado</h1>

<?php 
    for ($i = 1; $i <= 100; $i++) {
        echo "Processando item $i...<br>";
        if ($i == 50) {
            echo "Limite de processamento atingido (50 itens)";
            break;
        }
    }
?>

<br>
<a href="../index.php">Voltar para as Questões</a>

</body>
</html>
