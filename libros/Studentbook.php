<?php

include 'indexLibros.php';

$paginaStudent = new libros();
$paginaStudent->setDescription("Libro de estudio de inglés");
$paginaStudent->setPalabrasClave("Libro, book, student, estudiante, english, inglés, course, curso");
$paginaStudent->setEnlace("varios.php");
$paginaStudent->setTitulo("Student's book");
$paginaStudent->setContenidos2("<article id=\"libros\"><p>Autor:</p>&nbsp;<cite>Michael Swam and Catherine Walter</cite>
    <p>Editorial:</p>&nbsp;Cambridge University Press<blockquote><div id=\"tamañoletras\">Libro de estudio de 
        inglés.</div></blockquote></article>");
$paginaStudent->mostrar();