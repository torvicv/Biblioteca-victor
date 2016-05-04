<?php

include 'indexLibros.php';

$paginaAsaltos = new libros();
$paginaAsaltos->setDescription("Libro juvenil de misterio");
$paginaAsaltos->setPalabrasClave("Libro, juvenil, misterio, asaltos terrorificos, investigadores, Alfred Hitchcock");
$paginaAsaltos->setEnlace("novelas.php");
$paginaAsaltos->setTitulo("Misterio de los asaltos terroríficos");
$paginaAsaltos->setContenidos2("<article id=\"libros\"><p>Autor:</p>&nbsp;<cite>M. V. Carey</cite><p>Editorial:
    </p>&nbsp;Molino<blockquote><h3>Sinopsis:</h3><q>La intervención del mago del suspense, como ha dado en 
        llamársele, ya sea en cine, televisión o novela, es de por sí garantía de intriga y desenlace inesperado. En 
        esta ocasión, Alfred Hitchcock dedica su atención a los jovenes, ofreciéndoles una serie de novelas de 
        acción. Los adolescentes, al leer las aventuras de Alfred Hitchcock y los tres investigadores se sienten 
        incorporados al formidable equipo de Júpiter Jones, Pete Crenshaw y Bob Andrews. Junto a ellos practican 
        métodos deductivos que agilizan sus mentes, vencen el miedo a lo desconocido, luchan por causas justas y 
        gozan el placer de ser útiles a sus semejantes.</q></blockquote></article>");
$paginaAsaltos->mostrar();