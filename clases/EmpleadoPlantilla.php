<?php
class EmpleadoPlantilla extends Empleado{
    private $sueldo;
    private $dietas;

    function __construct($nombre, $apellido, $numeroSeguridadSocial,$sueldo, $dietas )
    {
        parent::__construct($nombre, $apellido, $numeroSeguridadSocial);
        $this->sueldo = $sueldo;
        $this->dietas = $dietas;
    }

    function geSueldo(){
        return $this->sueldo;
    }
    function getDietas(){
        return $this->dietas;
    }
    function setDietas($dietas){
        $this->dietas = $dietas;
    }
    function setSueldo($sueldo){
        $this->sueldo = $sueldo;
    }
    function mostrar(){
        return parent::mostrar(). $this->ingresos();
    }

    function ingresos(){
        return $this->sueldo + $this->dietas;
    }
    }   
?>