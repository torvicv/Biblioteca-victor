<?php

include 'indexLibros.php';

$paginaJugando = new libros();
$paginaJugando->setDescription("Libro de relatos originales");
$paginaJugando->setPalabrasClave("Manuel Jiménez Bellón, jugando, desnudo, arena");
$paginaJugando->setEnlace("novelas.php");
$paginaJugando->setTitulo("Jugando desnudo en la arena");
$paginaJugando->setContenidos2("<article id=\"libros\"><p>Autor:</p>&nbsp;<cite>Manuel Jiménez Bellón</cite>
    <p>Editorial:</p>&nbsp;Padilla Libros & Libreros Sevilla<blockquote><h3>Sinopsis:</h3><q><em>Pozo abierto y 
            amargo</em> fue la primera entrega que hizo MANUEL JIMÉNEZ BELLÓN al mundo de la literatura impresa 
        como un acto iniciático que le conduciría por el camino del texto publicado hacia la más descarnada 
        exhibición impúdica de su alma. <em>Jugando desnudo en la arena</em> lo sitúa en el pedestal donde suelen 
        colocarse a las víctimas antes de su inmolación. A él no le importan los juicios tendenciosos o 
        interesados, postula en la fe a la verdad y es capaz de sentir en hueso propio la fractura del ajeno.
        <br/>&nbsp;Este ejercicio de pasión por la escritura será prolongado en MANUEL JIMÉNEZ BELLÓN mientras 
        la gente y él mismo nos rompamos la cabeza intentando entender esta vida tan pródiga, por que de la otra 
        no podemos hablar, afortunadamente.</q></blockquote></article>");
$paginaJugando->mostrar();