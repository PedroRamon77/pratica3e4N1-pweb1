<?php
/*
25. Exceção em relatório:
Exiba uma tabela com número de matrícula, nome completo e nota de PWEB1 de 10 alunos.
Simule os valores, não use valores reais.
*/


$alunos = [
    ['matricula' => '20221035050', 'nome' => 'Rodrigo Garro', 'nota' => 8.5],
    ['matricula' => '20221035060', 'nome' => 'Memphis Depay', 'nota' => 7.0],
    ['matricula' => '20221035080', 'nome' => 'Fagner Lemos', 'nota' => 9.2],
    ['matricula' => '20221035120', 'nome' => 'Yuri Alberto', 'nota' => 6.8],
    ['matricula' => '20221035250', 'nome' => 'Cassio Alves', 'nota' => 5.9],
    ['matricula' => '20221035001', 'nome' => 'Fabio Santos', 'nota' => 7.4],
    ['matricula' => '20221035124', 'nome' => 'Gabriel Magalhaes', 'nota' => 8.1],
    ['matricula' => '20221035045', 'nome' => 'Socrates Paula', 'nota' => 9.0],
    ['matricula' => '20221035010', 'nome' => 'Roberto Rivellino', 'nota' => 6.5],
    ['matricula' => '20221035053', 'nome' => 'Marcelinho Carioca', 'nota' => 7.7],
];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Questão 25 - Relatório de Alunos</title>
    <style>
        table {
            width: 60%;
            margin: 2rem auto;
            font-family: Arial;
        }
        th, td {
            border: 1px solid gray;
            padding: 0.5rem 1rem;
            text-align: center;
        }
        th {
            background-color: green;
            color: white;
        }
        caption {
            margin-bottom: 1rem;
            font-weight: bold;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>

<h1 style="text-align:center;">Excecao em relatorio:</h1>

<table>
    <caption>Lista de 10 alunos</caption>
    <thead>
        <tr>
            <th>Matrícula</th>
            <th>Nome Completo</th>
            <th>Nota PWEB1</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($alunos as $aluno): ?>
        <tr>
            <td><?php echo htmlspecialchars($aluno['matricula']); ?></td>
            <td><?php echo htmlspecialchars($aluno['nome']); ?></td>
            <td><?php echo number_format($aluno['nota'], 1); ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<br>
<div style="text-align:center;">
    <a href="../index.php">Voltar para as Questões</a>
</div>

</body>
</html>
