<?php

include 'indexLibros.php';

$paginaBarcelona = new libros();
$paginaBarcelona->setDescription("F.C. Barcelona, Celta de Vigo");
$paginaBarcelona->setPalabrasClave("futbol, F.C.Barcelona, Celta de Vigo, Diario 16");
$paginaBarcelona->setTitulo("F.C.Barcelona-Diario 16");
$paginaBarcelona->setContenidos2("<article id=\"libros\" style=\"overflow: auto\">$paginaBarcelona->instrucciones
         <p>Edita:</p>&nbsp;Diario 16</article>");
$paginaBarcelona->setEnlace("deportes.php");
$paginaBarcelona->mostrar2();