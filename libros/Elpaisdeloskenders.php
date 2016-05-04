<?php

include 'indexLibros.php';

class elPais extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Mary Kirchoff</cite><p>Colección:</p>&nbsp;
        <em>Preludios de la Dragonlance</em><p>Volumen:</p>&nbsp;2<blockquote><h3>Sinopsis:</h3><q>&nbsp;Una tarde de 
            otoño, llega a El Último Hogar una enana a quien el Venerable Consejo de Ancianos de Kendermore ha contratado 
            para que escolte a Tasslehoff Burrfoot de regreso a su ciudad natal a fín de que cumpla el compromiso de 
            matrimonio, concertado desde su infancia. Para asegurar su comparecencia, el Consejo ha encarcelado a su tio 
            favorito: Saltatrampas.<br/>&nbsp;El viaje es muy accidentado ya que siguen la ruta en un mapa anterior al 
            Cataclismo, lo que les lleva a través de montañas, pantanos e incluso un mar que supuestamente no debería 
            existir... El grupo, al que también se han unido varios enanos gully, llega a un pueblo donde se celebran las 
            Fiestas de Otoño. Tas sube a una de las figuras del carrusel, un dragón, que cobra vida y se lo lleva volando 
            a una fortaleza de las montañas de donde conseguirá escapar, montando esta vez a lomos del último mamut 
            lanudo...<br/>&nbsp;Éstas no serán las únicas aventuras de Tas pues tendrá que enfrentarse a la mismísima 
            Reina de la Oscuridad para evitar que la malvada Takhisis destruya Kendermore.<br/>&nbsp;<em>El país de los 
            kenders</em> es una divertida obra de la saga Dragonlance gracias a la personalidad de la mayor parte de los 
            personajes: kenders, enanos gully y gnomos, que harán las delicias de los lectores.</q></blockquote></article>";
}

$paginaElPais = new elPais();
$paginaElPais->setTitulo("El país de los kenders");
$paginaElPais->setEnlace("cienciaFiccion.php");
$paginaElPais->mostrar();