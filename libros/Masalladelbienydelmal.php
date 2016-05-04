<?php

include ("indexLibros.php");

class masalla extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite><abbr title=\"Friedrich\">F.</abbr>Nietzsche</cite>
        <blockquote><h3>Sinopsis:</h3><q>Si bien <b>Más allá del bien y del mal</b> (1886) retoma elementos e ideas de 
        <b>Así habló Zaratustra</b> profundizando en ellos, presenta un tratamiento de los mismos completamente distinto.
        Entre una y otra obra hay, fundamentalmente, un reajuste de la mirada: el paso del símbolo al concepto, de la 
        poesía a la psicología, de la confianza a la sospecha, de la lejanía que permite dejar de lado los defectos a la óptica 
        microscópica que pone de relieve las miserias; un reajuste que permite a Friedrich Nietzsche (1844-1900) dar un paso
        más en la radicalidad de su pensamiento filosófico.</q></blockquote></article>";
}

$paginaMasAlla = new masalla();
$paginaMasAlla->setTitulo("Más alla del bien y del mal");
$paginaMasAlla->setEnlace("filosofia.php");
$paginaMasAlla->mostrar();