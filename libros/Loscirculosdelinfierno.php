<?php

include ("indexLibros.php");

class losCirculos extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Simon R. Green</cite><p>Colección:</p>&nbsp;
        <em>Deathstalker</em><p>Volumen:</p>&nbsp;4<blockquote><h3>Sinopsis:</h3><q>Cuando Owen Deathstalker abandonó su 
            torre de marfil en el planeta Virimonde para ponerse al frente de una rebelión, no fue consciente de lo duro 
            que resultaría dejar de lado todos sus sueños.<br/>Pero una vez llegado el momento de trabar combate, lo 
            único que les queda a Deathstalker y al puñado de valientes que lo acompaña es empuñar el acero y luchar sin 
            cuartel contra la malévola Emperatriz Lionstone.<br/>Acción, aventura a raudales, duelos a espada y combates 
            de naves espaciales.<br/>¿Qué más se le puede pedir a la mayor saga de ciencia ficción de todos los tiempos.
            </q></blockquote></article>";
}

$paginaLosCirculos = new losCirculos();
$paginaLosCirculos->setTitulo("Los circulos del infierno");
$paginaLosCirculos->setEnlace("cienciaFiccion.php");
$paginaLosCirculos->mostrar();