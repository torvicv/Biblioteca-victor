<?php

include ("indexLibros.php");

class espada extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Nancy Varian Berberich</cite><p>Colección:</p>
        &nbsp;<em>Héroes de la Dragonlance</em><p>Volumen:</p>&nbsp;2<blockquote><h3>Sinopsis:</h3><q>Thorbardin es el 
            reino de los Enanos de las Montañas y éstos, tal como indica su nombre, viven en el interior de un risco. Están
            divididos en clanes, cada uno gobernado por un <em>thane</em>, lo que da lugar a frecuentes rencillas y 
            conflictos entre las diferentes facciones. Por otra parte, el hecho de vivir aislados del mundo exterior los 
            ha convertido en seres egoístas que se desentienden de un suceso muy grave que está ocurriendo en el mundo de 
            los humanos: la Guerra de la Lanza.<br/>&nbsp;Sin embargo, dos acontecimientos van a alterar este orden de 
            cosas. En primer lugar, Isarn Hammerfell, anciano herrero de la tribu de los hylar, forja a Vulcania, Espada 
            de Reyes, a la que el mismo dios Reorx da vida, y cuyo poseedor será entronizado como soberano de Thorbardin. 
            No obstante, la espada es robada la misma noche de su creación y es indispensable encontrarla. En segundo lugar, 
            un grupo de ochocientos humanos, dirigidos por Tanis el Semielfo y por la princesa Goldmoon, acaban de huir de 
            la esclavitud de las minas de Pax Tharkas, feudo del señor del Dragón, Verminaard, y se disponen a pedir asilo 
            en el reino de los enanos.<br/>&nbsp;La autora de esta historia ha sabido conjugar la novedad de los episodios 
            que relata con el ya conocido universo de Krynn. Así, el lector verterá sus sentimientos de afecto u hostilidad 
            sobre personajes antes desconocidos a la vez que recordará, no sin nostalgia, a tantos otros que ya aparecieron 
            en las <em>Crónicas</em> y las <em>Leyendas</em>.</q></blockquote></article>";
}

$paginaEspada = new espada();
$paginaEspada->setTitulo("Espada de Reyes");
$paginaEspada->setEnlace("cienciaFiccion.php");
$paginaEspada->mostrar();