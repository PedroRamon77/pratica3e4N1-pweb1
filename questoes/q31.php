<?php
/*
31. Mensagem de boas-vindas: Criar uma fun¸c˜ao que exiba uma mensagem de boasvindas padr˜ao em v´arias p´aginas de um site, sem precisar de informa¸c˜oes adicionais.
*/
function mensagemBoasVindas() {
    echo "<h2>Bem-vindo(a) ao nosso site! Esperamos que você tenha uma ótima navegação.</h2>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Questão 31 - Boas Vindas</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<h1>Mensagem de Boas-Vindas</h1>
<?php mensagemBoasVindas(); ?>

<br>
<a href="../index.php">Voltar para as Questões</a>


</body>
</html>
