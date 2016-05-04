<?php

include 'indexLibros.php';

class elCastillo extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>David Eddings</cite><p>Colección:</p>&nbsp;
        <em>Crónicas de Belgarath</em><p>Volumen:</p>&nbsp;4<blockquote><h3>Sinopsis:</h3><q>Después de la muerte de Ctuchik 
            se produjo un terremoto que destruyó la ciudad de Rak Cthol. Garion y sus amigos han de huir de Cthol Murgos 
            mientras los nueve jerarcas de los grolims los persiguen con el poder de sus mentes. Pero la sombra de Garion 
            viaja hasta el castillo donde aquéllos están reunidos y allí se produce una escena escalofriante:<br/>&nbsp;
            &nbsp;<q>Garion se aproximó y atravesó con su puño de sombra el pecho del grolim. Pudo percibir los latidos de 
            su corazón y la convulsión de sus pulmones mientras el jerarca contemplaba boquiabierto de horror el brazo que 
            salía de su pecho.<br/>&nbsp;&nbsp;--¿Vais a dejarnos en paz? --preguntó Garion, y de repente apretó el puño.
            <br/>&nbsp;&nbsp;El jerarca gimió de dolor.</q><br/>&nbsp;Una vez logran liberarse de los grolims, Garion y sus 
            amigos se encaminan hacia Riva, lugar donde el muchacho ha de descubrir a qué linaje pertenece y qué futuro le 
            espera. Pero debían apresurarse para llegar hasta allí con el Orbe antes de la celebración del Paso de las Eras, 
            y la travesía por el desierto, perseguidos por los soldados murgos, era sumamente peligrosa.<br/>&nbsp;Garion 
            estaba convencido de que en Riva acabaría su intervención en aquellos trascendentales hechos, pero la profecía 
            aún guardaba increibles sorpresas para él y para la princesa Ce'Nedra.<br/>&nbsp;Con <em>El castillo de la 
            Magia</em> continúa la gran epopeya de las <b>Crónicas de Belgarath</b> que ya está proxima a su fín. Como 
            en los anteriores volúmenes las aventuras se suceden sin cesar y poco a poco se va esclareciendo el destino 
            de sus protagonistas.</q></blockquote></article>";
}

$paginaElCastillo = new elCastillo();
$paginaElCastillo->setTitulo("El castillo de la Magia");
$paginaElCastillo->setEnlace("cienciaFiccion.php");
$paginaElCastillo->mostrar();