<?php

include 'indexLibros.php';

class lasPuertas extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Dan Parkinson</cite><p>Colección:</p>&nbsp;
        <em>Héroes de la Dragonlance-segunda trilogía</em><p>Volumen:</p>&nbsp;2<blockquote><h3>Sinopsis:</h3><q>Según la 
            leyenda, a gran profundidad debajo de la fortaleza del Monte de la Calavera se hallan los restos del diabólico 
            hechicero Fistandantilus y el camino que conduce a las puertas de Thorbardin, reino de los enanos.<br/>&nbsp;
            Enterrado en alguna parte de ese peligroso sendero, está el yelmo mágico de Grallen, hijo del rey Duncan, 
            infortunado héroe de la Guerra de Dwarfgate. El descubridor del yelmo de Grallen sera premiado y honrado con 
            un Thorbardin unido, pero al mismo tiempo abrirá las puertas del reino a nuevos horrores y al caos. Y la leyenda 
            se va a cumplir.</q></blockquote></article>";
}

$paginaLasPuertas = new lasPuertas();
$paginaLasPuertas->setTitulo("Las puertas de Thorbardin");
$paginaLasPuertas->setEnlace("cienciaFiccion.php");
$paginaLasPuertas->mostrar();