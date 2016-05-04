<?php

include 'indexLibros.php';

class deporte92 extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Editorial:</p>&nbsp;92 S.A.<blockquote><h3>Sinopsis:</h3><q>
        En la lucha contra el baloncesto y, en algunos países, contra el balonmano, el voley no se ha rendido y 
            cree todavía en el argumento de esa belleza incontestable. Y aún por encima de esos deportes es 
            innovador y prograsista, aportando al mundo de la alta competición sistemas por explorar como la 
            reciente liga mundial...</q></blockquote></article>";
}

$paginaDeporte92 = new deporte92();
$paginaDeporte92->setTitulo("Voleibol-deporte 92");
$paginaDeporte92->setEnlace("deportes.php");
$paginaDeporte92->mostrar();