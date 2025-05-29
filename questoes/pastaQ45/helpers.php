<?php

function calcularMedia(array $notas): float {
    $total = array_sum($notas);
    $quantidade = count($notas);
    return $quantidade > 0 ? $total / $quantidade : 0;
}

function formatarPreco(float $valor): string {
    return 'R$ ' . number_format($valor, 2, ',', '.');
}

?>