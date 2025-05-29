<?php
/*
15. Escolha de bebida: Um menu de cafeteria oferece op¸c˜oes de bebidas. Dada uma
vari´avel com o nome de uma bebida ("Caf´e", "Ch´a", "Suco"), exiba uma mensagem
como "Voc^e escolheu [Bebida]". Se a bebida n˜ao estiver no menu, exiba "Bebida
n~ao dispon´ıvel".
*/
$bebida = "Café";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Questão 15</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<h1>Escolha de Bebida</h1>

<p> 
    <?php
        switch ($bebida) {
            case "Café":
            case "Chá":
            case "Suco":
                echo "Você escolheu $bebida";
                break;
            default:
                echo "Bebida não disponível";
        }
    ?>
</p>

<br>
<a href="../index.php">Voltar para as Questões</a>

</body>
</html>
