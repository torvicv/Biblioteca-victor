<?php

include ("indexLibros.php");

class elSecreto extends libros{
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p><cite>Jim Gasperini</cite><p>Colección:</p>&nbsp;
        La máquina del tiempo<br/><br/><br/><blockquote><h3>Sinopsis:</h3><div id=\"mdt\"><h4>Año 1340</h4><b>Has retrocedido
        hasta la época de la caballería.</b></div><br/><q>Un escudero te acaba de acusar de brujo. Debes demostrar que
        esto no es cierto batiéndote en duelo con garrotes, ¡pero nunca los has manejado!<br/>¿Intentas defenderte o
        escapar sorteando la encolerizada multitud? ¡Tu decisión puede conducirte al éxito o a quedar perdido en el 
        tiempo!</q></blockquote></article>";
}

$paginaElSecreto = new elSecreto();
$paginaElSecreto->setTitulo("El secreto de los caballeros");
$paginaElSecreto->setEnlace("cienciaFiccion.php");
$paginaElSecreto->mostrar();