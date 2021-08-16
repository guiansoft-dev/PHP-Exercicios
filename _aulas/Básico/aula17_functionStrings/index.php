<?php

$nome = "Paulo Henrique";
$nomeMin = strtolower($nome);
$nomeMai = strtoupper($nome);
$nome2 = ucfirst($nomeMin);
$nome3 = ucwords($nomeMin);
$nomeReverso = strrev($nome);

echo "<h1>Meu nome é $nomeMin/$nomeMai/$nome2/$nome3/$nomeReverso</h1>";

$frase = "Estou estudando PHP no curso de PHP";
$pos = strpos($frase, "PHP");
$posI = stripos($frase, "php");
$contaString = substr_count($frase, "PHP");

echo "<h2>$frase</h2>";
echo "<h2>A string PHP tá na posição $pos</h2>";
echo "<h2>A string PHP tá na posição $posI</h2>";
echo "<h2>A string PHP aparece $contaString vezes</h2>";
