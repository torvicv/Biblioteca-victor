<?php

include 'indexLibros.php';

class kaz extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Richard A. Knaak</cite><p>Colección:</p>&nbsp;
        <em>Héroes de la Dragonlance-segunda trilogía</em><p>Volumen:</p>&nbsp;1<blockquote><h3>Sinopsis:</h3><q>Después de 
            la derrota de la Reina de la Oscuridad y de la muerte de Huma, primer Lancero, paladín de la Orden de la 
            Corona y el más famoso de los Caballeros de Solamnia, el renegado minotauro Kaz recorre todo Krynn explicando 
            la verdadera historia de Huma, el héroe más legendario del país, acechado por sus enemigos. Kaz es un alma 
            perseguida, un proscrito y también un valiente. Pero, cuando oye rumores de nefastos sucesos, regresa para 
            advertir del peligro a los Caballeros de Solamnia... y se ve inmerso en una angustiosa pesadilla de magia, 
            riesgos y viejas situaciones que se repiten.</q></blockquote></article>";
}

$paginaKaz = new kaz();
$paginaKaz->setTitulo("Kaz, el minotauro");
$paginaKaz->setEnlace("cienciaFiccion.php");
$paginaKaz->mostrar();