<?php

include 'indexLibros.php';

$paginaSet = new libros();
$paginaSet->setDescription("Revista de voleibol");
$paginaSet->setPalabrasClave("Voley, voleibol, Magaly Carvajal, Juanjo Salvador, superliga, seleccion");
$paginaSet->setTitulo("Voleibol set-nº4");
$paginaSet->setContenidos2("<article id=\"libros\"><p>Edita:</p>&nbsp;Federación Catalana de Voleibol<br/><br/>
    <div class=\"punto\"><h4>Portada:</h4>ENTREVISTAS<br/>Magaly Carvajal<br/>Juanjo Salvador<br/>&#8226<br/>
    Especial Superliga<br/>&#8226<br/>La selección<br/>&#8226<br/>Todo lo que quieres saber sobre tus ídolos<br/>
    </div></article>");
$paginaSet->setEnlace("deportes.php");
$paginaSet->mostrar();