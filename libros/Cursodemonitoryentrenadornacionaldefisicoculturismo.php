<?php

include 'indexLibros.php';

$paginaCurso = new libros();
$paginaCurso->setDescription("Curso de monitor y entrenador nacional de fisicoculturismo");
$paginaCurso->setPalabrasClave("Curso, monitor, entrenador, fisicoculturismo, ejercicios");
$paginaCurso->setTitulo("Curso de monitor y entrenador nacional de fisicoculturismo");
$paginaCurso->setContenidos2("<article id=\"libros\" style=\"overflow: auto\">$paginaCurso->instrucciones
    <p>Autor:</p>&nbsp;<cite>Clemente Hernández Monclús</cite></article>");
$paginaCurso->setEnlace("deportes.php");
$paginaCurso->mostrar2();