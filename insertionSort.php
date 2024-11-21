<!-- Problema de Ordenar Lista con Insertion Sort:
Crea un script que ordene una lista de nombres en orden alfabético utilizando el algoritmo Insertion Sort. Muestra la lista antes y después de aplicar el algoritmo. -->
<?php

function insertionSort($array){
    if(count($array)<=1)  return "Ingresa mas de un elemento";
    $original = $array;
   

for ($i=1; $i < count($array) ; $i++) { 
     $currentValue = $array[$i];

     $j = $i-1;
     while($j>=0 && $array[$j]>$currentValue){
        $array[$j+1] = $array[$j];
        $j--;
     }
     $array[$j+1]= $currentValue;
     
}
print "Est es el array original: " . implode(", ", $original). "\n";
print "Est es el array ordenado: " . implode(", ", $array). "\n";

}

insertionSort(["Este", "es", "un", "texto", "para", "ordenar"]);