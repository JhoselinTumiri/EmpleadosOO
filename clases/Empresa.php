<?php
class Empresa extends Empleado{

    private $empleados;

    function addEmpleado(Empleado $empleado){
        $this->empleados[] = $empleado;
    }
   
    function listarEmpleados(){

        $resultado = "Empleados: </br>";
        foreach($this->empleados as $key => $empleado){
            $resultado .= $empleado->mostrar()."</br>";
        }
        
        return $resultado;
    }

    function sumaIngresos(){

        $total = 0;
        foreach($this->empleados as $key => $empleado){
               $resultado .= $empleado->ingresos();
        }
        return $total;
    }

    }   
?>