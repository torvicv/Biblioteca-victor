<?php

include 'indexLibros.php';

$paginaAprende = new libros();
$paginaAprende->setDescription("Libro para aprender a dibujar comics");
$paginaAprende->setPalabrasClave("Aprende, dibujar, comics, curso");
$paginaAprende->setEnlace("varios.php");
$paginaAprende->setTitulo("Aprende a dibujar comics");
$paginaAprende->setContenidos2("<article id=\"libros\"><p>Autor:</p>&nbsp;<cite>Antonio Pérez Garcia &laquo;
        Carrillo&raquo;</cite><p>Editorial:</p>EDITORS S.A.<blockquote><div id=\"tamañoletras\">UN CURSO DIDÁCTICO 
                Y AMENO QUE DESCUBRE LOS SECRETOS DEL COMIC HUMORÍSTICO</div><h3>Sinopsis:</h3><q>Antonio Pérez 
                    Garcia &laquo;Carrillo&raquo; nació en Málaga el año 1931. Se hizo como dibujante en Madrid, 
                    donde terminó el bachillerato. Allí publicó los primeros trabajos en &laquo;Diez Minutos&raquo; 
                    y luego en &laquo;Chicos&raquo;. También realizó una veintena de cuadernos del &laquo;F.B.I.&raquo;. 
                En Barcelona colabora con F. Bruguera, Toray y en agencias para el extranjero. Luego se independiza y 
                crea sus series: &laquo;Gora Gopal&raquo;, &laquo;Los Mercenarios&raquo;, &laquo;Mares de China&raquo;, 
                &laquo;Isla Loca&raquo; etc., todo esto como dibujante, autor de dibujo realista o serio. En 1980 se 
                lanza al dibujo de humor que siempre le atrajo, y crea sus personajes &laquo;Kala Bacín&raquo;, &laquo;
                El Capitán Pantera&raquo;..., el japonés &laquo;Mr. Motto&raquo;, que presenta este libro... a &laquo;
                su&raquo; manera, junto con la rana Pako.</q></blockquote></article>");
$paginaAprende->mostrar();