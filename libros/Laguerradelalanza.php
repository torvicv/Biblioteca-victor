<?php

include 'indexLibros.php';

class laGuerrade extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Margaret Weis y Tracy Hickman</cite><p>Colección:
        </p>&nbsp;<em>Cuentos de la Dragonlance-segunda trilogía</em><p>Volumen:</p>&nbsp;3<blockquote><h3>Sinopsis:</h3>
            <q>La Guerra de la Lanza... Krynn se ve desgarrado por el terrible conflicto que enfrenta a los esbirros de 
            Takhisis, Reina de la Oscuridad, con los seguidores de Paladine y los dioses del bien. Los Dragones, buenos y 
            malos, chocan en los cielos y un pequeño grupo de amigos, que llegarán a ser conocidos como los héroes de la 
            lanza, luchan por el honor y la libertad.<br/>&nbsp;Este tercer volumen de la segunda trilogía de <em>Cuentos 
            de la Dragonlance</em> recoge diversas historias que ocurrieron en Krynn durante los años de la guerra. Cierra 
            el libro una auténtica exclusiva de <cite>Margaret Weis y Tracy Hicman</cite>, &laquo;la historia que Tasslehoff 
            prometió no contar nunca, nunca, nunca&raquo;.</q></blockquote></article>";
}

$paginaLaGuerrade = new laGuerrade();
$paginaLaGuerrade->setTitulo("La Guerra de la Lanza");
$paginaLaGuerrade->setEnlace("cienciaFiccion.php");
$paginaLaGuerrade->mostrar();