<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Menu de Questões</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Questões</h1>

<div class="container">
    <div class="grid">
        <?php
            for ($i = 1; $i <= 50; $i++) {
                echo "<a href='questoes/q$i.php'>Questão $i</a>";
            }
        ?>
    </div>
</div>

</body>
</html>
