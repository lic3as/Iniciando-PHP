<?php
//saída
//todas as tags do html, css, js rodam no php

echo "<h1> Hello World</h1>";
echo " se você tá lendo isso,";
echo "</br>";
echo "parabéns!";
echo '</br>vc sabe ler.';
print "alice é linda";

$nomeDeAlice = 'Alice';

echo "</br>Nome: $nomeDeAlice";
echo "</br>Nome: " . $nomeDeAlice;

echo '<div id="box"> oi meu chapa </div>';

$a = 3;
$b = 2;
$c = $a + $b;
echo $c;

//print tem algumas limitações por isso usaremos o echo
//ele consegue imprimir com aspas simples e duplas 
//pra criar variaveis é $ mas não pode iniciar com numeros nem caracteres especiais/acentos
//coloca a primeira palavra em caixa baixa e nas proximas a caixa alta ou com um _
//pra concatenar texto com variavel pode botar junto se for aspas duplas ou usar . se for aspas simples/duplas
//eu uso aspas simples se no meu html já tiver aspas duplas ou vice versa

?>