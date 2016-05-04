<?php

include 'indexLibros.php';

class elFutbol extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Julián García Candau</cite><p>Editorial:</p>
        &nbsp;Penthalon</article>";
}

$paginaElFutbol = new elFutbol();
$paginaElFutbol->setTitulo("El futbol, sin ley");
$paginaElFutbol->setEnlace("deportes.php");
$paginaElFutbol->mostrar();