<?php

include 'indexLibros.php';

$paginaDelCannabis = new libros();
$paginaDelCannabis->setDescription("Sobre el cannabis y su cultivo");
$paginaDelCannabis->setPalabrasClave("Cannabis, cultivo, semillas, cañamo, riego, plantas, macetas");
$paginaDelCannabis->setTitulo("Del cannabis y su cultivo");
$paginaDelCannabis->setContenidos2("<article id=\"libros\"><blockquote><h3>Introducción:</h3><q>Resurge en este fin 
    de siglo el interés por ebriedades no alcohólicas. Entre ellas destaca el cáñamo. alias marihuana, la más 
    popular de las plantas psicoactivas.<br/>&nbsp;Dado que su cultivo es relativamente fácil, puede convertirse en una 
    afición con la que llenar horas muertas. La yerba cultivada por uno mismo carece de precio. Y a la satisfacción 
    personal de ver recompensada una tarea con su fruto, debe añadirse la alegría extra por sabotear el interés de 
    los narcos.<br/>&nbsp;Hoy, plantar una semilla de la que nace una planta prohibida, y exhibirla en el balcón, terraza 
    o jardín, es un acto de desobediencia farmacológica. Es rebelarse contra la persecución de ebriedades milenarias. 
    Es reclamar el derecho a cultivar un vegetal que el hombre viene plantando desde hace varios miles de años. Es 
    practicar activamente la sedición en materia de ebriedades.<br/>&nbsp;Conviene también estar preparado para las 
    decepciones, algunas plantas pueden morir. Pero quien persiste encuentra siempre nuevos motivos para continuar 
    con su hobby. No desanimarse, y si la primera vez el asunto no marcha muy bien, no dejar de intentarlo otra vez. 
    Los cultivadores suelen estar de acuerdo en que sólo la experiencia acumulada tras algunas cosechas proporciona 
    las indicaciones precisas sobre cómo actuar lo mejor posible dentro del particular microclima en que se 
    cultiva.<br/>&nbsp;Cultivar yerba de mediana o alta calidad no es empresa muy difícil. Requiere, como muchas cosas, 
    una etapa de aprendizaje que cada vez más superan con gran éxito.<br/>&nbsp;Con este manual, escueto y básico, se 
    pretende animar y orientar a todos aquellos interesados en el cultivo de tan preciado vegetal.</q></blockquote>
</article>");
$paginaDelCannabis->setEnlace("jardineria.php");
$paginaDelCannabis->mostrar();