<?php

include 'indexLibros.php';

class sangre extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Margaret Weis</cite><p>Colección:</p>&nbsp;
        <em>La Discípula Oscura</em><p>Volumen:</p>&nbsp;3<blockquote><h3>Sinopsis:</h3><q>El mundo de Krynn siempre tiene 
            sorpresas para los incautos, pero la revelación de que una mortal, que primero dedico su vida al Dios Único y 
            luego a Chemosh, es a su vez una diosa, rebasa todos los límites conocidos. Para Mina, significa caer en la 
            locura al conocer la verdad.<br/>&nbsp;Los dioses están soliviantados porque Mina tiene el potencial de romper 
            el equilibrio de poder en el cielo. Los dioses de la Oscuridad y de la Luz se muestran ansiosos por tenerla 
            como una de los suyos. Pero Mina, siempre misteriosa y enigmática, tiene sus propios planes, sin que le 
            importe lo que los dioses puedan querer o planear.</q></blockquote></article>";
}

$paginaSangre = new sangre();
$paginaSangre->setTitulo("Ámbar y Sangre");
$paginaSangre->setEnlace("cienciaFiccion.php");
$paginaSangre->mostrar();