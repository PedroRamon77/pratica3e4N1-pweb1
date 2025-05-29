<?php
/*
37. Personaliza¸c˜ao de mensagem: Criar uma fun¸c˜ao que gere uma sauda¸c˜ao personalizada para um usu´ario, recebendo o nome dele como entrada.
*/

function saudacao($nome) {
    return "Olá, $nome! Seja muito bem-vindo(a)!";
}

$nomeUsuario = "Pedro";

$mensagem = saudacao($nomeUsuario);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Saudação Personalizada</title>
</head>
<body>

<h1>Saudação Personalizada</h1>

<?php echo $mensagem; ?>

<br>
<a href="../index.php">Voltar para as Questões</a>

</body>
</html>
