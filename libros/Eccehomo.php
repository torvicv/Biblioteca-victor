<?php

include ("indexLibros.php");

class eccehomo extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite><abbr title=\"Friedrich\">F.</abbr>Nietzsche</cite>
        <blockquote><h3>Sinopsis:</h3><q>Libro desconcertante y enigmático, escrito en circunstancias dramáticas (terminado en 
        noviembre de 1888, su autor perdería dos meses después, por completo y para siempre, sus facultades mentales), <b>
        Ecce Homo</b> constituye una recapitulación general de las ideas de Friedrich Nietzsche (1844-1900) y una guía de
        su itinerario intelectual. La presente edición se complementa con una introducción y abundantes notas a cargo de 
        <em>Andrés Sánchez Pascual</em>, traductor asimismo de la obra.</q></blockquote></article>";
}

$paginaEcceHomo = new eccehomo();
$paginaEcceHomo->setTitulo("Ecce Homo");
$paginaEcceHomo->setEnlace("filosofia.php");
$paginaEcceHomo->mostrar();