<?php
function calcularJurosSimples($capital, $taxa, $tempo) 
{
    $juros = $capital * ($taxa / 100) * $tempo;
    return $juros;
}
?>