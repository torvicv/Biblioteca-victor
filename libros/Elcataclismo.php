<?php

include 'indexLibros.php';

class elCataclismo extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Margaret Weis y Tracy Hickman</cite><p>Colección:
        </p>&nbsp;<em>Cuentos de la Dragonlance-segunda trilogía</em><p>Volumen:</p>&nbsp;2<blockquote><h3>Sinopsis:</h3>
            <q>La arrogancia del Principe de los Sacerdotes de Istar provoca la ira de los dioses y, como resultado, se 
            produce el cataclismo. Con él llegan la anarquia, la desesperación, la vileza... Pero también el heroismo. Los 
            diez cuentos de este volumen nos ofrecen diversas muestras de lo sucedido en Krynn tras el desastre.<br/>&nbsp;
            El volumen se cierra con una novela corta de <cite>Margaret Weis y Tracy Hickman</cite>, &laquo;Un auténtico 
            caballero&raquo;, que retoma la historia del clérigo de Mishakal, el hermano Michael, y de Nikol, hija de un 
            Caballero de Solamnia: Los dos sobreviven al cataclismo y tienen un encuentro con el caballero que, según los 
            rumores, podría haber evitado la hecatombe.</q></blockquote></article>";
}

$paginaElCataclismo = new elCataclismo();
$paginaElCataclismo->setTitulo("El Cataclismo");
$paginaElCataclismo->setEnlace("cienciaFiccion.php");
$paginaElCataclismo->mostrar();