<?php

/* 
 *
 * Los operadores aritmeticos
 *  Suma, resta, multiplicación, división, módulo
 * 
 * Los operadores relacionales o de comparación
 *  Son utilizados en las estructuras de control condicionales o iterativas
 * 
 * Los operadores lógicos
 *  Son utilizados en las estructuras de control condicionales o iterativas y podemos combinarlos con nuestros operadores relacionales
 * 
 */

 // Los operadores aritmeticos

 # + (SUMA)
 # - (RESTA)
 # * (MULTIPLICACIÓN)
 # / (DIVISIÓN)

 $resultado = 4 + 5;
 echo $resultado . '<br>';

 $resultado = 5 - 3;
 echo $resultado . '<br>';

 $resultado = 5 * 3;
 echo $resultado . '<br>';

 $resultado = 5 / 2;
 echo $resultado . '<br>';

 // Operadores relacionales o de comparación

 # == (IGUALDAD)
 # === (IDENTICO)
 # != (DIFERENTE O DISTINTO QUE)
 # !== (COMPARA VALOR Y COMPARA TIPO DE DATO)
 # < (MENOR QUE)
 # > (MAYOR)
 # <= (MENOR O IGUAL QUE)
 # >= (MAYOR O IGUAL QUE)

 $resultado = 8 === '8'; // true
 var_dump($resultado);

 $resultado = 8 != 8; // true
 var_dump($resultado);

 // Los operadores lógicos

 # && (and)
 # || (or)
 # ! (not)

 /*
  * Tabla de verdad del operador and
  * SI AMBAS EXPRESIONES SON VERDADES NOS DA TRUE
  */
 // x       y       resultado
 // True    True    True
 // True    False   False
 // False   True    False
 // False   False   False

 /*
  * Tabla de verdad del operador or
  * SI AL MENOS ALGUNO DE SUS VALORES DA TRUE EL RESULTADO ES TRUE
  */
 // x       y       resultado
 // True    True    True
 // True    False   True
 // False   True    True
 // False   False   False

 /*
  * Tabla de verdad del operador NOT
  * DEVUELVE EL RESULTADO OPUESTO SEGÚN EL VALOR BOOLEANO
  */
 // x       resultado       
 // True    False  
 // False   True 