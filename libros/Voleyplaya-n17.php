<?php

include 'indexLibros.php';

$paginaPlaya = new libros();
$paginaPlaya->setDescription("Revista de voleyplaya");
$paginaPlaya->setPalabrasClave("Voleyplaya, voley, voleibol, Bosma, Herrera");
$paginaPlaya->setTitulo("Voleyplaya nº17");
$paginaPlaya->setContenidos2("<article id=\"libros\"><p>Editorial:</p>&nbsp;Voley Playa S.L.<br/><br/><div class=\"punto\">
    <h4>Temario:</h4>Bosma-Herrera Campeones<br/>&#8226<br/>Superliga 03-04<br/>&#8226<br/>Liga Mundial 2004<br/>&#8226<br/>
    World Tour 2004<br/>&#8226<br/>Pepe Díaz<br/>&#8226<br/>AVP 2004<br/>&#8226<br/>Madrid 2012<br/><br/>
    </div><blockquote><h3>Editorial</h3><p><b>Poco bueno en este deporte</b></p><q>Y es que salvo las alegrías en el 
        voley playa internacional que nos han dado Javier Bosma y Pablo Herrera ganando en China , en el 
        europeo y viajando a Atenas, nada nos hace mantener la ilusión en nuestro querido voley.<br/>La 
        milagrosa y espectacular recuperación de Herrera y la calidad y experiencia de Bosma, han conseguido un 
        logro por el que nadie apostaba antes del comienzo de temporada. Por que ¿se acuerdan en las más altas 
        instituciones de este deporte de la playa?<br/>Poco interés demuestran cuando a buenas horas se ha 
        cerrado el circuito nacional, cuando las dificultades para organizarse  la ruta de la competición es 
        tarea más que complicada. Así se pierde el entusiasmo y se deja de lado el esfuerzo invernal, por que 
        luego no sirve de nada. Y además de disfrutar, también hay que vivir y lamentablemente de esto no se 
        vive.<br/>Y si por lo menos en pista tuvieramos mejores resultados, se encontraría un supuesto motivo 
        de dejadez. Lo único que han conseguido es la indeferencia y el abucheo de los pocos seguidores que 
        va dejando esta política desorientada de llevar el deporte.<br/>Menos mal que apasionados como nosotros 
        sigue habiendo y esperemos que por mucho tiempo.</q></blockquote></article>");
$paginaPlaya->setEnlace("deportes.php");
$paginaPlaya->mostrar();