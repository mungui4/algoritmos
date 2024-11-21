<!-- Problema de Ordenar Lista con Merge Sort:
Implementa una función que ordene una lista de palabras alfabéticamente utilizando el algoritmo Merge Sort. Muestra la lista antes y después de aplicar el algoritmo. -->
<?php
function mergeSort($array){
    static $original = null;
    if($original ===null){
        $original = $array;
    }
    
    if(count($array)==1){
        return $array;
    }
    $middle = floor(count($array)/2);
    $left = array_slice($array,0,$middle);
    $right = array_slice($array,$middle);

    $left = mergeSort($left);
    $right = mergeSort($right);
    $ordenar = merge($left, $right);

    if($original === $array){
        return ['ordenado'=> $ordenar, 'original'=>$original];
    }
    
    return $ordenar;
}



function merge($left,$right){
    $result = [];
    while(count($left) > 0 && count($right) > 0){
        if($left[0] <= $right[0]){
            array_push($result,array_shift($left));
        }else{
            array_push($result,array_shift($right));
        }
    }

        while(count($left) > 0){
            array_push($result,array_shift($left));
        }

        
        while(count($right) > 0){
            array_push($result,array_shift($right));
        }

        return $result;
    }

$resultado = mergeSort(["hola", "este", "es", "un", "array", "de", "ordenamiento", "alfabetico"]);

print_r($resultado['original']);
print_r($resultado['ordenado']);