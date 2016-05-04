<?php

include ("indexLibros.php");

class etica extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Baruch Spinoza</cite><blockquote><h3>Sinopsis:</h3>
            <q>Publicada póstumamente en 1677, <b>la Ética</b>, obra compuesta como un conjunto de Definiciones, Axiomas, 
            Postulados, Leyes, Proposiciones y Escolios al modo geométrico, ha sido interpretada por la posteridad, pese a
            esta supuesta objetividad, de manera multiforme, habiendo despertado, más que desacuerdos fríos con la verdad
            de sus asertos, emociones poderosas. Esta edición de la obra cumbre de Baruch Spinoza (1632-1677), personalidad
            intelectual cuyo pensamiento y figura han sido clasificados de las formas más dispares, según la perspectiva
            que lo ha sometido a análisis, corre a cargo del profesor <em>Vidal Peña</em>, traductor, prologuista y anotador
            del volumen.</q></blockquote></article>";

}
$paginaEtica = new etica();
$paginaEtica->setTitulo("Ética");
$paginaEtica->setEnlace("filosofia.php");
$paginaEtica->mostrar();