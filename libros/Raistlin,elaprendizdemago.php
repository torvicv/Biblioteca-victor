<?php

include 'indexLibros.php';

class elAprendiz extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Margaret Weis</cite><p>Colección:</p>&nbsp;
        <em>La forja de un túnica negra</em><p>Volumen:</p>&nbsp;1<blockquote><h3>Sinopsis:</h3><q>Raistlin Majere tiene seis 
            años cuando conoce a un archimago que lo inscribe en una escuela de hechiceria. Allí, el atormentado niño 
            descubre sus dotes para la magia, y también que en ella puede encontrar su salvación. Y aunque Raistlin no lo 
            sabe, desde la Torre de la Alta Hechiceria, los magos lo vigilan en secreto, porque negras nubes se adivinan en 
            el horizonte de Krynn.<br/>&nbsp;<cite>Margaret Weis</cite>, coautora con <cite>Tracy Hickman</cite> de las 
            <em>Crónicas y Leyendas de la Dragonlance</em> retoma la pluma para escribir sobre su personaje favorito, Raistlin 
            Majere, y contar la historia de cómo se forjó el alma del hechicero en la Torre de Wayreth.</q></blockquote></article>";
}

$paginaElAprendiz = new elAprendiz();
$paginaElAprendiz->setTitulo("Raistlin, el aprendiz de mago");
$paginaElAprendiz->setEnlace("cienciaFiccion.php");
$paginaElAprendiz->mostrar();