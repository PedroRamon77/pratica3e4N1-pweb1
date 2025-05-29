<?php
/*
11. Controle de acesso: Um sistema de portaria precisa verificar a idade de um
visitante. Se for maior ou igual a 18 anos, exiba "Acesso Liberado"; caso contr ́ario,
"Acesso Negado".
*/
$idade = 18;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Questão 11</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<h1>Sistema da Portaria</h1>

<p> Acesso:
    <?php
        if ($idade >= 18) {
            echo "Liberado";
        } else {
            echo "Negado";
        }
    ?>
</p>

<br>
<a href="../index.php">Voltar para as Questões</a>

</body>
</html>
