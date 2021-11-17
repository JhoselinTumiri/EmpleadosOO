<?php
include "clases/Empleado.php";
include "clases/EmpleadoPlantilla.php";
include "clases/EmpleadoPorComision.php";
include "clases/Empresa.php";
include "clases/PruebaPolimorf.php";

//Prueba de datos
$empleado1= new EmpleadoPlantilla("Lola", "Etxegaray", "14-78451589-75",40,10);
$empleadoPC = new EmpleadoPorComision("Maria", "Behobide", "18-56895478-56",50,300,10);

//llamada al método mostrar
$resultado = "<b>Empleado:</b></br></br> ";
$resultado .= "<p><b>Empleado Asalariado:</b></br> ".$empleado1->mostrar().$empleado1->ingresos()."</p></br>";

$resultado .= "<p><b>Empleado Por Comisión:</b></br> ".$empleadoPC->mostrar().$empleadoPC->ingresos()."</br>";

$resultado .= "<p><b>Prueba Polimorfismo:</b></br>Los ingresos de ". $empleadoPC->getApellido() ." son ". PruebaPolimorf::calcular($empleadoPC)."</br>";
$resultado .= "Los ingresos de ". $empleado1->getApellido() ." son ". PruebaPolimorf::calcular($empleado1)."</br></p>";

/*
$empleado3 = new EmpleadoPlantilla("Karmele", "Arocena", "22-45561256-20",10,5);
$empresa =new Empresa();
//AÑADIR EMPLEADOS
$empresa->addEmpleado($empleado1);
$empresa->addEmpleado($empleadoPC);
$empresa->addEmpleado($empleado3);
$resultado .= "<p><b>Listado Empresa:</b></br> ". $empresa->listarEmpleados() ."</br>";
*/
include "includes/vista_resultado.php";
?>