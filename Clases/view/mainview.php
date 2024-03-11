<?php
    require_once('../model/Empresa.php');
    require_once('../model/Empleado.php');
    require_once('../model/Supermercado.php');
    require_once('../controller/AppController.php');

    /**
     * Mostramos todas las empresas existentes junto con sus empleados
     */
    function mostrarEmpresas($empresas){
        foreach($empresas as $empresa){
            echo "CIF de la empresa: " . $empresa->getCif(). "<br>";
            echo "Nombre: " . $empresa->getNombre(). "<br>";
            echo "Empleados: <br>";
            foreach($empresa->getEmpleados() as $empleado){
                echo "<br>--------------------------------------<br>";

                echo " ->Nombre: ".$empleado->getNombre();
                echo "<br> ->Cod Empleado: ".$empleado->getCod_empleado();

                echo "<br>--------------------------------------<br>";

            }
    
        }
    }
    $empresa = new Supermercado("1","Consum",["manzana","limones","zumo","tomate"]);

    $empresa->setEmpleados([new Empleado("juan","1"), new Empleado("maria","2"), new Empleado("sergi","3")]);
    $appcontroller = new AppController();


    $appcontroller->addEmpresa($empresa);

    mostrarEmpresas($appcontroller->getEmpresas());
