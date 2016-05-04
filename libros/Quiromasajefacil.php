<?php

include 'indexLibros.php';

$paginaMasaje = new libros();
$paginaMasaje->setDescription("Libro de quiromasaje");
$paginaMasaje->setPalabrasClave("Quiromasaje, libro, masaje, fácil");
$paginaMasaje->setEnlace("varios.php");
$paginaMasaje->setTitulo("Quiromasaje fácil");
$paginaMasaje->setContenidos2("<article id=\"libros\"><p>Autor:</p>&nbsp;<cite>Dr. Jesús Vázquez Gallego</cite>
    <p>Editorial:</p>&nbsp;Las 4 fuentes<blockquote><h3>Sinopsis:</h3><q>El arte o disciplina del masaje es 
        practicado desde tiempos inmemoriables y sigue conservando aún hoy en día aquel sentido profundo y 
        holístico entre el que lo recibe y el que lo da. La experiencia del contacto, del movimiento y de la 
        energía curativa transmitida a través de las manos son cualidades asociadas al masaje, a la persona y al 
        bienestar.<br/>&nbsp;El masaje existió, existe y se utilizó en todas las culturas, como lo acreditan 
        viejos textos de la antigua China, India, Grecia, Roma y de nuestros pasados siglos, lo que atestigua su 
        práctica. Y siempre asociado a la cultura física y a la curación de distintos males y a mejorar el estado 
        de salud, que proporciona bienestar y mejor calidad de vida.</q></blockquote></article>");
$paginaMasaje->mostrar();