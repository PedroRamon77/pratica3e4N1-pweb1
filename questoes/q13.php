<?php
/*
13. Sistema de avalia¸c˜ao: Com as duas notas de um aluno, calcule a m´edia. Exiba
"Aprovado" se a m´edia for ≥ 7, "Recupera¸c~ao" se for entre 5 e 6.9, e "Reprovado"
se for < 5.
*/
$nota1 = 8;
$nota2 = 5;
$media = ($nota1 + $nota2) / 2;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Questão 13</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<h1>Sistema de avaliacao</h1>

<p> Situacao:
    <?php
        if ($media >= 7) {
            echo "Aprovado";
        } elseif ($media >= 5) {
            echo "Recuperação";
        } else {
            echo "Reprovado";
        }
    ?>
</p>

<br>
<a href="../index.php">Voltar para as Questões</a>

</body>
</html>
