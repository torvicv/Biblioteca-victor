<?php

include ("indexLibros.php");

class elManifiesto extends libros{
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Carlos Marx/Federico Engels</cite><br/><br/><br/>
        <blockquote><h3>Sinopsis:</h3><q>Las armas con que la burguesía derribó al feudalismo se vuelven ahora contra ella
        . Y la burguesía no solo forja las armas que han de darle la muerte, sino que, además, pone en pie a los hombres 
        llamados a manejarlas: estos hombres son los obreros, los proletarios.<br/>
        En la misma proporción en que se desarrolla la burguesía, es decir, el capital, desarróllase también el proletariado
        , esa clase obrera moderna que sólo puede vivir encontrando trabajo y que sólo encuentra trabajo en la medida en que
        çeste alimenta e incrementa el capital. El obrero, obligado a venderse a trozos, es una mercancía como otra 
        cualquiera, sujeta, por tanto, a todos los cambios y modalidades de la concurrencia, a todas la fluctuaciones del
        mercado.</q></blockquote></article>";
}

$paginaElManifiesto = new elManifiesto();
$paginaElManifiesto->setTitulo("El Manifiesto Comunista");
$paginaElManifiesto->setEnlace("filosofia.php");
$paginaElManifiesto->mostrar();