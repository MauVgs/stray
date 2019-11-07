<?php 

    $arreglo = array(4, 4, 4, 5, 4, 4, 4);


    $resultado = stray($arreglo);
    print_r('El numero diferente es : ' . $resultado);

    function stray($arre){
        $res = array_count_values($arre);
        return array_search(1, $res);
    }

?>