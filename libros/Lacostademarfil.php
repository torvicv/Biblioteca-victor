<?php

include 'indexLibros.php';

$paginaLaCosta = new libros();
$paginaLaCosta->setDescription("Libro de aventuras");
$paginaLaCosta->setPalabrasClave("Libro, aventuras, la costa de marfil, Emilio Salgari");
$paginaLaCosta->setEnlace("novelas.php");
$paginaLaCosta->setTitulo("La costa de Marfil");
$paginaLaCosta->setContenidos2("<article id=\"libros\" style=\"overflow: auto\">$paginaLaCosta->instrucciones
         <p>Autor:</p>&nbsp;<cite>Emilio Salgari</cite><p>Serie:</p>&nbsp;Juvenil nº19<p>Editorial:</p>&nbsp;
        P.P.P</article>");
$paginaLaCosta->mostrar2();