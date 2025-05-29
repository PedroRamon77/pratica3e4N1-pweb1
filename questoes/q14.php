<?php
/*
14. Agendamento semanal: Um aplicativo de agenda exibe compromissos. Dada
uma vari´avel num´erica representando o dia da semana (1 para Domingo, 2 para
Segunda, etc.), exiba o nome do dia correspondente.
*/
$dia = 5;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Questão 14</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<h1>Agendamento semanal</h1>

<p> Dia da Semana:
    <?php
        switch ($dia) {
            case 1: echo "Domingo"; break;
            case 2: echo "Segunda"; break;
            case 3: echo "Terça"; break;
            case 4: echo "Quarta"; break;
            case 5: echo "Quinta"; break;
            case 6: echo "Sexta"; break;
            case 7: echo "Sábado"; break;
            default: echo "Dia inválido";
        }
    ?>
</p>

<br>
<a href="../index.php">Voltar para as Questões</a>

</body>
</html>
