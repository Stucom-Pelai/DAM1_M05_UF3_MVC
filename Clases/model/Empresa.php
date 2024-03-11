<?php

class Empresa {
    private string $cif;
    private string $nombre;
    private string $tlf;
    private array $empleados;
    private static $pais = 'ES';

    public function __construct(string $cif, string $nombre)
    {
        $this->cif = $cif;
        $this->nombre = $nombre;
    }
    /**
     * Este método me obtiene el cif de la empresa
     * @return string CIF de la empresa
     */
    public function getCif(){
        return $this->cif;
    }
    /**
     * Asignación del atributo cif del objeto
     * @param string cif de la empresa a asignar
     */
    public function setCif(string $cif){
        $this->cif = $cif;
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
     * Get the value of tlf
     */ 
    public function getTlf()
    {
        return $this->tlf;
    }

    /**
     * Set the value of tlf
     *
     * @return  self
     */ 
    public function setTlf($tlf)
    {
        $this->tlf = $tlf;

        return $this;
    }

    /**
     * Get the value of empleados
     */ 
    public function getEmpleados()
    {
        return $this->empleados;
    }

    /**
     * Set the value of empleados
     *
     * @return  self
     */ 
    public function setEmpleados($empleados)
    {
        $this->empleados = $empleados;

        return $this;
    }

    /**
     * Get the value of pais
     */ 
    public static function getPais()
    {
        return self::$pais;
    }

    /**
     * Set the value of pais
     *
     * @return  self
     */ 
    public static function setPais($pais)
    {
        self::$pais = $pais;

        return self::class;
    }
}