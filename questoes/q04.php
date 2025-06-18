<form method="post">
    <h2>Sorteio de Números e Contagem de Primos</h2>
    <button type="submit">Sortear</button>
</form>

<?php
function isPrimo($num) {
    if ($num <= 1) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numeros = [];
    $quantPrimos = 0;

    for ($i = 0; $i < 10; $i++) {
        $n = rand(1, 60);
        $numeros[] = $n;
        if (isPrimo($n)) $quantPrimos++;
    }

    echo "<h3>Números Sorteados:</h3>" . implode(", ", $numeros);
    echo "<p>Quantidade de números primos: $quantPrimos</p>";
}
?>