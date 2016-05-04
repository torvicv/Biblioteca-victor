<?php

include 'indexLibros.php';

class correr extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Juan Mora</cite><p>Editorial:</p>
        dédalo</article>";
}

$paginaCorrer = new correr();
$paginaCorrer->setTitulo("Correr");
$paginaCorrer->setEnlace("deportes.php");
$paginaCorrer->mostrar();