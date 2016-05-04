<?php

include 'indexLibros.php';

$paginaVoleibol = new libros();
$paginaVoleibol->setTitulo("Voleibol");
$paginaVoleibol->setDescription("Libro de voleibol, escrito por Günter Blume");
$paginaVoleibol->setContenidos2("<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Günter Blume</cite>
    <p>Editorial:</p>&nbsp;Martinez Roca<blockquote><h3>Sinopsis:</h3><q>Conocimientos básicos - Un juego para el 
        ocio y la competición - El equipo - La reglamentación - El entrenamiento en diversas facetas - Aspectos 
        atléticos - Preparación técnica - Sistemas de juego - Tácticas y estrategias - Preparación psicológica.
        <br/>&nbsp;Un libros exhaustivo e imprescindible, tanto para los jugadores, como para los entrenadores, 
        profesores de educación física y aficionados en general al voleibol, un deporte-espectáculo de enorme 
        futuro.</q></blockquote></article>");
$paginaVoleibol->setEnlace("deportes.php");
$paginaVoleibol->mostrar();