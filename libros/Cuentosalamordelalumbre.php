<?php

include 'indexLibros.php';

$paginaCuentos = new libros();
$paginaCuentos->setContenidos2("Libro de cuentos");
$paginaCuentos->setPalabrasClave("Libro, cuentos, amor, lumbre");
$paginaCuentos->setEnlace("varios.php");
$paginaCuentos->setTitulo("Cuentos al amor de la lumbre");
$paginaCuentos->setContenidos2("<article id=\"libros\"><p>Autor:</p>&nbsp;<cite><abbr title=\"Antonio\">A.</abbr>
        <abbr title=\"Rodríguez\">R.</abbr>Almodóvar</cite><p>Editorial:</p>&nbsp;Anaya<blockquote><div 
                id=\"tamañoletras\">Libro de cuentos variados</div><ol type=\"A\"><li>La princesa y el pastor</li>
                    <li>Blancaflor</li><li>El príncipe encantado</li><li>Juan el Oso</li><li>La princesa encantada
                    </li><li>Las tres maravillas del mundo</li><li>La niña perseguida</li><li>Los niños valientes
                    </li><li>El muerto agradecido</li><li>Seres mitológicos</li><li>La ambición castigada</li>
                    <li>La muerte</li></ol></blockquote></article>");
$paginaCuentos->mostrar();