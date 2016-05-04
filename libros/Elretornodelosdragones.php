<?php

include ("indexLibros.php");

class elRetorno extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Margaret Weis y Tracy Hickman</cite><p>
            Colección:</p>&nbsp;Crónicas de la dragonlance<p>Volumen:</p>&nbsp;1<blockquote><h3>Sinopsis:</h3><q>Son 
            amigos de toda la vida que siguieron caminos distintos. Ahora vuelven a reunirse, aunque cada uno oculta a los
            demás algún secreto particular. Hablan de un mundo sobre el que se cierne la sombra de la guerra, cuentan
            historias de extraños monstruos, de criaturas mítica forjadas en la leyenda, pero no dicen nada de sus secretos
            . Al menos, no por el momento. No los revelarán hasta que se encuentren con una hermosa y enigmática mujer, que
            porta una vara mágica. Ella hará que el grupo de amigos se vea inmerso en las sombras, y que sus vidas cambien
            para siempre, al tiempo que forjan el destino del mundo.<br/>Nadie esperaba que fueran unos héroes. Y ellos, 
            menos que nadie.</q></blockquote></article>";
}

$paginaElRetorno = new elRetorno();
$paginaElRetorno->setTitulo("El retorno de los dragones");
$paginaElRetorno->setEnlace("cienciaFiccion.php");
$paginaElRetorno->mostrar();