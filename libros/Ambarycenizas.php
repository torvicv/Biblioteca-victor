<?php

include 'indexLibros.php';

class cenizas extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Margaret Weis</cite><p>Colección:</p>&nbsp;
        <em>La Discípula Oscura</em><p>Volumen:</p>&nbsp;1<blockquote><h3>Sinopsis:</h3><q>La Guerra de los Espíritus ha 
            concluido y la magia, al igual que los dioses, ha reaparecido. Pero éstos compiten por la supremacia, y los 
            enfrentamientos que han extendido la miseria y la desdicha desestabilizan el poder en Ansalon.<br/>&nbsp;Ante 
            la tumba de la Diosa de la Oscuridad, la guerrera Mina piensa que su existencia ha terminado. La llegada de 
            Chemosh confirma su intuición, pero las intenciones del dios no son lo que aparentan: no ha venido para 
            reclamar su muerte, sino para que le entregue su fe.</q></blockquote></article>";
}

$paginaCenizas = new cenizas();
$paginaCenizas->setTitulo("Ámbar y Cenizas");
$paginaCenizas->setEnlace("cienciaFiccion.php");
$paginaCenizas->mostrar();