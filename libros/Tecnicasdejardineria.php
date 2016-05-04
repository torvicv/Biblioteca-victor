<?php

include 'indexLibros.php';

$paginaTecnicas = new libros();
$paginaTecnicas->setDescription("Libro de tecnicas de jardineria");
$paginaTecnicas->setPalabrasClave("Jardin, jardineria, tecnicas, suelo, cultivo, diseño, construccion, "
        . "herramientas, maquinas, recipiente, recuperacion");
$paginaTecnicas->setTitulo("Técnicas de jardineria");
$paginaTecnicas->setContenidos2("<article id=\"libros\"><p>Autor:</p>&nbsp;<cite>Alan Titchmarsh</cite><div 
        class=\"punto\"><h4>Sumario</h4>EL SUELO<br/>&#8226<br/>EL CULTIVO DE PLANTAS<br/>&#8226<br/>DISEÑO Y 
    CONSTRUCCION DEL JARDÍN<br/>&#8226<br/>HERRAMIENTAS Y MÁQUINAS<br/>&#8226<br/>CULTIVOS EN RECIPIENTE
    <br/>&#8226<br/>RECUPERACIÓN<br/>&#8226<br/>TÉCNICAS ESPECIALES<br/>&#8226<br/>LA VIDA EN EL JARDIN
    </div></article>");
$paginaTecnicas->setEnlace("jardineria.php");
$paginaTecnicas->mostrar();