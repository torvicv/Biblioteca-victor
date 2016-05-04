<?php

include 'indexLibros.php';

$paginaPractice = new libros();
$paginaPractice->setDescription("Libro de prácticas de inglés");
$paginaPractice->setPalabrasClave("Libro, book, practice, prácticas, estudiante, english, inglés, course, curso");
$paginaPractice->setEnlace("varios.php");
$paginaPractice->setTitulo("Practice book");
$paginaPractice->setContenidos2("<article id=\"libros\"><p>Autor:</p>&nbsp;<cite>Michael Swam and Catherine Walter</cite>
    <p>Editorial:</p>&nbsp;Cambridge University Press<blockquote><div id=\"tamañoletras\">Libro de prácticas de 
        inglés.</div></blockquote></article>");
$paginaPractice->mostrar();