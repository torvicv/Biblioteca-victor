<?php

include 'indexLibros.php';

class laSenda extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>David Eddings</cite><p>Colección:</p>&nbsp;
        <em>Crónicas de Belgarath</em><p>Volumen:</p>&nbsp;1<blockquote><h3>Sinopsis:</h3><q>Belgarath el Hechicero 
            atravesó la tenebrosa Ciudad de la Noche bajo la forma de un gran lobo, y guió a Cherek y a sus hijos hacia la 
            torre de hierro de Torak, el dios Maldito. Una vez allí, Belgarath se transformó de nuevo en hombre y condujo 
            a todos hasta los oxidados peldaños de una escalera por la que ningún hombre había subido desde hacia dos mil 
            años.<br/>&nbsp;Llegaron a la cámara donde Torak, el dios mutilado, permanecía adormecido y atormentado por el 
            dolor, con su rostro horriblemente marcado y oculto tras una máscara de hierro, porque al principio de la 
            existencia había querido dominar todo el mundo y para ello se apoderó  del Orbe creado por Aldur.<br/>&nbsp;
            Pasaron ante el dios y llegaron a la estancia donde el Orbe se hallaba oculto y protegido dentro de una urna 
            también de hierro. Cherek urgió a Belgarath a tomar el Orbe, pero el Hechicero se negó. &laquo;Yo no puedo 
            tocarlo. Si cualquier hombre con el más leve asomo de maldad en su interior trata de hacerlo, el Orbe lo 
            destruirá de la misma manera que quemó a Torak. Sólo un ser de corazón puro podrá cogerlo para protegernos a 
            todos del dios Maldito&raquo;.<br/>&nbsp;Con <em>La senda de la profecía</em> se inician las inquietantes y 
            extensas <b>Crónicas de Belgarath</b>, una espléndida epopeya que se inserta en la historia de siete mil años 
            de luchas entre dioses, reyes y hombres, de tierras extrañas y sucesos misteriosos, de destinos y profecías 
            que deben cumplirse irremisiblemente.<br/>&nbsp;David Eddings, autor de fama reconocida en el género de la 
            novela fantástica, ha sabido crear una magna narración épica de ambiciosas proporciones.</q></blockquote></article>";
}

$paginaLaSenda = new laSenda();
$paginaLaSenda->setTitulo("La senda de la profecía");
$paginaLaSenda->setEnlace("cienciaFiccion.php");
$paginaLaSenda->mostrar();