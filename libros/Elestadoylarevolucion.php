<?php

include ("indexLibros.php");

class elEstado extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p><cite>Lenin</cite><br/><br/><br/><blockquote><h3>Sinopsis:</h3>
            <q>El estado es un instrumento del que se valen las clases dominantes para perpetuar su poder sobre las clases 
            explotadas. Esta es la tesis que informa el desarrollo de esta obra, una de las piezas mas célebres de la literatura
            marxista-lenilista. Lenin, que escribió este libro entre los meses de febrero y octubre de 1917, propugnaba la
            instauración de la \"dictadura del proletariado\" como paso previó a la extinción del Estado y el advenimiento de 
            una sociedad sin clases.</q></blockquote></article>";
}

$paginaElEstado = new elEstado();
$paginaElEstado->setTitulo("El estado y la revolución");
$paginaElEstado->setEnlace("filosofia.php");
$paginaElEstado->mostrar();