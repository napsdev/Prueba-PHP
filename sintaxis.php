<?php // Declara que es codigo PHP.

//Comentarios en PHP
#Comentarios en PHP
/*
Comentarios en PHP
*/

//Variables y constantes en PHP
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

// Aunque 25 sea un string el resultado será 30 dado que PHP en tiempo de ejecución lo convierte sin modificarlo.
print_r("25"+5);
echo "<br>";




//Siempre acabar con ; al final de cada linea de codigo PHP.
echo "Hola mundo! \n"; 
// \n es un salto de linea.
// Para navegador es <br>

echo "<br Hola mundo! <br> Soy Jaime!";

//Concatenar en php es con .
$name = "Napa";
$lastname = "Sham";

echo "<br> Mas conocido como: <br>" . $name . "<br>" . $lastname;

//Concatenar usando las variables dentro de las comillas dobles
echo "<br> $name!!! <br> $lastname!!!";

//Operaciones matematicas
echo "<br> Numerito: " . (2 + 2) * 2;

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