<?php

    class AppController{
        //Fuente de datos (hardcoded)
        private array $empresas;
        /**
         * Patrón de diseño
         */
        public function __construct()
        {
            $this->empresas = [];
        }
      
        public function getEmpresas(){
            return $this->empresas;
        }
        /**
         * Añadir una empresa a mi variable miembro empresa
         * @return bool Indica si la empresa se ha añadido o no
         */
        public function addEmpresa(Empresa $empresaAdd){
            $empresa_existente = false;
            foreach($this->empresas as $empresa){
                if($empresa->getCif() == $empresaAdd->getCif()){
                    $empresa_existente = true;
                    break;
                }
            }
            if(!$empresa_existente){
                $this->empresas[] = $empresaAdd;
                return true;
            }
            return false;
        }
        /**
         * Obtener empresa por nombre
         * @return Empresa Devuelve la empresa por nombre o en su defecto null
         */
        public function getEmpresaByName(string $name_empresa){
            foreach($this->empresas as $empresa){
                if($name_empresa == $empresa->getNombre()){
                    return $empresa;
                }
            }
            return null;
        }
    }

?>