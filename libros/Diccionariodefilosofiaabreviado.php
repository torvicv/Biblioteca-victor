<?php

include ("indexLibros.php");

class diccionario extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>José Ferrater Mora</cite><br/><br/><br/>"
            . "<blockquote><h3>Sinopsis:</h3><q>Este libro es la versión, compendiada por <em>Eduardo García Belsunce</em>"
            . "y <em>Ezequiel de Olaso</em>, del monumental <b>Diccionario de Filosofía</b> de <em>José Ferrater Mora</em>."
            . "&nbsp;De este modo se ofrece en un volumen de manejo cómodo una explicación accesible de los conceptos "
            . "fundamentales de la filosofía. El apéndice histórico proporciona información sobre los movimientos "
            . "filosóficos más importantes desde la antig&uuml;edad hasta nuestros días. Según manifiesta el propio <em>Ferrater"
            . "&nbsp;Mora en el prólogo, &laquo;este Diccionario ostenta ventajas que saltan a la vista: utilidad, facilidad de"
            . "manejo, tersura y lo que cabría llamar \"proporcionalidad\". Esta última es tan notable que la obra mayor"
            . "podría considerarse inclusive como una ampliación y extensión de su abreviatura&raquo;.</q></blockquote>"
            . "</article>";
}

$paginaDiccionario = new diccionario();
$paginaDiccionario->setTitulo("Diccionario de filosofía abreviado");
$paginaDiccionario->setEnlace("filosofia.php");
$paginaDiccionario->mostrar();