<?php

include ("indexLibros.php");

class laLeyenda extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Richard A. Knaak</cite><p>Colección:</p>&nbsp;
        <em>Héroes de la Dragonlance</em><p>Volumen:</p>&nbsp;1<blockquote><h3>Sinopsis:</h3><q>¿Quién no recuerda las 
        aventuras de los compañeros de las <em>Crónicas de la Dragonlance</em> en el Muro de Hielo cuando descubren la 
        escultura que representa un Caballero Solámnico con un trozo de lanza en su mano?<br/>&nbsp;¡Cuántas preguntas! 
        ¡Cuántas incógnitas! ¡Cuántos deseos de conocer la historia o la leyenda, el origen y la evolución de aquel 
        enigma!<br/>&nbsp;Pues bien, ahora el lector, de la mano de Astinus de Palanthas, se remonta en el tiempo 
        muchos, muchísimos años atrás para conocer la vida de Huma, el Caballero de Solamnia, primer Lancero, paladín 
        de la orden de la Corona, el predestinado a descubrir dónde se halla la poderosa lanza Dragonlance, obra de los 
        mismos dioses y la única capaz de derrotar a la legendaria Reina de la Oscuridad y a sus ordas de Dragones, que 
        desde tiempo inmemoriales están desolando el mundo.<br/>&nbsp;En su búsqueda, Huma pasa un sin fín de pruebas, 
        se enfrenta a traiciones mezquinas en el seno de su propia Hermandad y luchas contra enemigos espeluznantes 
        como los lobos espectrales de Galan Dracos, maléfico esbirro de Takhisis o contra los adoradores de Morgion, 
        dios de la podedumbre..., contando siempre con la ayuda del Dragón Plateado, espléndido y enigmático, a cuyos 
        lomos el guerrero libra las más cruentas batallas. Pero, ¿cuál es el misterio del soberbio reptil alado? ¿Será 
        capaz ese misterio de hacer tambalear las convicciones y propósitos del caballero?<br/>&nbsp;Esta interesantisima 
        narración de <abbr title=\"Richard\">R.</abbr>A. Knaak sigue el camino que iniciaron Margaret Weis y Tracy Hickman 
        en sus <em>Crónicas de la Dragonlance</em> y <em>Leyendas de la Dragonlance</em> y con ella se inicia una nueva 
        trilogía que recrea personajes y situaciones de las anteriores sagas mencionadas.</q></blockquote></article>";
}

$paginaLaLeyenda = new laLeyenda();
$paginaLaLeyenda->setTitulo("La leyenda de Huma");
$paginaLaLeyenda->setEnlace("cienciaFiccion.php");
$paginaLaLeyenda->mostrar();