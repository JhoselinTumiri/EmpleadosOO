<?php
class EmpleadoPorComision extends Empleado{
    private $horas;
    private $tarifa;
    private $base;

    function __construct($nombre, $apellido, $numeroSeguridadSocial,$horas, $tarifa, $base )
    {
        parent::__construct($nombre, $apellido, $numeroSeguridadSocial);
        $this->horas= $horas;
        $this->tarifa = $tarifa;
        $this->base = $base;
    }

    function geHoras(){
        return $this->horas;
    }
    function getTarifa(){
        return $this->tarifa;
    }
    function getBase(){
        return $this->base;
    }
    function setHoras($horas){
        $this->horas = $horas;
    }
    function setTarifa($tarifa){
        $this->tarifa = $tarifa;
    }
    function setBase($base){
        $this->base = $base;
    }
    function mostrar(){
        return parent::mostrar() .$this->ingresos();
    }

    function ingresos(){
        return   $this->base + ($this->horas * $this->tarifa);
     }
    }   
?>