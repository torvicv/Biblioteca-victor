<?php

include 'indexLibros.php';

class esperanza extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Freda Warrington</cite><p>Colección:</p>&nbsp;
        <em>El imperio de Gorethria</em><p>Volumen:</p>&nbsp;1<blockquote><h3>Sinopsis:</h3><q>Gorethria era un extraño y 
            hermoso país, que había engendrado a un pueblo igualmente singular. Sus habitantes eran gentes altas, delgadas, 
            elegantes, con la piel de una intensa tonalidad cobriza; tenían el cabello negro y largo; vestían ricos 
            ropajes, eran barbilampiños, y sus ojos multicolores poseían una enigmática cualidad tenebrosa.<br/>&nbsp;
            Durante más de un milenio habían mantenido subyugado al continente que un tiempo se conoció como Vardrav, y que, 
            ahora, había pasado a llamarse Imperio gorethriano. Su gusto casi estético por la guerra y el derramamiento de 
            sangre provocó que civilizaciones más fuertes que la suya, aunque menos perfeccionadas, cayeran ante sus 
            inmisericordes ejércitos. Su innata crueldad mantuvo, desde entonces, a aquellos países bajo el siniestro control 
            de Gorethria.<br/>&nbsp;De este terrible país partió Ashurek, antiguo comandante en jefe de los ejércitos y 
            azote de las razas sometidas. Tenía que reunirse con Estarinel, grave, fuerte y sensato, procedente de Forluin, 
            fabuloso país de leyenda donde reinaba siempre la paz; y también debía encontrarse con Medrian, eternamente 
            envuelta en una gélida capa de misterio, con los ojos ensombrecidos por los sufrimientos soportado durante largo 
            tiempo.<br/>&nbsp;Los tres personajes tenían que cumplir su Misión: debían encontrar y aniquilar a la gran 
            Serpiente, que había llegado desde más allá de las fronteras del mundo, de un desierto de hielos eternos, y que 
            amenazaba con arrasar y destruir toda la Tierra.<br/>&nbsp;Con <em>El mirlo de la esperanza</em> se inicia la 
            colección <b>El Imperio de Gorethria</b>, una extensa y magnífica saga que nos lleva a mundos distintos, llenos 
            de luz y colorido unos, y de negro terror otros.</q></blockquote></article>";
}

$paginaEsperanza = new esperanza();
$paginaEsperanza->setTitulo("El mirlo de la esperanza");
$paginaEsperanza->setEnlace("cienciaFiccion.php");
$paginaEsperanza->mostrar();