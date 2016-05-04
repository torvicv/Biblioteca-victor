<?php

include 'indexLibros.php';

class laCiudad extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>David Eddings</cite><p>Colección:</p>&nbsp;
        <em>Crónicas de Belgarath</em><p>Volumen</p>&nbsp;5<blockquote><h3>Sinopsis:</h3><q>Belgarath, Seda y Garion se 
            dirigen hacia Mallorea, región donde se halla la Ciudad de las Tinieblas, así llamada porque el perverso dios 
            Torak la destruyó y la cubrió con una perpetua nube negra. Entre las ruinas desmoronadas, sólo queda en pie 
            la base de una torre de hierro, la cripta donde Zedar vela el sueño de Torak.<br/>&nbsp;Durante el viaje, los 
            compañeros han de superar un sinfin de dificultades, pero la más grave es su encuentro con los morinds, un 
            pueblo de clanes nómadas que suelen matar a los extraños que atraviesan sus tierras. Belgarath sostiene un 
            duelo mágico contra un morind. En el combate, ambos crean &laquo;apariciones&raquo; de demonios, monstruos con 
            tres o cuatro ojos, siete manos, cientos de dientes, cuerpos cubiertos de escamas... Si alguno de los dos 
            contrincantes titubea durante la lucha, el demonio o monstruo se libera y destruye al hombre que lo creó. Así 
            sucede con el rival de Belgarath que muere a manos de la &laquo;aparición&raquo; a la que dio vida.<br/>&nbsp;
            Cuando por fín llegan a Cthol Mishrak, la Ciudad de las Tinieblas, se produce el catastrófico enfrentamiento 
            entre Garion y Torak para que una vez más se cumpla la profecía.<br/>&nbsp;Con este apasionante quinto volumen 
            acaba la colección <b>Crónicas de Belgarath</b>, pero el camino queda abierto, de modo que los intrépidos 
            personajes podrán vivir nuevas aventuras en la próxima serie que se titulará <b>Crónicas de Mallorea</b>.
            </q></blockquote></article>";
}

$paginaLaCiudad = new laCiudad();
$paginaLaCiudad->setTitulo("La Ciudad de las Tinieblas");
$paginaLaCiudad->setEnlace("cienciaFiccion.php");
$paginaLaCiudad->mostrar();