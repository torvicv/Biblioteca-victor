<?php

include ("indexLibros.php");

class crepusculodelosidolos extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite><abbr title='Friedrich'>F.</abbr>&nbsp;Nietzsche</cite><br/><br/></br>
        <blockquote><h3>Sinopsis:</h3><q>Terminado durante el verano de 1888, <b>Crepúsculo de los idolos</b>es una 
        completa introducción de conjunto a las &laquo;heterodoxias filosóficas esenciales&raquo; de Friedrich Nietzsche(1844-1900).
        También en el aspecto estilístico constituye este libro una excelente antología, tanto por su lenguaje vivo,
        jovial y agresivo, como por los aforismos de su primera parte. La presente edición se complemnta con una introducción
        y abundantes notas a cargo de <em>Andrés Sánchez Pascual</em>, traductor asimismo de la obra.</q></blockquote></article>";
}
$paginaCrepusculoDeLosIdolos = new crepusculodelosidolos();
$paginaCrepusculoDeLosIdolos->setTitulo("Crepúsculo de los idolos");
$paginaCrepusculoDeLosIdolos->setEnlace("filosofia.php");
$paginaCrepusculoDeLosIdolos->mostrar();