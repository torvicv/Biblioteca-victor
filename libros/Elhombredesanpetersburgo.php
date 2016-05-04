<?php

include 'indexLibros.php';

$paginaElHombre = new libros();
$paginaElHombre->setDescription("Novela de pre 1ª guerra mundial");
$paginaElHombre->setPalabrasClave("Libro, novela, Ken Follett, espionaje, 1ª guerra mundial, Alemania, Rusia, "
        . "Inglaterra");
$paginaElHombre->setEnlace("novelas.php");
$paginaElHombre->setTitulo("El hombre de San Petersburgo");
$paginaElHombre->setContenidos2("<article id=\"libros\"><p>Autor:</p>&nbsp;<cite>Ken Follett</cite><p>Editorial:</p>
    Bruguera-Emece<blockquote><div id=\"tamañoletras\"><b>Por el autor de </b>Triple, La clave está en Rebeca y 
            La isla de las tormentas.</div><hr><h3>Sinopsis:</h3><q>En la primavera de 1914 Europa era un caldero 
            hirviente. Alemania quería la guerra, Rusia quería los Balcanes e Inglaterra quería el apoyo de Rusia 
            contra Alemania. Pero el hombre de San Petersburgo, un anarquista idealista e implacable, estaba 
            decidido a desbaratar la alianza del Zar con el Imperio Británico por todos los medios.</q><hr>&laquo;
    Una intriga soberbia, contada con un ritmo vertiginoso. Nos mantiene en suspenso hasta la última página y su 
    evocación de la Europa anterior a la guerra es excelente...&raquo;.<div id=\"retroceder\">NEWSWEEK</div>
    </blockquote></article>");
$paginaElHombre->mostrar();