<?php 

class Empleado{
    private string $nombre;
    private string $cod_empleado;
    public function __construct(string $nombre, string $cod_empleado)
    {
        $this->nombre = $nombre;
        $this->cod_empleado = $cod_empleado;
    }
    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of cod_empleado
     */ 
    public function getCod_empleado()
    {
        return $this->cod_empleado;
    }

    /**
     * Set the value of cod_empleado
     *
     * @return  self
     */ 
    public function setCod_empleado($cod_empleado)
    {
        $this->cod_empleado = $cod_empleado;

        return $this;
    }
}