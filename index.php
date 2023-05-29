
<?php
    /**
     * *INTRODUCCIÓN A PHP
     * Dentro de la etiqueta se ejecuta el código correspondiente <?php "Aquí va el código" ?>
     */
    header('Content-Type: application');

    /**
     * *FUNCIONES DE SALIDA EN PHP
     * echo imprime una o varias cadenas de caracteres
     * 
     * printf Imprime en la pantalla el string que deseemos y si queremos agregar el valor de una variable, se utiliza "%s" y luego el  nombre de la variable separado por una coma
     * 
     * el metodo sprintf almacena todo el contenido en una cada de caracteres y la devuelve
     */
    echo "Texto imprimir";

    $texto ="Mundo";  //Para declarar una variable a diferencia de javascript, se utiliza el simbolo "$" y luego el nombre de la variable a declarar

    printf("Hola %s",$texto); 

    $mensaje= sprintf("Hola %s",$texto);    
    echo $mensaje;

    /**
     * *VARIABLES Y CONSTANTES
     * 
     * Para declarar una variable a diferencia de javascript, se utiliza el simbolo "$" y luego el nombre de la variable a declarar
     * 
     * Para definir una constante en php se utiliza el metodo define, el primer parametro es el nombre de la variable y el segundo sería el valor de la constante
     */

    define("PI",3.1416); //constante flotante
    define("SALUDO","Hola mundo"); // constante string  
    define("NOMBRE",true);// consntante boobleana

    /**
     * El metodo var_dump imprime el tipo de dato y el contenido de la variable
     */
    var_dump($texto);

    /**
     * *TIPOS DE DATOS
     * 
     *  Bolean= es un tipo de dato binario, su valor puede ser 1 o 0, true or false
     *  FLotante= Se utiliza para almacenar datos númericos de tipo decimal
     *  Entero= Se utiliza para almacenar datos númericos de tipo Entero
     *  String = Se utiliza para almacenar texto o cadenas de texto
     *  Array= Se utiliza para almacenar una colleción de datos
     *  Object= Se utiliza par almacenar instancias de clase
     *  Resource= Almacenan  referencias a recursos externos, como coexiones a bases de datos  o archivos abiertos
     *  Null= Se utiliza para definar una variable sin valor o sin definir
     */
    
    //bolean
    $validar= true;
    var_dump($validar);

    //entero
    $entero= 100;
    var_dump($entero);

    //flotante
    $flotante= 100.0;
    var_dump($flotante);

    //string
    $string= "Gerson";
    var_dump($string);

    $array=[];
    var_dump($array);

    /**
     * *NÚMEROS Y OPERADORES
     */










?>