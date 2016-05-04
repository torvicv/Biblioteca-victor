<?php

include 'indexLibros.php';

$paginaAnuario = new libros();
$paginaAnuario->setDescription("Anuario de Marca 1995/1996");
$paginaAnuario->setPalabrasClave("Anuario, deporte, marca, 1995, 1996");
$paginaAnuario->setTitulo("Anuario Marca 1995/96");
$paginaAnuario->setContenidos2("<article id=\"libros\" style=\"overflow: auto;\">$paginaAnuario->instrucciones
    <div class=\"punto\">Deporte a deporte<br/>&#8226<br/>
    Día a día<br/>&#8226<br/>Base de datos<br/>&#8226<br/>Quién es quién</div></article>");
$paginaAnuario->setEnlace("deporte.php");
$paginaAnuario->mostrar2();