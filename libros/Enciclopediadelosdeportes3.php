<?php

include 'indexLibros.php';

$paginaEnciclopedia3 = new libros();
$paginaEnciclopedia3->setDescription("Enciclopedia de deportes");
$paginaEnciclopedia3->setPalabrasClave("Enciclopedia, deportes, futbol, balonmano, atletismo, ajedrez, karate, "
        . "beisbol, gimnasia");
$paginaEnciclopedia3->setTitulo("Enciclopedia de los deportes 3");
$paginaEnciclopedia3->setContenidos2("<article id=\"libros\"><p>Editorial:</p>&nbsp;Aura<br/><br/><blockquote>
        <div class=\"punto\">Técnicas-Prácticas-Reglamento</div><h3>Prólogo:</h3>La ENCICLOPEDIA DE LOS DEPORTES, 
    crisol en el que se funden y recogen todas las modalidades y disciplinas deportivas que se practican, 
    mayoritariamente , en el mundo entero, tiene un claro propósito: dar a conocer y fomentar el interés por la 
    participacion deportiva desde los años escolares, facilitando las incipientes inclinaciones del muchacho, 
    despertadas por determinada especialidad; divulgando ampliamente sus conocimientos básicos y configurando el 
    camino por el que, a través de las propias condiciones personales, y el aprendizaje de las técnicas y 
    reglamentos, puede llegarse a la formación de unos auténticos deportistas. Con la sana alegría que permite el 
    deporte como ejercicio físico, el hecho de saberse conocedor de las técnicas adecuadas refuerza la moral del 
    practicante, y ésta tendrá una gran importancia en el desarrollo de las competiciones en las que se participe, 
    tanto en el aspecto individual como en el del conjunto de un equipo. Es pues fundamental crear desde la base 
    unos conocimientos claros y precisos que cimenten la personalidad deportiva del ejercitante, ya que el 
    reconocimiento de sus méritos se dará por añadidura. Al legítimo orgullo del deportista por la posesión de 
    unas cualidades reconocidas, podrá sumarse la admiración y el aplauso de los espectadores hacia todos aquellos 
    que, continuadores de los ya tradicionales Juegos Olimpicos de la antigua Grecia, aún vigentes hoy y que se 
    proyectan hacia el futuro, bajo conceptos y formas más modernas y actualizadas, pero indiscutiblemente con 
    mucha mayor concurrencia e interés.<br/>&nbsp;Es nuestro deseo mediante la publicación  de esta obra, 
    contribuir al logro de una juventud más sana, que mediante el conocimiento y la práctica del deporte proyectan 
    unas generaciones veníderas, que sin olvidar los valores del espíritu, se hallan mejor dispuestas y más 
    dotadas fisicamente de cara al porvenir.</blockquote></article>");
$paginaEnciclopedia3->setEnlace("deportes.php");
$paginaEnciclopedia3->mostrar();