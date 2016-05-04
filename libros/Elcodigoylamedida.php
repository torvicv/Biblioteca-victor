<?php

include 'indexLibros.php';

class elCodigo extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Michael Williams</cite><p>Colección:</p>&nbsp;
        <em>Los compañeros de la Dragonlance</em><p>Volumen:</p>&nbsp;4<blockquote><h3>Sinopsis:</h3><q>Desoyendo los 
            consejos de Raistlin y Caramon, Sturm Brightblade acude a una ceremonia anual solámnica que es interrumpida 
            por un reto extraño y escarnecedor... Pistas del pasado. Muerte.<br/>&nbsp;Una vez aceptado el misterioso 
            desafío, el joven Sturm debe emprender un peligroso viaje en el que lo acompañan unos curiosos amigos. En su 
            aventura, intentará rescatar a una bella, aunque melindrosa, doncella. Derrotar a un caballero traidor y 
            descubrir el enigmático destino que corrió su padre. Desaparecido largo tiempo atrás. Además, Sturm tendrá 
            que aprender lo que significa el concepto de &laquo;honor&raquo;.</q></blockquote></article>";
}

$paginaElCodigo = new elCodigo();
$paginaElCodigo->setTitulo("El código y la medida");
$paginaElCodigo->setEnlace("cienciaFiccion.php");
$paginaElCodigo->mostrar();