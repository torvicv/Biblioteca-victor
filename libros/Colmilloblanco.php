<?php

include 'indexLibros.php';

$paginaColmillo = new libros();
$paginaColmillo->setDescription("Libro de aventuras");
$paginaColmillo->setPalabrasClave("Libro, aventuras, colmillo blanco, Jack London");
$paginaColmillo->setEnlace("novelas.php");
$paginaColmillo->setTitulo("Colmillo Blanco");
$paginaColmillo->setContenidos2("<article id=\"libros\" style=\"overflow: auto\">$paginaColmillo->instrucciones
    <p>Autor:</p>&nbsp;<cite>Jack London</cite><p>Serie:</p>Juvenil nº41<p>Editorial:</p>P.P.P.</article>");
$paginaColmillo->mostrar2();