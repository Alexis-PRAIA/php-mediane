<?php
function moyenne ($array){
    $moyenne = 0;
    $somme = 0;
    for($i=0; $i<count($array); $i++){
        $somme = $array[$i] + $somme;
    }

    return $moyenne = $somme /count($array);
}
?>