<?php // Declara que es codigo PHP.

//Comentarios en PHP
#Comentarios en PHP
/*
Comentarios en PHP
*/

//Siempre acabar con ; al final de cada linea de codigo PHP.
echo "Hola mundo! \n Soy Jaime! <br>"; 
// \n es un salto de linea.
// Para navegador es <br> (HTML)

//Variables y constantes en PHP//
//Variables-> $nombreVariable (Guardan cosas, cómo una caja)
$name = "Jaime";
$numero_1 = 2;

//Constantes-> define("NOMBRECONSTANTE", "Valor de la constante") (Guardan cosas, cómo una caja, pero no se pueden cambiar)
//Como buena practica las constantes se escriben en mayusculas.
define("NAME", "Jaime");
define("NUMERO_1", 2);

echo NAME. "<br>". $name;
echo "<br>";
echo NUMERO_1 + $numero_1;
echo "<br>";

//Operaciones matematicas
echo "<br> Numerito: " . (2 + 2) * 2;

/*
Tipos de datos en PHP:
Numéricos:
Integer: Número sin decimales.
Float: Número con punto flotante o punto decimal.
Double: Decimales con valores más precisos, con más decimales que float.
Cadenas ded caracteres:
Chart: Un solo una letra o un simbolo.
String: Una cadena de caracteres.
Booleanos:
Bool: Verdadero o falso.
Sin valor:
Null: No hay valor.
Undefined: Hay una variable pero no tiene ningun valor.
*/

// Aunque 25 sea un string el resultado será 30 dado que PHP en tiempo de ejecución lo convierte sin modificar la variable.
print_r("25"+5);
echo "<br>";

//Casting (forzar que un tipo de dato se convierta en otro)
$numero_1 = "25";
var_dump($numero_1);
echo "<br>";

//Casting de string a integer
$numero_1 = (int)$numero_1;
var_dump($numero_1);
echo "<br>";

echo $numero_1 + 5;
echo "<br>";

//Casting de dato a booleano (Cualquier valor que no sea 0, 0.0 o "" es true)
$numero_1 = (bool)$numero_1;
var_dump($numero_1);
echo "<br>";

//Concatenar en php con .
$name = "Napa";
$lastname = "Sham";

echo "<br> Mas conocido como: <br>" . $name . "<br>" . $lastname;

//Concatenar usando las variables dentro de las comillas dobles
echo "<br> $name!!! <br> $lastname!!!";


//Debugging básico*
$listnameandage = [
    'Jaime' => 25,
    'Napa' => 22,
    'Sham' => 21,
    'NapaSham' => 23,
];

echo "<br>";
//Brinda mas información sobre la variable.
var_dump($listnameandage);
echo "<br>";
//Brinda información sobre la variable.
print_r($listnameandage);
echo "<br>";


//Cierra el bloque de código PHP, si solo se usara codigo PHP no es necesario cerrarlo. 
?> 