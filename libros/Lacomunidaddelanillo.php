<?php

include 'indexLibros.php';

class laComunidad extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>J.R.R. Tolkien</cite><p>Colección:</p>
        &nbsp;<em>El señor de los Anillos</em><p>Volumen:</p>&nbsp;1<blockquote><h3>Sinopsis:</h3><q>En la 
            adormecida e idílica Comarca, un joven hobbit recibe un encargo: custodiar el Anillo Único y emprender 
            el viaje para su destrucción en las Grietas del Destino. Acompañado por magos, hombres, elfos y enanos, 
            atravesará la Tierra Media y se internará en la sombra del País Oscuro, perseguido siempre por las 
            huestes de Sauron, el Señor Oscuro, dispuesto a recuperar su creación para establecer el dominio 
            definitivo del Mal.</q></blockquote></article>";
}

$paginaLaComunidad = new laComunidad();
$paginaLaComunidad->setTitulo("La comunidad del Anillo");
$paginaLaComunidad->setEnlace("cienciaFiccion.php");
$paginaLaComunidad->mostrar();