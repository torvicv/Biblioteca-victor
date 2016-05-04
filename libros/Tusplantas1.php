<?php

include 'indexLibros.php';

$paginaTusPlantas1 = new libros();
$paginaTusPlantas1->setDescription("fichero de plantas");
$paginaTusPlantas1->setPalabrasClave("jardineria, plantas, fichero");
$paginaTusPlantas1->setTitulo("Tus Plantas 1");
$paginaTusPlantas1->setEnlace("jardineria.php");
$paginaTusPlantas1->setContenidos2("<article id=\"libros\"><p>Autor:</p>&nbsp;<cite>Jorge Montoro</cite>
    <p>Desde <b>A</b> a <b>Ca</b></p>
    <blockquote><h3>Presentación:</h3><q>&laquo;Tus plantas&raquo;: una obra moderna, práctica y sencilla, 
        dedicada a los amigos de las flores; a los que viven en una ciudad gris, y desean que su casa sea verde; 
        a los que saben que no pierden el tiempo mientras plantan un geranio o riegan un rosal; a los que 
        disfrutan viendo el estallar de una fucsia en primavera; a los que creen que, de ventanas adentro, no 
        hay cuadro que supere a una hermosa maceta; a los que sueñan con tener un huerto; a los que sienten el 
        paso de las estaciones como algo que les afecta muy personalmente.<br/>&nbsp;Sencillísima de manejar, 
        nuestra obra pone a su alcance, en forma de fichero, una magnífica selección de plantas, aptas para la 
        casa o el jardín, con toda la información necesaria para cuidarlas. Y ofrece una detallada explicación, 
        paso a paso, de las técnicas más importantes de la jardinería doméstica. &laquo;Tus plantas&raquo; es 
        por consiguiente un notable esfuerzo de síntesis y realización, que la redacción de Greca ha llevado a 
        cabo poniendo en juego sus mejores medios, porque cree en la calidad del valor que promociona: la 
        naturaleza.</q></blockquote></article>");
$paginaTusPlantas1->mostrar();