<?php

include 'indexLibros.php';

$paginaGuia = new libros();
$paginaGuia->setDescription("Voleibol-guia de competiciones nacionales 1999/2000");
$paginaGuia->setPalabrasClave("Voleibol, guia, competiciones nacionales, 1999/2000, RFEVB");
$paginaGuia->setTitulo("Voleibol-guia de competiciones nacionales");
$paginaGuia->setContenidos2("<article id=\"libros\"><p>Autor:</p>&nbsp;Real Federación Española de Voleibol
    <p>Temporada:</p>&nbsp;1999/2000</article>");
$paginaGuia->setEnlace("deportes.php");
$paginaGuia->mostrar();