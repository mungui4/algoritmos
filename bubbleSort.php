
/* Problema de Ordenar Lista con Bubble Sort:
Escribe un programa que ordene una lista de números de forma descendente utilizando el algoritmo Bubble Sort. La lista puede contener duplicados y valores negativos. Asegúrate de manejar estos casos y muestra la lista antes y después de aplicar el algoritmo. */
<?php
function bubbleSort($array){
    if(count($array) < 2){
        print "Se necesitan al menos dos números";
        return;
    }
    for ($i = 0  ; $i < count($array) ; $i++) { 
        for ($j = 0; $j < (count($array) - 1); $j++) { 
            if($array[$j]<$array[$j + 1]){
                $aux = $array[$j + 1];
                $array[$j + 1] = $array[$j];
                $array[$j] = $aux;

            }
        }

    }
    print_r($array);
}

bubbleSort([8,2,-4,4,5,7]);