<?php

include 'indexLibros.php';

$paginaElCatala = new libros();
$paginaElCatala->setDescription("Libro para aprender catalán");
$paginaElCatala->setPalabrasClave("Libro, diccionario, catala, catalan, facil");
$paginaElCatala->setTitulo("El Català és fàcil");
$paginaElCatala->setEnlace("varios.php");
$paginaElCatala->setContenidos2("<article id=\"libros\"><p>Autor:</p>&nbsp;<cite>Josep <abbr title=\"Maria\">Mª
        </abbr> Espinàs</cite><p>Editorial:</p>&nbsp;CEDAG<blockquote><div id=\"tamañoletras\">Libro para aprender 
        Catalán</div></blockquote></article>");
$paginaElCatala->mostrar();