<?php

include 'indexLibros.php';

class manual extends libros{
    
    var $contenido2 = "<article id=\"libros\"><blockquote><h3>Prologo:</h3><q>Nos encontramos ante la 2ª Edición 
            del Manual del Preparador de Voleibol Nivel 1. Hace cuatro años (temporada 1989-90), cuando un grupo 
            de técnicos andaluces nos propusimos la elaboración del Primer Manual, nuestros objetivos eran los 
            de unificar criterios, establecer pautas concretas de actuación conjunta y sobre todo ofrecer una 
            guía de acción a los jovenes técnicos que se acercaban a nuestro deporte, entonces la tarea nos 
            parecía ardua y difícil. Pasado este tiempo y vistos los resultados, vaya por delante la satisfacción 
            de todos los que colaboramos en que la Primera Edición del Manual del Preparador de Voleibol, diese 
            los frutos deseados.<br/>&nbsp;Con esta 2ª Edición, una aspiración de la Comisión Técnica ha comenzado 
            a cumplirse; el poder actualizar, corregir y aumentar los contenidos que conformaban el diseño de las 
            materias, para ello se han tenido en cuenta las sugerencias siempre acertadas, de los compañeros y 
            compañeras que han impartido los Cursos en las ciudades y pueblos de nuestra Comunidad.<br/>&nbsp;El 
            voley andaluz, está alcanzando día tras día, una deseable mayoría de edad, y a ello entre otras 
            razones ha contribuido la formación y especialización de nuestros técnicos, que han entendido que el 
            trabajo diario, consolidando las etapas de formación, sin pasar de puntillas en aspectos que hemos 
            considerado como básicos, es la mejor manera de no caer en errores y sobre todo la mejor forma de 
            contribuir a la educación de niños/as y adolescentes. Sirva este prólogo como reconocimiento a la 
            labor de las personas que me han precedido en las labores de Dirección y Coordinación Técnica de la 
            Federación Andaluza de Voleibol, José Mª Benabat y Eduardo Fernández-Arroyo.<br/>&nbsp;Los contenidos 
            de este manual, tratan de fundamentar el trabajo con niños/as y jóvenes, en la seguridad de que el 
            deporte fomenta la madurez, el crecimiento y desarrollo, pero sin olvidar que los niños son ante todo 
            niños, considerando que esa es su cualidad más singular. Hay por ello, que establecer factores propios 
            e individuales de dinámica de los esfuerzos, no copiar o reducir entrenamientos de jugadores y equipos 
            ya formados, sino que bajo el principio de la individualización, tratemos de dar a cada uno/a de 
            nuestros jugadores/as, los mejores estímulos en cantidad y calidad.<br/>&nbsp;El preparador de Nivel 1, 
            se encuentra de lleno en el <q>entrenamiento con niños</q>, por lo que una de vuestras preocupaciones 
            debe ser la de dotar a los jugadores/as de una variada formación de base sobre la cual pueda 
            fundamentarse un rendimiento posterior, es decir, se ha de considerar el trabajo diario no como una 
            especialización prematura, sino simplemente como el comienzo temprano de una preparación planeada.
            <br/>&nbsp;El trabajo con niños/as y jóvenes, que en este Manual se trata de dar pautas de actuación 
            y respuestas a muchos de los interrogantes que los entrenadores noveles se realizan, tiene un 
            marcado carácter pedagógico. Los chicos/as deben ser educados en el deporte y a través de juegos 
            y tareas motrices, guiarles en la búsqueda de su propia personalidad. Consideremos que la motivación 
            debe ser el principal motor de las sesiones de aprendizaje y entrenamiento; un programa de trabajo 
            que sólo esté enfocado al progreso técnico y al rendimiento, está condenado al fracaso.<br/>&nbsp;
            Como consejo final a los que os iniciáis en la ciencia del Entrenamiento Deportivo, plantearos que 
            en los períodos de formación físico-técnica-táctica, se han de crear unas bases duraderas para que 
            vuestros jóvenes jugadores estén dispuestos, durante mucho tiempo a confrontarse con el deseo de 
            subir escalones en la escala de valores que el deporte de competición conlleva. El entrenamiento 
            debe ser el camino que guíe a vuestros futuros jugadores, a la consecución de metas de educación 
            y libertad.</q></blockquote></article>";
}

$paginaManual = new manual();
$paginaManual->setTitulo("Manual del Preparador de Voleibol");
$paginaManual->setEnlace("deportes.php");
$paginaManual->mostrar();