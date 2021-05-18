<?php

    header('content-type: application-json'); 
    $lista = (array) [
        'Nombres' => (string) 'Miguel',
        'edad' => (int) 23
    ];
    $lista2 = (array) [
        'Nombre' => (string) 'Jaime',
        'edad' => (int) 27
    ]; 
    extract(array: $lista, flags: EXTR_PREFIX_SAME, prefix: "DATA_1"); 
    extract(array: $lista2, flags: EXTR_PREFIX_SAME, prefix: "DATA_2"); 
    // $variable = (string) "Data";
    // print_r($lista);
    $EDAD = 0;

    // $fila = (array) array_fill(0,3,null);
    // $columnas = (array) array_fill(0,2,null);
    // $matriz = (array) [];
    // for ($i=0; $i < count($fila) ; $i++) { 
    //     for ($g=0; $g < count($columnas); $g++) { 
    //         $matriz[$i][$g] = null;
    //     }
    // }
    // $matriz[0][0] = (string) "Miguel";
    // $matriz[0][1] = (string) "Jose";
    // $matriz[1][0] = (string) "Diana";
    // $matriz[1][1] = (string) "Jaime";


    // $matriz[2][0] = function (string $p1, int $p2 = 23): string {
    //     $mensaje = (string) <<<SALUDAR
    //         <p>Hola 
    //             <b>
    //                 ${!${''} = $p1}
    //             </b>
    //             como estas?
    //         </p>
    //     SALUDAR;
    //     return $mensaje;
    // };
    // print_r(call_user_func($matriz[2][0], (string) "Miguel Angel"));

    // $matriz[2][1] = function ():string {return "Mucho gusto";};
    

    

    // echo "\n";
    // print_r(call_user_func_array($matriz[2][1], []));
    // echo "\n";
    // print_r($matriz[2]);




    // print_r($matriz[2][0]->object);





    
    // $inicio = (int) 1;
    // $fin = (int) 3;
    // $array = array_fill($inicio,$fin,null);
    // $array2 = array_fill(1,1,null);
    // $array2[1] = array_fill(1,1,null);
    // foreach ($array as $key => $value) {
    //     $array[$key] = array_fill($inicio,$fin,null);
    // }
    // $array[2][2] = $array2;


    // $array[2][2][1][1] = "Miguel Angel";
    // print_r($array);
    // print_r(json_encode($array, JSON_PRETTY_PRINT));








// $array = (array) ['Datos']; 
// $array = ['Datos'];
// $array = array('Datos');
// $array = new ArrayIterator(5);


?>