<?php

include 'indexLibros.php';

class elReino extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Margaret Weis y Tracy Hickman</cite><p>Colección:
        </p>&nbsp;<em>Cuentos de la Dragonlance-segunda trilogía</em><p>Volumen:</p>&nbsp;1<blockquote><h3>Sinopsis:</h3>
            <q>El mundo de Krynn es fuente de inagotables sorpresas.Basten dos ejemplos: en uno de los siete cuentos 
            incluidos en el presente volumen, un kender se convierte en Caballero de Solamnia (bueno, casi lo consigue). 
            En otra narración, un ogro llega a ser el salvador de la raza de los enanos, ¡vivir para ver!<br/>&nbsp;El 
            libro se cierra con una novela corta de <cite>Margaret Weis y Tracy Hickman</cite>, &laquo;Hilos de seda&raquo;, 
            en la que se cuenta la suerte que corrieron los verdaderos clérigos y cómo Nuitari, guardiana de la magia negra, 
            intenta frustar las ambiciones de hechicero túnica negra, conocido como Fistandantilus.</q></blockquote></article>";
}

$paginaElReino = new elReino();
$paginaElReino->setTitulo("El reino de Istar");
$paginaElReino->setEnlace("cienciaFiccion.php");
$paginaElReino->mostrar();