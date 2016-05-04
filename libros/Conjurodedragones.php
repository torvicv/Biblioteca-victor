<?php

include 'indexLibros.php';

class conjuro extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Jean Rabe</cite><p>Colección:</p>&nbsp;
        <em>Quinta era</em><p>Volumen:</p>&nbsp;3<blockquote><h3>Sinopsis:</h3><q>Malystryx y Khellendros, los más 
                poderosos de entre los dragones, se desviven cada uno a su manera por obtener el control definitivo sobre 
                Ansalon. El Dragón Azul conspira contra Malys, en un intento de obtener el suficiente poder para acceder 
                a El Griseo, y la furia de la hembra Roja ante esa traición resulta gigantesca y abrasadora. La Roja 
                pretende convertirse en diosa agrupando todos los objetos mágicos y sustituir a la Reina Oscura. La pugna 
                entre los malignos dragones y el intento por instaurar el Bien por parte de la nueva generación de héroes 
                configuran el desenlace de la primera trilogía épica sobre la Quinta Era.</q></blockquote></article>";
}

$paginaConjuro = new conjuro();
$paginaConjuro->setTitulo("Conjuro de dragones");
$paginaConjuro->setEnlace("cienciaFiccion.php");
$paginaConjuro->mostrar();