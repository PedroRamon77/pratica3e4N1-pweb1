<?php
/*
17. Alerta clim´atico: Com base na temperatura atual, emita alertas:
• Abaixo de 0◦C: "Alerta de Gelo!"
• Entre 0◦C e 15◦C: "Clima Ameno"
• Entre 15◦C e 25◦C: "Clima Agrad´avel"
• Acima de 25◦C: "Aten¸c~ao: Calor Extremo!"
*/
$temperatura = 35;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Questão 17</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<h1>Alerta Climático</h1>

<p> Temperatura:
    <?php
        if ($temperatura < 0) {
            echo "Alerta de Gelo!";
        } elseif ($temperatura >= 0 && $temperatura < 15) {
            echo "Clima Ameno";
        } elseif ($temperatura >= 15 && $temperatura <= 25) {
            echo "Clima Agradável";
        } else {
            echo "Atenção: Calor Extremo!";
        }
    ?>
</p>

<br>
<a href="../index.php">Voltar para as Questões</a>

</body>
</html>
