<?php

include 'indexLibros.php';

$paginaLaConquista = new libros();
$paginaLaConquista->setDescription("Libro sobre las profundidades marinas");
$paginaLaConquista->setPalabrasClave("Libro, mar, profundidades, marinas");
$paginaLaConquista->setEnlace("varios.php");
$paginaLaConquista->setTitulo("La conquista de las profundidades marinas");
$paginaLaConquista->setContenidos2("<article id=\"libros\"><p>Autor:</p>&nbsp;<cite>Antonio Ribera</cite><p>
        Editorial:</p>&nbsp;AFHA<blockquote><h3>Introducción:</h3><p class=\"indentation\"><span style=\"font-variant: small-caps;\">
        Después de la conquista de la cima del</span> Himalaya por el escalador Hillary, secundado por el 
        admirable sherpa Tensing, parece que quedan ya pocos reductos inviolados sobre la faz de la Tierra. 
        Sobre la faz de nuestro planeta, tal vez no, pero si nos alejamos de la superficie, sea hacia arriba 
        &#8212espacios interplanetarios&#8212, sea hacía abajo &#8212profundidades marinas&#8212, volvemos a 
        encontrarnos con la aventura y el misterio, acicate de muchas de las grandes empresas humanas</p><p 
            class=\"indentation\">Nuestro siglo será, sin duda, el de la conquista dec;isiva de estos dos grandes 
        espacios vitales, o, cuando menos, el que iniciará el primer contacto serio con las regiones vecinas de 
        la Tierra y con los profundos abismos del Océano. La empresa ha comenzado ya: un objeto fabricado por el 
        hombre  ha hecho impacto en la Luna, otro ha fotografiado la cara oculta de nuestro satélite, varios 
        astronautas rusos y norteamericanos han dado numerosas vueltas orbitales a nuestro planeta, sondas 
        espaciales han partido hacía Marte y Venus y, entretanto, el batiscafo de Piccard ha descendido a 11 
        kilómetros de profundidad bajo el océano y el suizo Hannes Keller se ha sumergido a cuerpo limpio a 
        300 m. de profundidad; mientras Cousteau y Stenuit demostraban que el hombre puede vivir durante largos 
        períodos en el fondo del mar, en habitáculos especialmente construidos...</p><p class=\"indentation\">
            En cuanto a mí..., casi debo a una casualidad el haberme introducido en la que es, quizá, la mayor 
        y más fascinante aventura de nuestra época: la conquista del mundo submarino.</p></blockquote></article>");
$paginaLaConquista->mostrar();