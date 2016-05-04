<?php

include ("indexLibros.php");

class apertura extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Simon R. Green</cite><p>Colección:</p>&nbsp;
        <em>Deathstalker</em><p>Volumen:</p>&nbsp;3<blockquote><h3>Sinopsis:</h3><q>&nbsp;Owen Deathstalker, proscrito y 
            lider de una rebelión en ciernes, debe mover pieza. Junto a él están sus leales amigos, cuyos destinos se 
            encuentran unidos tras el paso por el laberinto de la locura.<br/>También la Emperatriz mueve pieza desde 
            Golgotha, ciudad de torres pastel. A su lado, en ese tablero que es la corte, se encuentran los caballeros, 
            alfiles y un rey a quien se creía perdido y que reaparece para servir de espejo a las dudas de todo un sistema. 
            Entre todos, manejan los hilos de un ejército de peones.<br/>Acción, viajes espaciales, feroces razas 
            alienígenas, abordajes desesperados y luchas a espadas: la saga Deathstalker prosigue con está nueva entrega. 
            Es la crónica de una revolución que abarca centenares de mundos, y de un puñado de personas dispuestas a 
            cambiar el curso de la historia.</q></blockquote></article>";
}

$paginaApertura = new apertura();
$paginaApertura->setTitulo("Apertura Golgotha");
$paginaApertura->setEnlace("cienciaFiccion.php");
$paginaApertura->mostrar();