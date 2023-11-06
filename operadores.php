<?php

//Operadores lógicos
// &&, AND
// ||, OR
// !, NOT

//5 es menor que 10, por lo tanto es verdadero, y 5 es mayor que 1, por lo tanto es verdadero.
var_dump(5 < 10 && 5 > 1); //true
echo "<br>";
//5 es menor que 10, por lo tanto es verdadero, pero 5 no es mayor que 10, por lo tanto es falso.
var_dump(5 < 10 && 5 > 10); //false
echo "<br>";
//5 es menor que 10, por lo tanto es verdadero, pero 5 no es mayor que 10, por lo tanto es verdadero.
var_dump(5 < 10 || 5 > 10); //true
echo "<br>";
//5 es menor que 10, pero 5 no es mayor que 1, por lo tanto es verdadero.
var_dump(5 < 10 || 5 > 1); //true
echo "<br>";
//5 es menor que 10, por lo tanto es verdadero, pero al negarlo con ! se convierte en falso.
var_dump(!(5 < 10)); //false
echo "<br>";
//5 no es mayor que 10, por lo tanto es falso, pero al negarlo con ! se convierte en verdadero.
var_dump(!(5 > 10)); //true
echo "<br>";

//Operadores de comparación
// ==, Igualdad
// ===, Identico
// !=, Diferente
// !==, No identico
// <, Menor que
// >, Mayor que


//Operadores de incremento y decremento
$numero_1 = 5;
$numero_2 = 10;
$numero_3 = 15;


$numero_1++;
$numero_2--;
$numero_3 += 5;

echo $numero_1;
echo "<br>";
echo $numero_2;
echo "<br>";
echo $numero_3;


?>


