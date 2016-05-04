<?php

include 'indexLibros.php';

$paginaFutbol = new libros();
$paginaFutbol->setDescription("Libro de futbol, reglas del juego, fundamentos técnico y tácticos");
$paginaFutbol->setPalabrasClave("Futbol, reglas , técnica, táctica");
$paginaFutbol->setTitulo("Futbol");
$paginaFutbol->setContenidos2("<article id=\"libros\"><p>Editorial:</p>&nbsp;Interediciones<br/><br/>
    <div class=\"punto\">Reglas del juego<br/>&#8226<br/>Fundamentos técnicos y tácticos</div></article>");
$paginaFutbol->setEnlace("deportes.php");
$paginaFutbol->mostrar();