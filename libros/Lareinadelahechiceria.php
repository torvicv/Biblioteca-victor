<?php

include 'indexLibros.php';

class laReina extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>David Eddings</cite><p>Colección:</p>&nbsp;
        <em>Crónicas de Belgarath</em><p>Volumen:</p>&nbsp;2<blockquote><h3>Sinopsis:</h3><q>Cuando por fín los hijos de 
            Cherek arrebataron el Orbe al dios Maldito, Belgarath se lo confió a uno de ellos, a Riva, y le dijo que 
            mientras el Orbe estuviera en manos de sus descendientes, las tierras del Oeste permanecerían a salvo. Sin 
            embargo, el Orbe es robado del salón del trono de Riva y es entonces cuando Belgarath y su hija Polgara, 
            acompañados del pequeño Garion, inician el interminable viaje en busca del preciado y, a la vez, conflictivo 
            objeto.<br/>&nbsp;Más, ahora, Garion siente una desesperada añoranza. Su infancia se escabulle, y, aunque lo 
            intenta con todas sus fuerzas, no puede aferrarse a ella. Todo está cambiando. Polgara ya no es la que hacía 
            las veces de madre solícita, sino la hechicera que había sobrevivido al paso de cuatro siglos con un objetivo 
            que iba más allá de la comprensión de los mortales. Y el señor Lobo, el viejo vagabundo y narrador de historias, 
            es ahora el hechicero que habia vigilado y aguardado, testigo de la necedad de los hombres y de los dioses, 
            durante siete mil años.<br/>&nbsp;Y Garion, ¿qué ocurría con él? El muchacho, que hasta hacía poco era sólo un 
            mozo de granja, se convierte en protagonista. Nunca había creído en la hechicería y se negaba a participar en 
            ella, pero a medida que viajaban su poder crecía y lo obligaba a participar en actos de magia que no quería 
            aceptar. Su desorientació es profunda cuando, con la marca que tiene en la palma de la mano, quema a un 
            individuo que se ha atrevido a insultar a Polgara.<br/>&nbsp;Así discurre el segundo volumen de las <b>
            Crónicas de Belgarath</b>, continuando la apasionante historia comenzada en <em>La senda de la profecia</em>
             y ofreciéndonos la evolución de unos personajes que se hacen entrañables y cuyas aventuras el lector 
            seguirá paso a paso hasta descubrir su destino y la profecía que debe hacerse realidad.</q></blockquote></article>";
}

$paginaLaReina = new laReina();
$paginaLaReina->setTitulo("La reina de la hechicería");
$paginaLaReina->setEnlace("cienciaFiccion.php");
$paginaLaReina->mostrar();