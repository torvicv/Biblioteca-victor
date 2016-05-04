<?php

include ("indexLibros.php");

class elCaballero extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Michael Williams</cite><p>Colección:</p>&nbsp;
        <em>Héroes de la Dragonlance</em><p>Volumen:</p>&nbsp;3<blockquote><h3>Sinopsis:</h3><q>&nbsp;&laquo;Sir Bayard 
            miró hacia el final del camino donde el ogro, montado a caballo, esperaba como una inmensa barricada metálica. 
            Yo seguí donde estaba, sin prisa por volverme a reunir con mis compañeros. Pero mientras miraba a Sir Bayard 
            subir con dificultad una pequeña ladera rocosa, levantar su espada haciendo el saludo solámnico y hacer señas 
            a Agion para que lo ayudara a montar de nuevo sobre Valorous, sentí algo parecido a la verg&uuml;enza. 
            Verg&uuml;enza por no echar una mano. Me quedé agazapado junto a un tronco caído, abajo, lejos del conflicto, 
            y esperé el resultado.&raquo;<br/>&nbsp;Estos eran los sentimientos de Galen Pathwarden, la <em>Comadreja</em>, 
            que como tal animal procuraba esconderse y mantenerse lejos de la aventura, el peligro o el heroismo. Sin 
            embargo, la suerte le deparó un camino muy diferente y, de la noche a la mañana, se convirtió en escudero de 
            un famoso Caballero de Solamnia, Sir Bayard Brightblade del Alcázar de Vingaard, Caballero de la Espada y 
            defensor de las tres Órdenes solámnicas.<br/>&nbsp;Este valiente Caballero, cuyo apellido nos recuerda al 
            muy noble Sturm Brightblade, famoso personaje de las <em>Crónicas de la Dragonlance</em>, va a tomar parte 
            en un torneo y así aspirar a la mano de la bella heredera del Castillo di Caela.<br/>&nbsp;En su itinerario, 
            Sir Bayard, Galen y Agion, un centauro que los acompaña, se verán involucrados en un sinfín de aventuras y 
            deberán superar las maquinaciones y trampas de un siniestro personaje, llamado el Escorpión.<br/>&nbsp;El 
            Caballero de Solamnia es el tercer volumen de la serie <em>Héroes de la Dragonlance</em> que, como los 
            anteriores, atrapa la atención del lector, y es especialmente atractivo por su tono humorístico y por la 
            sucesión de situaciones divertidas y sorprendentes.</q></blockquote></article>";
}

$paginaElCaballero = new elCaballero();
$paginaElCaballero->setTitulo("El Caballero de Solamnia");
$paginaElCaballero->setEnlace("cienciaFiccion.php");
$paginaElCaballero->mostrar();