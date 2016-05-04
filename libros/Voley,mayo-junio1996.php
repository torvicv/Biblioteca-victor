<?php

include 'indexLibros.php';

$paginaVoley = new libros();
$paginaVoley->setDescription("Voley, mayo-junio 1996 VII Liga Mundial");
$paginaVoley->setPalabrasClave("Voley, voleibol, mayo, junio, 1996, Liga Mundial, FEVB");
$paginaVoley->setTitulo("Voley, mayo-junio 1996");
$paginaVoley->setContenidos2("<article id=\"libros\" style=\"overflow: auto; text-align: center; position: "
        . "relative\">$paginaVoley->instrucciones<div style=\"position: absolute;left: 0%;top: 50%; "
        . "width: 100%\">VII Liga Mundial</div></article>");
$paginaVoley->setEnlace("deportes.php");
$paginaVoley->mostrar2();