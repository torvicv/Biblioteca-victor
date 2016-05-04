<?php

include 'indexLibros.php';

$paginaAge = new libros();
$paginaAge->setDescription("Manual del juego Age of empires y la expansión El auge de Roma");
$paginaAge->setPalabrasClave("Juego, pc, age of empires, el auge de Roma, microsoft");
$paginaAge->setEnlace("varios.php");
$paginaAge->setTitulo("Age of empires y El auge de Roma");
$paginaAge->setContenidos2("<article id=\"libros\"><p>Edita:</p>&nbsp;Microsoft<blockquote><div id=\"tamañoletras\">
            Manual del juego de pc <em>Age of empires</em>.<br/>Un juego épico para crear y conquistar imperios.</div>
    </blockquote></article>");
$paginaAge->mostrar();