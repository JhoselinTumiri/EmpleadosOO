<?php
class Empresa {

    private $empleados;

    function addEmpleado(Empleado $empleado){
        $this->empleados[] = $empleado;
    }
   
    function listarEmpleados(){

        $empleados = "";
        foreach($this->empleados as $key => $empleado){
            $empleados .= $empleado->mostrar()."</br>";
        }
        
        return $empleados;
    }

    function sumaIngresos(){

        $total = 0;
        foreach($this->empleados as $key => $empleado){
               $total += $empleado->ingresos();
        }
        return $total;
    }

    }   
?>