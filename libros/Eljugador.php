<?php

include 'indexLibros.php';

$paginaElJugador = new libros();
$paginaElJugador->setDescription("Novela el jugador");
$paginaElJugador->setPalabrasClave("Libro, novela, el jugador, Fedor Dostoyevski");
$paginaElJugador->setEnlace("novelas.php");
$paginaElJugador->setTitulo("El jugador");
$paginaElJugador->setContenidos2("<article id=\"libros\"><p>Autor:</p>&nbsp;<cite>Fedor Dostoyevski</cite>
    <p>Colección:</p>&nbsp;<em>Historias</em><p>Editorial:</p>&nbsp;Bruguera</article>");
$paginaElJugador->mostrar();