<?php

include 'inicio.inc';

class jardineria extends inicio2{
    
    var $librosJardineria = array("Editorial Susaeta" => array("Enciclopedia de la jardineria"),
                                  "Editorial de Vecchi" => array("El libro del jardin"),
                                  "Editorial folio" => array("Tecnicas de jardineria"),
                                  "Editorial Sarpe" => array("Tus plantas 1",
                                                             "Tus plantas 2",
                                                             "Tus plantas 3"),
                                  "Editorial Virus" => array("Del cannabis y su cultivo"));
            
    function tematicas($tematica) {
        parent::tematicas($this->librosJardineria);
    }
}
$paginaJardineria = new jardineria();
$paginaJardineria->setDescription("Libros de jardineria");
$paginaJardineria->setPalabrasClave("jardineria, libros, enciclopedia");
$paginaJardineria->setTitulo("Jardineria");
$paginaJardineria->mostrar3();