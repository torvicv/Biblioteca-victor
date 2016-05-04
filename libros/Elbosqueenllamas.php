<?php

include 'indexLibros.php';

$paginaElBosque = new libros();
$paginaElBosque->setDescription("Libro de aventuras");
$paginaElBosque->setPalabrasClave("Libro, novela, aventuras, J. Oliver Curwood, clásico");
$paginaElBosque->setEnlace("novelas.php");
$paginaElBosque->setTitulo("El bosque en llamas");
$paginaElBosque->setContenidos2("<article id=\"libros\"><p>Autor:</p>&nbsp;<cite><abbr title=\"James\">J.</abbr> Oliver Curwood</cite>
    <p>Colección:</p>&nbsp;<em>Clásicos de Aventuras</em><p>Editorial:</p>&nbsp;Lagasa<blockquote><h3>Sinopsis:</h3>
        <q>En la vasta soledad de los bosques canadienses, Carrigan, se encuentra ante un hombre que, emboscado, le 
        apunta con un rifle... He aquí la aventura. Y el mundo soñado en todas las infancias. El reno, el lince, 
        grajos al sol, la Real Policía Montada del Canada... Escrita en 1921. EL BOSQUE EN LLAMAS es una de las 
        mejores obras y al tiempo casi el canto del cisne del western novelado. Será el cine quien a partir de 
        aquí tome el género para mitificarlo y universalizarlo.<br/>&nbsp;&laquo;Carrigan, el protagonista de esta 
        novela, marcha de la mano de Tarzán, de Sandokán, de tantos y tantos héroes de aventuras, cuando física y 
        mentalmente se separa de un mundo condenado irremisiblemente a su destrucción&raquo; escribe en su 
        introducción Jesús Martinez Sánchez, autor de la edición de esta fundamental obra de James Oliver Curwood.
        </q></blockquote></article>");
$paginaElBosque->mostrar();