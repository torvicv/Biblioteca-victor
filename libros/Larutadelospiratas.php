<?php

include ("indexLibros.php");

class laRuta extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Jim Gasperini</cite><p>Colección:</p>&nbsp;
        La máquina del tiempo<br/><br/><br/><blockquote><h3>Sinopsis:</h3><div id=\"mdt\"><h4>Año 1684</h4><b>Has retrocedido
        hasta la época de los piratas.</b></div><br/><q>Te enfrentas con un capitán de piratas, que te propone
        unirte a su tripulación o, de lo contrario, morir.<br/>¿Firmas el pergamino y te conviertes en 
        pirata o tratas de escapar antes de que te atrape? ¡Tu decisión puede conducirte al éxito o a quedar
        perdido en el tiempo!</q></blockquote></article>";
}

$paginaLaRuta = new laRuta();
$paginaLaRuta->setTitulo("La ruta de los piratas");
$paginaLaRuta->setEnlace("cienciaFiccion.php");
$paginaLaRuta->mostrar();