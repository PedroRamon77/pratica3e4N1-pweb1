<?php
/*
16. Cadastro de usu´ario: Ao preencher um cadastro, o usu´ario informa seu estado
civil com um c´odigo (´unica letra). Exiba uma descri¸c˜ao para "C" (Casado/a), "S"
(Solteiro/a), "D" (Divorciado/a) ou "O" (Outro).
*/
$estadoCivil = "S";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Questão 16</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<h1>Cadastro de usuario</h1>

<p> Estado Civil:
    <?php
        switch (strtoupper($estadoCivil)) {
            case "C": echo "Casado(a)"; break;
            case "S": echo "Solteiro(a)"; break;
            case "D": echo "Divorciado(a)"; break;
            case "O": echo "Outro"; break;
            default: echo "Código inválido";
        }
    ?>
</p>

<br>
<a href="../index.php">Voltar para as Questões</a>

</body>
</html>
