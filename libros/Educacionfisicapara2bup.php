<?php

include 'indexLibros.php';

$paginaEducacion = new libros();
$paginaEducacion->setDescription("Libro de educacion fisica");
$paginaEducacion->setPalabrasClave("Libro,Educacion Fisica, 2ºB.U.P.");
$paginaEducacion->setTitulo("Libro de Educación Física para 2º B.U.P.");
$paginaEducacion->setContenidos2("<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Vicente Martinez de Haro-
        Juan Luis Hernández</cite><p>Editorial:</p>&nbsp;Paidotribo</article>");
$paginaEducacion->setEnlace("deportes.php");
$paginaEducacion->mostrar();