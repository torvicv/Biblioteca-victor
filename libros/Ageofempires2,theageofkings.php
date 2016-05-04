<?php

include 'indexLibros.php';

$paginaKings = new libros();
$paginaKings->setDescription("Manual de age of empires 2");
$paginaKings->setPalabrasClave("Manual, age of empires 2, juego, pc");
$paginaKings->setEnlace("varios.php");
$paginaKings->setTitulo("Age of empires 2, the age of kings");
$paginaKings->setContenidos2("<article id=\"libros\" style=\"overflow: auto\">$paginaKings->instrucciones
    <p>Edita:</p>&nbsp;Microsoft<p>Manual de usuario del juego age of empires 2, the age of kings ;y age of 
    empires 2, the conquerors expansion</p></article>");
$paginaKings->mostrar2();