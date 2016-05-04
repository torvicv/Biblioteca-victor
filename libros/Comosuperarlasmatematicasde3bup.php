<?php

include 'indexLibros.php';

$paginaMatematicas = new libros();
$paginaMatematicas->setDescription("Como superar las matemáticas de 3ºb.u.p.");
$paginaMatematicas->setPalabrasClave("Libro, matemáticas, 3º b.u.p., problemas, resueltos, solución");
$paginaMatematicas->setEnlace("varios.php");
$paginaMatematicas->setTitulo("Como superar las matemáticas de 3º b.u.p.");
$paginaMatematicas->setContenidos2("<article id=\"libros\"><p>Autor:</p>&nbsp;<cite>Pablo Taniguchi</cite>
    <p>Editorial:</p>&nbsp;EDUNSA<blockquote><div class=\"pre\">Problemas resueltos y 
problemas propuestos
con solución</div></blockquote></article>");
$paginaMatematicas->mostrar();