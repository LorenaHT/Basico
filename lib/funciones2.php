<?php
/**
 * Created by PhpStorm.
 * User: lore9
 * Date: 10/12/2018
 * Time: 12:45
 */

namespace App\Lib2;
const MYCONST = 'App\Lib2\MYCONST';


function MyFunction() {
    return __FUNCTION__;
}
class MyClass {
   public static function WhoAmi() {
        return __METHOD__;

    }
    static function recorrePorFilas2($arr)
    {
        foreach ($arr as $k => $linea) {
            $acumFila = 0;
            foreach ($linea as $num) {
                $acumFila += $num;
            }
            echo " suma fila " . ++$k . " = " . $acumFila . "<br/>";
        }
    }
}
//define (PI, 3.141587);

/*function recorrePorFilas2($arr)
{
    foreach ($arr as $k => $linea) {
        $acumFila = 0;
        foreach ($linea as $num) {
            $acumFila += $num;
        }
        echo " suma fila " . ++$k . " = " . $acumFila . "<br/>";
    }
}*/

?>