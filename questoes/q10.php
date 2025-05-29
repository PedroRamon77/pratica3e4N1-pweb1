<?php
/*
10. Contagem de palavras de resumo:
• Crie uma vari ́avel com um paragrafo. Para o IFCE, o resumo deve conter entre
350 e 500 palavras.
• Conte os caracteres com funcao nativa.
• Use a documenta ̧cao oficial:
https : //www.php.net/manual/ptBR/language.types.string.php
*/

$resumo = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi diam est, faucibus vitae ex nec, egestas ornare arcu. Proin facilisis efficitur dui, ac eleifend risus hendrerit id. Ut faucibus fermentum condimentum. Nam ac odio tempus, mattis tellus eget, facilisis odio. Nulla a semper arcu. Nulla facilisi. Proin lobortis blandit pharetra.";

$quantidadeCaracteres = strlen($resumo);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Questão 10</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<h1>Contagem de Caracteres</h1>

<p>Resumo: <?php echo $resumo; ?></p>
<p>Quantidade de caracteres: <?php echo $quantidadeCaracteres; ?></p>

<br>
<a href="../index.php">Voltar para as Questões</a>

</body>
</html>
