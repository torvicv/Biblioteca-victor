<?php

include 'indexLibros.php';

$paginaSetenta = new libros();
$paginaSetenta->setDescription("Setenta años de liga de futbol 1929-1999");
$paginaSetenta->setPalabrasClave("liga, futbol, 1929/1999, as");
$paginaSetenta->setTitulo("Setenta años de liga-colección as");
$paginaSetenta->setContenidos2("<article id=\"libros\"><p>Edita:</p>&nbsp;Diario as<div class=\"punto\">
        <h4>Temario:</h4>Los 40 principales<br/>&#8226<br/>Los pleitos<br/>&#8226<br/>Las tácticas
    <br/>&#8226<br/>Los extranjeros y los oriundos<br/>&#8226<br/>Los ritos<br/>&#8226<br/>Los duros y los 
    violentos<br/>&#8226<br/>Las modas<br/>&#8226<br/>Los tránsfugas<br/>&#8226<br/>Los fichajes<br/>&#8226<br/>
    Las familias<br/>&#8226<br/>El lenguaje<br/>&#8226<br/>Las sociedades<br/>&#8226<br/>El gol
    <br/>&#8226<br/>Las imágenes<br/>&#8226<br/>La publicidad<br/>&#8226<br/>La radio, el cine y la televisión
    <br/>&#8226<br/>Los dirigentes<br/>&#8226<br/>El reglamento<br/>&#8226<br/>Los récords<br/></div></article>");
$paginaSetenta->setEnlace("deportes.php");
$paginaSetenta->mostrar();