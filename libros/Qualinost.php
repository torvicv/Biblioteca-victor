<?php

include 'indexLibros.php';

class qualinost extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Mark Anthony-Ellen Porath</cite><p>Colección:</p>
        &nbsp;<em>Los compañeros de la Dragonlance</em><p>Volumen:</p>&nbsp;1<blockquote><h3>Sinopsis:</h3><q>Flint 
            Fireforge, enano y maestro forjador, recibe la inesperada invitación del Orador de los Soles para visitar la 
            mítica ciudad de Qualinost. Allí conoce al joven Tanis, fruto de trágica unión entre una elfa y un humano. Y 
            entre ambos surge una amistad poco corriente.<br/>&nbsp;Pronto un grave suceso los pone a prueba: dos elfos 
            son asesinados misteriosamente y todas las sospechas recaen sobre Tanis.Si él y su amigo Flint no consiguen 
            demostrar que es inocente, se enfrentará a la pena de destierro. Pero desentrañar el misterio encierra un gran 
            peligro. Porque el asesino planea seguir adelante con sus crimenes.</q></blockquote></article>";
}

$paginaQualinost = new qualinost();
$paginaQualinost->setTitulo("Qualinost");
$paginaQualinost->setEnlace("cienciaFiccion.php");
$paginaQualinost->mostrar();