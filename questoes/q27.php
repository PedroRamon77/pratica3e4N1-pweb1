<?php
/*
27. Listagem de participantes: Exibir todos os nomes de uma lista de participantes
para um evento.
*/
$participantes = [
    "Cristiano","Ronaldo","Messi","Salah","Marta","Pelé","Maradona","Zico","Neto","Romario"
];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Questão 27 - Listagem de Participantes</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<h1>Lista de Participantes</h1>

<?php
    foreach ($participantes as $nome) {
        echo "$nome<br>";
    }
?>


<br>
<a href="../index.php">Voltar para as Questões</a>

</body>
</html>
