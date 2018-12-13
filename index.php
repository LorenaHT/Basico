<?php
//echo "Bienvenido a PHP!";
//include "http://localhost/prueba/lib/funciones.php";
namespace App\Lib1;

include_once ("lib/funciones.php");
include_once ("lib/funciones2.php");



header('Content-type: text/html');
echo MYCONST . "<br/>";
echo MyFunction(). "<br/>";
echo \App\Lib2\MyClass::WhoAmi() . "<br/>";
$matriz = array(
    array(3, 6, 1, 9),
    array(6, 8, 1, 2),
    array(5, 4, 2, 7)

);
MyClass::recorrePorFilas2($matriz);

function holaMundo($nombre)
{
    echo "Buenos días" . $nombre . "(" . strlen($nombre) . ")";

}

//holaMundo("Pepe");

$x = "123";
//echo $x;

$x = 123;
//echo $x;
$assoc = array(
    "nif" => "44567123F",
    "edad" => 25,
    "soltero" => true,
    "descuento" => 12.5
);
//for ($i=0;$i<count($assoc);$i++)
//echo $assoc[$i] . "<br/>";
//foreach($assoc as $k => $v)
//echo $k . " => " . $v . "<br/>";

$diasSemana = ["lunes", "martes", "miercoles", "jueves", "viernes", "sabado", "domingo"];

//foreach ($diasSemana as $k => $v)
//echo $k . " => " . $v . "<br/>";

//echo $noExisto = "123";
//echo getType($noExisto);

//phpinfo();



//recorrido por filas

/*	function recorrePorFilas($arr){
		for($i=0 ; $i <count($arr); $i++) {
			$acumFila = 0;
			for($j=0; $j < count($arr[$i]); $j++)
				$acumFila += $arr[$i][$j];
			echo " suma fila " . ($i + 1) . " = " . $acumFila . "<br/>";
		}
	}
	recorrePorFilas($matriz);*/


//recorrePorFilas2($matriz);

//header('Location: http://www.ieselrincon.org/');
//exit();
//var_dump($matriz);
//print_r($matriz);
?>