<?php

include 'indexLibros.php';

class elDragon extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Jean Rabe</cite><p>Colección:</p>&nbsp;
        <em>Quinta era</em><p>Volumen:</p>&nbsp;2<blockquote><h3>Sinopsis:</h3><q>Los grandes dragones amenazan con 
            esclavizar Krynn. Han alterado la tierra por medios mágicos, esculpiendo sus dominios de acuerdo con sus 
            viles inclinaciones, y ahora comienzan a reunir ejércitos de dragones, humanoides y criaturas, fruto de su 
            propia creación. Incluso los antaño orgullosos Caballeros de Takhisis se han unido a sus filas y preparan el 
            ataque contra los ciudadanos de Ansalon. Ésta es la hora más negra para Krynn.<br/>&nbsp;Sin embargo, un 
            puñado de humanos no quiere rendirse. Incitados por el famoso hechicero Palin Majere y armados con una 
            antigua Dragonlance, osan desafiar a los dragones en lo que quizá sea su último acto de valentia.</q>
        </blockquote></article>";
}

$paginaElDragon = new elDragon();
$paginaElDragon->setTitulo("El dragon azul");
$paginaElDragon->setEnlace("cienciaFiccion.php");
$paginaElDragon->mostrar();