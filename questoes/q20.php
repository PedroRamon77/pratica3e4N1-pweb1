<?php
/*
20. Verifica¸c˜ao de acesso (Login): Um sistema de login precisa verificar se um
usu´ario est´a ativo e se possui permiss˜oes de administrador. Apenas se ambas as
condi¸c˜oes forem verdadeiras, conceda o acesso total. N˜ao implemente um sistema
de login, apenas simule.
*/
$usuarioAtivo = true;
$usuarioAdmin = true;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Questão 20</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<h1>Verificação de Acesso</h1>

<p> Seu acesso é: 
    <?php
        if ($usuarioAtivo && $usuarioAdmin) {
            echo "Total";
        } else {
            echo "Restrito";
        }
    ?>
</p>

<br>
<a href="../index.php">Voltar para as Questões</a>

</body>
</html>
