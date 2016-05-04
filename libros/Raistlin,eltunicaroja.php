<?php

include 'indexLibros.php';

class elTunica extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Margaret Weis-Don Perrin</cite><p>Colección:</p>
        &nbsp;<em>La forja de un túnica negra</em><p>Volumen:</p>&nbsp;4<blockquote><h3>Sinopsis:</h3>&nbsp;<q>El ejército 
            de Ariakas asedia la ciudad de Última Esperanza. Se planea su destrucción total para encubrir el verdadero 
            propósito del ataque: apoderarse de los huevos de los Dragones Dorados y Plateados.<br/>&nbsp;Los mercenarios 
            del barón Arbolongar acuden para unirse a ese ejército, contratados por el rey Wilhelm. Caramon y Raistlin 
            forman parte de la tropa mercenaria.<br/>&nbsp;El Dragón Rojo se propone destruir los huevos de los dragones 
            enemigos, desobedeciendo a Takhisis.<br/>&nbsp;Los hermanos, Kitiara, Raistlin y Caramon, serán quienes tendrán 
            que impedírselo, impulsado cada cual por sus propios motivos.</q></blockquote></article>";
}

$paginaElTunica = new elTunica();
$paginaElTunica->setTitulo("Raistlin, el túnica roja");
$paginaElTunica->setEnlace("cienciaFiccion.php");
$paginaElTunica->mostrar();