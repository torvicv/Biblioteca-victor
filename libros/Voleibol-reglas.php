<?php

include 'indexLibros.php';

class reglas extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Editorial:</p>&nbsp;editores mexicanos unidos<blockquote>
            <h3>Sinopsis:</h3><q>A partir de su creación, el voleibol ha llegado a ser aceptado y practicado en 
            casi todo el mundo. Su carácter de deporte <q>limpio</q>, en el que son inexistentes los choques 
            personales con el adversario, la facilidad con que puede ser practicado en casi cualquier clima y 
            con un sencillo equipo personal y la fluidez y espectacularidad de sus acciones, han contribuido 
            grandemente a que este deporte haya llegado a ser el favorito de las multitudes.<br/>&nbsp;El 
            voleibol posee un conjunto de reglas y principios, aceptadas por todas las naciones en que se 
            practica en forma organizada e institucional. Estos articulos reglamentan el juego, clarifican las 
            jugadas dudosas, establecen las potestades de los árbitros y protejen a los jugadores.<br/>&nbsp;
            Estas reglas, revisadas cuidadosamente y puestas al día, son las que jueces, deportistas y 
            espectadores pueden consultar en este libro.</q></blockquote></article>";
}

$paginaReglas = new reglas();
$paginaReglas->setTitulo("Voleibol-reglas");
$paginaReglas->setEnlace("deportes.php");
$paginaReglas->mostrar();