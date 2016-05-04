<?php

include 'indexLibros.php';

$paginaJuan = new libros();
$paginaJuan->setDescription("Relato de la vida de una gaviota");
$paginaJuan->setPalabrasClave("Libro, gaviota, novela, Juan Salvador Gaviota, relato");
$paginaJuan->setEnlace("novelas.php");
$paginaJuan->setTitulo("Juan Salvador Gaviota");
$paginaJuan->setContenidos2("<article id=\"libros\"><p>Autor:</p>&nbsp;<cite>Richard Bach</cite><p>Editorial:</p>
    &nbsp;Pomaire<blockquote><h3>Sinopsis:</h3><q>Hay quien obedece a sus propias reglas porque se sabe en lo 
        cierto, quien cosecha un especial placer en hacer algo bien; quien adivina algo más que lo que sus ojos 
        ven; quien prefiere Volar a comprar y comer; todos ellos harán duradera amistad con Juan Salvador 
        Gaviota.<br/>&nbsp;Habrá también quienes volarán con Juan Gaviota por lugares de 
        encanto y aventura, y de luminosa libertad. Pero para unos y otros será una experiencia que jamas 
        olvidarán.</q></blockquote></article>");
$paginaJuan->mostrar();