<?php
/*
12. Classifica ̧c ̃ao de temperatura: Um sensor meteorol ́ogico registra a temperatura.
Classifique e exiba se a temperatura  ́e "Positiva", "Negativa" ou "Zero".
*/
$sensor = 30;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Questão 12</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<h1>Classificacao de temperatura:</h1>

<p> Temperatura:
    <?php
        if ($sensor > 0) {
            echo "Positiva";
        } elseif ($sensor < 0) {
            echo "Negativa";
        } else {
            echo "Zero";
        }
    ?>
</p>

<br>
<a href="../index.php">Voltar para as Questões</a>

</body>
</html>
