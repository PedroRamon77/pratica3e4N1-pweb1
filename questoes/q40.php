<?php
/*
. Log de eventos: Criar uma fun¸c˜ao que registre uma mensagem de evento junto com
o timestamp atual, ´util para depura¸c˜ao ou hist´orico de a¸c˜oes. Veja a documenta¸c˜ao
https://www.php.net/manual/pt BR/function.time.php
*/
function registrarLog($mensagem) {
    $dataHora = date('d/m/Y H:i:s', time());
    return "[$dataHora] - $mensagem";
}

$log1 = registrarLog("Início do processo");
$log2 = registrarLog("Conexão com o banco de dados estabelecida");
$log3 = registrarLog("Processamento concluído");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Log de Eventos</title>
</head>
<body>

<h1>Log de Eventos</h1>

<p><?php echo $log1; ?></p>
<p><?php echo $log2; ?></p>
<p><?php echo $log3; ?></p>

<br>
<a href="../index.php">Voltar para o Menu</a>

</body>
</html>
