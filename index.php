
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
     * *ARRAYS Y METODOS */

     //Array indexado
    $nombres = array("Juan","Pedro","Santiago");
    var_dump($nombres);
    echo "<hr>";

    //Array asociativo
    $edades=array(
        "Juan"=>35 ,
        "Pedro"=>37 ,
        "Santiago"=>43 
    );
    var_dump($edades);
    echo "<hr>";

    //Arrary multidimensional
    $personas=array(
        "Juan"=>array("Edad"=>35,"Ciudad"=>"Madrid","Pais"=>"España"),
        "Pedro"=>array("Edad"=>37,"Ciudad"=>"Medellin","Pais"=>"Colombia"),
        "Santiago"=>array("Edad"=>35,"Ciudad"=>"Bucaramanga","Pais"=>"Colombia"),
    );
    //EJemplo de cómo acceder a un dato de un array 
    $pedropais=$personas["Pedro"]["Pais"];
    print_r($personas["Pedro"]["Pais"]);
    echo "<hr>";
    
    echo"{$pedropais}";
    echo "<hr>";
    

    //Ejemplo de cómo agregar un dato nuevo al array multidimensional
    $personas["Pedro"]["Altura"]=1.71;
    print_r($personas["Pedro"]["Altura"]);
    echo "<hr>";  

    /**
     * *METODOS PARA LOS ARRAYS* 
     */

    /**
     * *array_flip()
     */    
    $originalArray = array('a' => 1, 'b' => 2, 'c' => 3);
    $flippedArray = array_flip($originalArray);
    print_r($flippedArray);
    /**
     * En este ejemplo, el array original tiene claves 'a', 'b' y 'c' con sus respectivos valores. Después de aplicar array_flip(), las claves se convierten en valores y viceversa.
     * Salida: Array ( [1] => a [2] => b [3] => c )
     * 
     *  */ 

    /**
     * *array_fill()
     */ 
    $filledArray = array_fill(0, 5, 'Hello');
    print_r($filledArray);
    /**
     * En este ejemplo, se crea un nuevo array con 5 elementos, todos establecidos en el valor 'Hello'.
     * Salida: Array ( [0] => Hello [1] => Hello [2] => Hello [3] => Hello [4] => Hello )     * 
     **/ 

    /**
     * *array_filter()
     */ 
    $numbers = array(1, 2, 3, 4, 5);
    $evenNumbers = array_filter($numbers, function($value) {
        return $value % 2 == 0;
    });
    print_r($evenNumbers);
    /**
     * En este ejemplo, se filtran los elementos del array original y se mantienen solo los números pares utilizando una función de devolución de llamada.
     * Salida: Array ( [1] => 2 [3] => 4 ) 
     **/

    /**
     * *array_map()
     */ 
    $numbers = array(1, 2, 3, 4, 5);
    $squaredNumbers = array_map(function($value) {
    return $value * $value;
    }, $numbers);
    print_r($squaredNumbers);
    /**
     * En este ejemplo, se aplica la función de multiplicar cada elemento por sí mismo a cada elemento del array original.
     * Salida: Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 [4] => 25 ) 
     **/

    /**
     * *array_reduce()
     */ 
    $numbers = array(1, 2, 3, 4, 5);
    $sum = array_reduce($numbers, function($carry, $value) {
    return $carry + $value;
    });
    echo $sum;
    /**
     * En este ejemplo, se utiliza array_reduce() para calcular la suma de todos los elementos del array original.
     * Salida: 15
     **/

    /**
     * *aarray_key_exists()
     */ 
    $student = array('name' => 'John', 'age' => 20, 'grade' => 'A');
    if (array_key_exists('age', $student)) {
        echo 'The key "age" exists in the array.';
    } else {
        echo 'The key "age" does not exist in the array.';
    }
    /**
     * En este ejemplo, se verifica si la clave 'age' existe en el array.
     * Salida: The key "age" exists in the array.
     **/

    /**
     * *in_array()
     */ 
    $fruits = array('apple', 'banana', 'orange');
    if (in_array('banana', $fruits)) {
        echo 'The value "banana" exists in the array.';
    } else {
        echo 'The value "banana" does not exist in the array.';
    }
    /**
     * En este ejemplo, se verifica si el valor 'banana' existe en el array.
     * Salida: The value "banana" exists in the array.
     **/

    /**
     * *array_rand()
     */ 
    $colors = array('red', 'green', 'blue', 'yellow', 'orange');
    $randomKey = array_rand($colors);
    echo $colors[$randomKey];
    /**
     * En este ejemplo, se selecciona una clave aleatoria del array y se imprime el valor correspondiente.
     * Salida: (un color aleatorio, por ejemplo: "green")
     **/

    /**
     * *array_unique()
     */ 
    $numbers = array(1, 2, 3, 2, 4, 3, 5);
    $uniqueNumbers = array_unique($numbers);
    print_r($uniqueNumbers);
    /**
     * En este ejemplo, se eliminan los valores duplicados del array original y se devuelve un nuevo array con valores únicos.
     * Salida: Array ( [0] => 1 [1] => 2 [2] => 3 [4] => 4 [6] => 5 )
     **/

    /**
     * *array_intersect()
     */ 
    $numbers1 = array(1, 2, 3, 4, 5);
    $numbers2 = array(3, 4, 5, 6, 7);
    $commonNumbers = array_intersect($numbers1, $numbers2);
    print_r($commonNumbers);
    /**
     * EEn este ejemplo, se encuentran los valores comunes entre dos arrays y se devuelve un nuevo array con los valores encontrados.
     * Salida: Array ( [2] => 3 [3] => 4 [4] => 5 )
     **/

    /**
     * *array_diff()
     */ 
    $numbers1 = array(1, 2, 3, 4, 5);
    $numbers2 = array(3, 4, 5, 6, 7);
    $uniqueNumbers = array_diff($numbers1, $numbers2);
    print_r($uniqueNumbers);
    /**
     * En este ejemplo, se encuentran los valores del primer array que no están presentes en el segundo array y se devuelve un nuevo array con esos valores.
     * Salida: Array ( [0] => 1 [1] => 2 )
     **/ 

    /**
     * *array_push()
     */ 
    $fruits = array('apple', 'banana');
    array_push($fruits, 'orange', 'kiwi');
    print_r($fruits);
    /**
     * En este ejemplo, se agregan elementos al final del array utilizando array_push().
     * Salida: Array ( [0] => apple [1] => banana [2] => orange [3] => kiwi )
     **/ 
    
    /**
     * *array_pop()
     */ 
    $fruits = array('apple', 'banana', 'orange');
    $lastFruit = array_pop($fruits);
    echo $lastFruit;
    /**
     * En este ejemplo, se extrae y se elimina el último elemento del array utilizando array_pop().
     * Salida: orange
     **/ 
    
    /**
     * *array_reverse()
     */ 
    $numbers = array(1, 2, 3, 4, 5);
    $reversedNumbers = array_reverse($numbers);
    print_r($reversedNumbers);
    /**
     * En este ejemplo, se invierte el orden de los elementos del array original.
     * Salida: Array ( [0] => 5 [1] => 4 [2] => 3 [3] => 2 [4] => 1 )
     **/

    /**
     * *array_sum()
     */ 
    $numbers = array(1, 2, 3, 4, 5);
    $sum = array_sum($numbers);
    echo $sum;
    /**
     * En este ejemplo, se calcula la suma de todos los elementos del array
     * Salida: Array ( [0] => 5 [1] => 4 [2] => 3 [3] => 2 [4] => 1 )
     **/
    
    /**
     * *array_product()
     */ 
    $numbers = array(1, 2, 3, 4, 5);
    $product = array_product($numbers);
    echo $product;
    /**
     * En este ejemplo, se calcula el producto de todos los elementos del array.
     * Salida: 120
     **/ 
    
    /**
     * *array_chunk()
     */ 
    $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
    $chunks = array_chunk($numbers, 3);
    print_r($chunks);
    /**
     * En este ejemplo, se divide el array en fragmentos más pequeños, cada uno con la cantidad especificada de elementos.
     * Salida: Array ( [0] => Array ( [0] => 1 [1] => 2 [2] => 3 ) [1] => Array ( [0] => 4 [1] => 5 [2] => 6 ) [2] => Array ( [0] => 7 [1] => 8 [2] => 9 ) )
     **/

    /**
     * *array_keys()
     */ 
    $student = array('name' => 'John', 'age' => 20, 'grade' => 'A');
    $keys = array_keys($student);
    print_r($keys);
    /**
     * En este ejemplo, se obtienen todas las claves del array.
     * Salida: Array ( [0] => name [1] => age [2] => grade )
     **/ 
    
    /**
     * *array_values()
     */ 
    $student = array('name' => 'John', 'age' => 20, 'grade' => 'A');
    $values = array_values($student);
    print_r($values);
    /**
     * En este ejemplo, se obtienen todos los valores del array.
     * Salida: Array ( [0] => John [1] => 20 [2] => A )
     **/ 

    /**
     * *array_walk()
     */ 
    $fruits = array('apple', 'banana', 'orange');
    array_walk($fruits, function($value, $key) {
        $value = strtoupper($value);
    });
    print_r($fruits);
    /**
     * En este ejemplo, se aplica una función de devolución de llamada a cada elemento del array y se modifica el valor de cada elemento. En este caso, se convierten todas las frutas en letras mayúsculas.
     * Salida: Array ( [0] => APPLE [1] => BANANA [2] => ORANGE )
     **/  

    







?>
