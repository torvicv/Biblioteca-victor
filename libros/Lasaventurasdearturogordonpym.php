<?php

include 'indexLibros.php';

$paginaLasAventuras = new libros();
$paginaLasAventuras->setDescription("Libro de aventuras");
$paginaLasAventuras->setPalabrasClave("Libro, novela, aventuras, arturo gordon pym, clásico");
$paginaLasAventuras->setEnlace("novelas.php");
$paginaLasAventuras->setTitulo("Las aventuras de Arturo Gordon Pym");
$paginaLasAventuras->setContenidos2("<article id=\"libros\"><p>Autor:</p>&nbsp;<cite>Edgar Allan Poe</cite>
    <p>Colección:</p>&nbsp;<em>Clásicos de Aventuras</em><p>Editorial:</p>&nbsp;Legasa<blockquote><h3>Sinopsis:</h3>
        <q>Quizás ninguna obra tan fascinante de Allan Poe como ésta de LAS AVENTURAS DE ARTURO GORDON PYM publicada 
        en 1837, obra inspirada sobre la base de una auténtica expedición a los mares del Sur y uno de los primeros 
        relatos en el que ya el niño es personaje principal de la historia, pero un niño que se enfrenta a 
        situaciones no solamente difíciles sino terribles para conseguir una mayor verosimilitud del relato.<br/>
        &nbsp;Con esta obra, Poe llevó la literatura norteamericana a la fama universal, siendo quizá una de las más 
        influyentes en la literatura europea, sobre todo francesa, de la segunda mitad del siglo XIX.</q></blockquote>
</article>");
$paginaLasAventuras->mostrar();