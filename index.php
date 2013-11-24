<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "<h1>Ejercicio 1. Array</h1>";

        $arr = array("Mamifero" => "Ballena", "Insecto" => "Hormiga");
        reset($arr);
        while ($indice = each($arr)) {
            echo $indice["key"];
            echo "<br/>";
        }

        echo "<h1>Ejercicio 2. Array</h1>";

        $array = array("Mamifero" => "Ballena", "Insecto" => "Hormiga");
        reset($array);
        while (list($clave, $valor) = each($array)) {
            echo "Índice: $clave Valor: $valor<br />";
        }
        echo "<br/>";
        foreach ($array as $clave => $valor) {
            echo "Índice: $clave Valor: $valor<br />";
        }

        echo "<h1>Ejercicio 3. Array mediante variables, bucle while y foreach</h1>";

        echo "<h3>Array mediante variables</h3>";

        $productos = array("M" => "MESA", "S" => "SILLA", "F" => "FLEXO", "E" => "ESTANTERIA");
        //recorrido mediante variable.
        echo "<br />";
        echo $productos[M] . "<br />";
        echo $productos[S] . "<br />";
        echo $productos[F] . "<br />";
        echo $productos[E] . "<br />";
        echo "<br />";

        echo "<h3>Array mediante bucle while</h3>";
        //recorrido mediante bucle while
        reset($productos);
        while (list($indice, $valor) = each($productos))
            echo "Indice: $indice; <br/> Valor: $valor<br/>";

        echo "<h3>Array mediante bucle foreach</h3>";
        //recorrido mediante foreach

        foreach ($productos as $indice => $valor)
            echo "Indice: $indice; <br/> Valor: $valor<br/>";

        echo "<h1>Ejercicio 4. Probar funciones</h1>";

        $nombreYedad = array("Jose Antonio" => 55, "Josefa Maria" => 51, "Ana" => 27, "Jose Mari" => 23, "Antonio" => 20);

        print_r(array_keys($nombreYedad)); //Extrae los índices de las arrays

        echo "<br/>";
        echo "<br/>";

        print_r(array_values($nombreYedad)); //Extrae los valores de las arrays

        echo "<br/>";
        echo "<br/>";

        if (in_array(55, $nombreYedad)) {//busca en la array el valor que le has pasado
            echo "Valor de la array encontrado";
        } else {
            echo "Valor no encontrado";
        }
        echo "<br/>";
        echo "<br/>";
        //Crea una array con el rango que tu le especifiques

        $rango = range(0, 10);
        print_r($rango);

        echo "<br/>";
        echo "<br/>";

        //array_reverse: invierte la array

        print_r(array_reverse($nombreYedad));
        
        echo "<br/>";
        echo "<br/>";

        //shuffle: Extrae la array de manera aleatoria

        shuffle($nombreYedad);
        print_r($nombreYedad);

        echo "<br/>";
        echo "<br/>";
        
        //array_merge: mezcla dos arrays en una

        $mezclaUno = array("Pedro Benito", "Alvaro Crego", "Jordi Eslava", "Enrique Gimeno");
        $mezclaDos = array("Jose Grancha", "Sergio Martinez", "Edu Membrillas", "Diana Ortega");

        print_r(array_merge($mezclaUno, $mezclaDos));

          echo "<br/>";
        echo "<br/>";
        
        echo "<h1>Ejercicio 5. Manejo de pilas</h1>";


        //array_pop: elimina el último elemento de una array

        array_pop($nombreYedad);
        print_r($nombreYedad);

          echo "<br/>";
        echo "<br/>";
        
        //Inserta más elementos al final de la array.

        array_push($mezclaUno, "Jose Grancha", "Sergio Martinez");
        print_r($mezclaUno);

          echo "<br/>";
        echo "<br/>";
        
        echo "<h1>Ejercicio 6. Manejo de colas</h1>";

        //array_shift: elimina el primer elemento de la array

        echo $mezclaDos;
        array_shift($mezclaDos);
        print_r($mezclaDos);
        
          echo "<br/>";
        echo "<br/>";

        //array_unshift: añade un elemento al principio de la array

        echo $mezclaDos;
        array_unshift($mezclaDos, "Angel Alpañez");
        print_r($mezclaDos);
        ?>
    </body>
</html>
