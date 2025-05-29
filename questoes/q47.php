<?php
/*
47. Arquivo de configura¸c˜oes: Garanta que as configura¸c˜oes do banco de dados
(host, usu´ario, senha) sejam carregadas apenas uma vez, mesmo que o c´odigo tente
inclu´ı-las m´ultiplas vezes.
*/

require_once 'pastaQ47/config.php';
require_once 'pastaQ47/config.php';

echo "Host: $host <br>";
echo "Usuário: $usuario <br>";
echo "Senha: $senha <br>";
echo "Banco: $banco <br>";

?>
<br>
<a href="../index.php">Voltar para o Menu</a>

