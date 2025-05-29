<?php
/*
30. Tabelas de referˆencia: Gerar e exibir as tabuadas de 1 a 5 para uma consulta
r´apida. Fa¸ca um HTML e CSS bonitinho.
*/
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Questão 30 - Tabuada</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        .tabuada {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin: 0 auto;
            width: 80%;
        }
        .card {
            background-color: white;
            border: 1px solid gray;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 2px 2px 8px rgba(0,0,0,0.1);
        }
        .card h2 {
            text-align: center;
            color: rgb(0, 0, 0);
        }
        .card p {
            text-align: center;
            margin: 5px 0;
            font-weight: bold;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            padding: 10px 15px;
            background-color: white;
            color: black;
            border: 1px solid gray;
            border-radius: 10px;
        }
        a:hover {
            background-color: red;
            color: white;
        }
    </style>
</head>
<body>

<h1>Tabuada de 1 a 5</h1>

<div class="tabuada">
<?php
for ($i = 1; $i <= 5; $i++) {
    echo "<div class='card'>";
    echo "<h2>Tabuada do $i</h2>";
    for ($j = 1; $j <= 10; $j++) {
        $resultado = $i * $j;
        echo "<p>$i x $j = $resultado</p>";
    }
    echo "</div>";
}
?>
</div>

<br>
<div style="text-align: center;">
    <a href="../index.php">Voltar para as Questões</a>
</div>

</body>
</html>
