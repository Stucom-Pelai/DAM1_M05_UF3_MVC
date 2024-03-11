<?php

class Supermercado extends Empresa{
    private array $listadoProductos;
    
    public function __construct(string $cif, string $nombre, array $listadoProductos)
    {
        $this->listadoProductos = $listadoProductos;
        parent::__construct($cif, $nombre);
    }
    /**
     * Get the value of listadoProductos
     */ 
    public function getListadoProductos()
    {
        return $this->listadoProductos;
    }

    /**
     * Set the value of listadoProductos
     *
     * @return  self
     */ 
    public function setListadoProductos($listadoProductos)
    {
        $this->listadoProductos = $listadoProductos;

        return $this;
    }
}



?>