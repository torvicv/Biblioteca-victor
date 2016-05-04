<?php

include 'indexLibros.php';

class hierro extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Margaret Weis</cite><p>Colección:</p>&nbsp;
        <em>La Discípula Oscura</em><p>Volumen:</p>&nbsp;2<blockquote><h3>Sinopsis:</h3><q>El mundo de Krynn no cesa de 
            cambiar e incluso los dioses pueden verse sorprendidos. Y si eso ocurre con ellos, ¿qué oportunidades puede 
            tener un simple mortal? Atrapados por unas fuerzas a las que ninguno de ellos podría enfrentarse solo, un 
            pequeño pero decidido grupo de aventureros se unen en un esfuerzo desesperado para evitar una invasión.<br/>
            &nbsp;Mina, tan enigmática como siempre, logra escapar para emprender una búsqueda que pondrá a prueba su 
            voluntad. Mientras tanto, el mal se extiende por el mundo, ganando terreno día a día. Cuando incluso el alma 
            de Krynn está en juego, hay que encontrar héroes aun en los lugares más oscuros.</q></blockquote></article>";
}

$paginaHierro = new hierro();
$paginaHierro->setTitulo("Ámbar y Hierro");
$paginaHierro->setEnlace("cienciaFiccion.php");
$paginaHierro->mostrar();