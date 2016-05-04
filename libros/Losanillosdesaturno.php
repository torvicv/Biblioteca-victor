<?php

include ("indexLibros.php");

class losAnillos extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Arthur Byron Cover</cite><p>Colección:</p>
        &nbsp;La máquina del tiempo<br/><br/><br/><blockquote><h3>Sinopsis:</h3><div id=\"mdt\"><h4>Año 2085</h4><b>Has
        avanzado hasta la época de las civilizaciones interplanetarias.</b></div><br/><q>Estás siguiendo tu plan para 
        alcanzar el planeta Saturno cuando te encuentras con un cyborg: parte humano y parte máquina.<br/>¿Aceptar la 
        invitación de extraño o buscas un sistema más seguro para llegar a Saturno?<br/>¡Tu decisión puede ayudarte a descubrir
        una forma de vida alienígena o a quedar perdido en el tiempo!</q></blockquote></article>";
}

$paginaLosAnillos = new losAnillos();
$paginaLosAnillos->setTitulo("Los anillos de Saturno");
$paginaLosAnillos->setEnlace("cienciaFiccion.php");
$paginaLosAnillos->mostrar();