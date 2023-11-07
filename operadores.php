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






//Operadores aritméticos
// +, Suma
// -, Resta
// *, Multiplicación
// /, División
// %, Modulo (Residuo de la división)
// **, Exponencial

$age = 25;
$age = $age + 5;
echo $age;
echo "<br>";

$age = 25;
$age = $age - 5;
echo $age;
echo "<br>";

$age = 25;
$age = $age * 5;
echo $age;
echo "<br>";

$age = 25;
$age = $age / 5;
echo $age;
echo "<br>";

$age = 25;
$age = $age % 5; //El residuo de la división
echo $age;
echo "<br>";

$age = 25;
$age = $age ** 5; //El residuo de la división
echo $age;
echo "<br>";


//Operadores de asignación
// +=, Suma en asignación
// -=, Resta en asignación
// *=, Multiplicación en asignación
// /=, División en asignación
// %=, Modulo en asignación

$age = 25;
$age += 5;
echo $age;
echo "<br>";

$age = 25;
$age -= 5;
echo $age;
echo "<br>";

$age = 25;
$age *= 5;
echo $age;
echo "<br>";

$age = 25;
$age /= 5;
echo $age;
echo "<br>";    

$age = 25;
$age %= 5; //El residuo de la división
echo $age;
echo "<br>";

//Operadores de cadenas de caracteres
// .=, Concatenación en asignación

$name = "Napa";
$name .= "Sham";
echo $name;
echo "<br>";





?>


