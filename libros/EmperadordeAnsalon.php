<?php

include 'indexLibros.php';

class elEmperador extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Douglas Niles</cite><p>Colección:</p>&nbsp;
        <em>Villanos de la Dragonlance</em><p>Volumen:</p>&nbsp;Libro suelto<blockquote><h3>Sinopsis:</h3><q>Grandes 
            ejército recorren Krynn, extendiendo las sombras de maléficos reptiles por la tierra, y todas estas horribles 
            huestes cumplen las órdenes de un hombre: Ariakas, el Emperador de Ansalon. Guerrero, mago, noble, rey... ha 
            obtenido la gloria y el poder por encima de los cadáveres de sus enemigos y en su ascensión cuenta con la 
            ayuda de Takhisis, su poderosa señora. Sin embargo, cuando la victoria definitiva del Mal está a punto de 
            producirse, Ariakas deberá controlar su ambición o enfrentarse en persona a la Reina de la Oscuridad.</q>
            </blockquote></article>";
}

$paginaElEmperador = new elEmperador();
$paginaElEmperador->setTitulo("Emperador de Ansalon");
$paginaElEmperador->setEnlace("cienciaFiccion.php");
$paginaElEmperador->mostrar();