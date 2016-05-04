<?php

include 'indexLibros.php';

class enElTorbellino extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Marc Gascoigne-Andy Jones</cite>
        <p>Colección:</p><em>Warhammer</em><blockquote><h3>Sinopsis:</h3><q>&laquo;El ejército del Caos había 
            viajado desde todos los continentes, desde todas las ciudades demolidas, desde todos los sectores 
            destruidos de Ilium, para reunirse en aquel páramo desértico que en otra época había sido el centro 
            de control de la guarnición imperial. La arena había sido calcinada y fundida en un último acto de 
            inútil desafio: la detonación del resto de las armas nucleares del Imperio.&raquo;<br/><br/><pre>
                De Infierno embotellado,
                por <em>Simon Jowett</em>
            </pre><br/><br/>En el futuro de pesadilla de WARHAMMER 40.000, la humanidad se encuentra al borde 
            de la extinción. <em>En el Torbellino</em> es una colección de doce relatos repletos de acción, 
            ambientados en ese universo tenebroso.</q></blockquote></article>";
}

$paginaEnElTorbellino = new enElTorbellino();
$paginaEnElTorbellino->setTitulo("En el Torbellino");
$paginaEnElTorbellino->setEnlace("cienciaFiccion.php");
$paginaEnElTorbellino->mostrar();