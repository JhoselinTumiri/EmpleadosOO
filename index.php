<?php
include "clases/Empleado.php";

//Prueba de datos
$empleado= new Empleado("Lola", "Etxegaray", "14-78451589-75");

//llamada al método mostrar
$resultado = "<b>Empleado:</b></br> ";
$resultado .= $empleado->mostrar();

include "includes/vista_resultado.php";
?>