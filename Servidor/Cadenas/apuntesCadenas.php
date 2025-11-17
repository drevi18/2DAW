<?php

////////////////////////////////////////////////////////////
// APUNTES COMPLETOS DE CADENAS (PHP / UTF-8)
////////////////////////////////////////////////////////////


// 1. LONGITUD DE CADENAS

// Devuelve longitud en bytes
strlen($s);

// Devuelve longitud real en caracteres (recomendado para acentos)
mb_strlen($s, 'UTF-8');


// 2. MAYÚSCULAS Y MINÚSCULAS

strtolower($s);
strtoupper($s);

mb_strtolower($s, 'UTF-8');
mb_strtoupper($s, 'UTF-8');


// 3. SUBCADENAS Y ACCESO POR ÍNDICE

substr($s, $start, $len);
mb_substr($s, $start, $len, 'UTF-8');

// Obtener un carácter concreto
$c = mb_substr($s, $i, 1, 'UTF-8');


// 4. BÚSQUEDA Y CONTEO

strpos($s, $needle);
strrpos($s, $needle);

substr_count($s, $needle);

mb_strpos($s, $needle, 0, 'UTF-8');


// 5. REEMPLAZOS Y LIMPIEZA

str_replace($buscar, $reemplazar, $s);
str_ireplace($buscar, $reemplazar, $s);

trim($s);
ltrim($s);
rtrim($s);

// Convertir espacio normal en espacio visual HTML
str_replace(' ', '&nbsp;', $linea);


// 6. DIVIDIR Y UNIR CADENAS

explode($delim, $s);
implode($glue, $array);

// Dividir en caracteres (UTF-8)
preg_split('//u', $s, -1, PREG_SPLIT_NO_EMPTY);

// Dividir palabras
str_word_count($s, 1);

// Dividir palabras de forma más segura
preg_split('/\s+/', trim($s));


// 7. INFORMACIÓN SOBRE PALABRAS

str_word_count($s);
$palabras = str_word_count($s, 1);


// 8. REPETICIÓN, PADDING E INVERSIÓN

str_repeat($c, $n);
str_pad($s, $len, $relleno, STR_PAD_RIGHT);
strrev($s); // No seguro con acentos

// Inversión segura UTF-8
$chars = preg_split('//u', $s, -1, PREG_SPLIT_NO_EMPTY);
$invertida = implode('', array_reverse($chars));


// 9. CONTEO DE VOCALES

$s = mb_strtolower($s, 'UTF-8');
$vocales = ['a','e','i','o','u','á','é','í','ó','ú'];
$cont = [];

foreach ($vocales as $v) {
    $cont[$v] = substr_count($s, $v);
}

$total_vocales = array_sum($cont);


// 10. SEPARAR MILLARES

// Forma automática
number_format($num, 0, ',', '.');

// Sin number_format
$s = strrev($num);
$trozos = str_split($s, 3);
$s = implode('.', $trozos);
$resultado = strrev($s);


// 11. VALIDACIÓN DE CONTRASEÑAS

$len = mb_strlen($pass, 'UTF-8'); // longitud

preg_match('/[aeiouáéíóú]/i', $pass); // tiene vocal

preg_match('/[aeiouáéíóú]{3}/i', $pass); // 3 vocales seguidas

preg_match('/[^aeiouáéíóú\W\d_]{3}/i', $pass); // 3 consonantes seguidas

preg_match('/(.)\1/i', $pass); // dos letras iguales seguidas

strpos($pass, ' ') === false; // sin espacios


// 12. CIFRADO CÉSAR CON ROTACIÓN

// Alfabeto de 21 letras según profesor (ejemplo, sustitúyelo por el real)
$alf = "AB C D E F G H I K L M N O P Q R S T V"; 
$len = mb_strlen($alf, 'UTF-8');

// Obtener índice
$pos = mb_strpos($alf, $c, 0, 'UTF-8');

// Cifrar
$nueva = mb_substr($alf, ($pos + $k) % $len, 1, 'UTF-8');

// Descifrar
$nueva = mb_substr($alf, ($pos - $k + $len) % $len, 1, 'UTF-8');


// 13. FUNCIONES ÚTILES ADICIONALES

htmlspecialchars($s);
nl2br($s);
preg_match($pattern, $s);
preg_replace($pattern, $reemplazo, $s);
ucfirst($s);
ucwords($s);

// Capitalización segura UTF-8
$prim = mb_strtoupper(mb_substr($w,0,1,'UTF-8'));
$rest = mb_substr($w,1,null,'UTF-8');
$w = $prim . $rest;

////////////////////////////////////////////////////////////
// EJERCICIOS PROPUESTOS (10 EJERCICIOS)
////////////////////////////////////////////////////////////


// EJERCICIO 1 – Formato Kani (alternar mayúscula/minúscula)
/*
Crear una función que reciba una frase en minúsculas y devuelva:
Ej: "hola mundo" -> "HoLa MuNdO"
Usar: mb_substr, mb_strlen, mb_strtolower, mb_strtoupper
*/


// EJERCICIO 2 – Mayúsculas en posiciones impares
/*
Convertir a mayúsculas solo las posiciones 1,3,5,... del texto.
*/


// EJERCICIO 3 – Tamanho total, nº de palabras y tamaño de cada palabra
/*
Usar: str_word_count($s,1), mb_strlen
Salida:
Total de letras: X
Palabras: Y
Palabra 1: tamaño Z
...
*/


// EJERCICIO 4 – Contar vocales (dos métodos)
/*
a) Recorrer carácter por carácter
b) Usar substr_count con cada vocal
*/


// EJERCICIO 5 – Retrato robot a partir de la cadena codificada
/*
$robot = "1 5W;1 1|2 1x1 1x2 1|;1@4 1U4 1@;1 1|2 3=2 1|;2 1\\5_1/";
Interpretar cada nX como repetir X n veces.
Usar explode(';'), preg_match_all y str_repeat.
*/


// EJERCICIO 6 – Separar millares sin usar number_format
/*
1123456789 → 1.123.456.789
Usar: strrev, str_split, implode
*/


// EJERCICIO 7 – Validar contraseña según reglas del profesor
/*
Reglas:
- Entre 6 y 10 caracteres
- Al menos una vocal
- No 3 vocales seguidas
- No 3 consonantes seguidas
- No dos iguales seguidas salvo ee y oo
- No espacios
*/


// EJERCICIO 8 – Cifrado César con alfabeto de 21 letras
/*
Implementar cifrar($txt, $k) y descifrar($txt, $k)
Usar: mb_strpos, mb_substr, módulo
*/


// EJERCICIO 9 – Normalizar texto
/*
- Quitar espacios repetidos
- Primera letra de cada palabra en mayúscula (UTF-8)
- Eliminar caracteres no alfabéticos excepto puntuación
*/


// EJERCICIO 10 – Convertir palabra en palíndromo agregando letras al final
/*
Ej: "race" → "racecar"
Probar sufijos y comprobar palíndromo con inversión UTF-8
*/


?>
