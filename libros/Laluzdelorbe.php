<?php

include 'indexLibros.php';

class laLuz extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>David Eddings</cite><p>Colección:</p>&nbsp;
        <em>Crónicas de Belgarath</em><p>Volumen:</p>&nbsp;3<blockquote><h3>Sinopsis:</h3><q>Ce'Nedra, la princesa 
            imperial de Tolnedra, estaba desconcertada porque todo el mundo sabía que las historias sobre el Orbe, que 
            protegía del diabólico dios Torak a los reinos del Oeste, eran simples leyendas, pero allí estaba ella, 
            envuelta en una peligrosa misión para recuperar el Orbe robado.<br/>&nbsp;En segundo lugar, también le 
            desconcertaba la atracción que sentía por Garion, aquel muchacho que no era más que un humilde granjero, 
            indigno de una princesa. Sin embargo, ¿por qué percibía aquella imperiosa necesidad de educarlo, de acariciar 
            su cabello enmarañado y de consolarlo? Ahora, el joven se dirigía a una extraña torre, símbolo de todo lo que 
            él consideraba maligno, para enfrentarse a un temible y poderoso mago. Garion podía morir y ella nunca volvería 
            a verlo, pero no había posibilidad de protegerlo.<br/>&nbsp;Sin embargo, las palabras de Aldur y de lord Mara, 
            dios de Maragor, habían dado a entender veladamente que Garion sería más poderoso que Polgara y que el mismo 
            Belgarath, y que su papel era el más importante en el desarrollo de la profecía. Precisamente, durante la lucha 
            de fuerzas mágicas entre Belgarath y Ctuchik, que era quien custodiaba el Orbe, el niño inocente, que había sido 
            el único en tocar este objeto sin quemarse, se lo entrega a Garion en un acto premonitorio de grandeza.<br/>
            &nbsp;<em>La luz del Orbe</em> es el tercer volumen de las <b>Crónicas de Belgarath</b> en el que se van 
            resolviendo lentamente muchos de los misterios de los dos primeros volúmenes y empieza a vislumbrarse el 
            cumplimiento de la profecía.</q></blockquote></article>";
}

$paginaLaLuz = new laLuz();
$paginaLaLuz->setTitulo("La luz del Orbe");
$paginaLaLuz->setEnlace("cienciaFiccion.php");
$paginaLaLuz->mostrar();