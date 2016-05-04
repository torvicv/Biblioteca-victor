<?php

include 'indexLibros.php';

class tanis extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Barbara Siegel-Scott Siegel</cite><p>Colección:
        </p>&nbsp;<em>Preludios de la Dragonlance-segunda trilogía</em><p>Volumen:</p>&nbsp;3<blockquote><h3>Sinopsis:</h3>
            <q>&laquo;El cántico aumentó aún más de volumen. La estructura de la pequeña choza empezó a temblar. Como si 
            el viento tratara de arrancarla de sus cimientos para arrojarla pendiente abajo hasta el valle tendido al pie 
            de la montaña. Agua y barro escurrían entre las grietas, cada vez más anchas, del tejado. Una sección del 
            entramado de troncos que cubría el techo se quebró y cayó dentro de la choza. La despavorida tejedora dejó 
            escapar un gemido, pero Tanis no se atrevió a consolarla. Fistandantilus prosiguió con la salmodia y su voz 
            sobrepasó incluso el ulular del viento.&raquo;<br/>&nbsp;En este apasionante relato, Tanis hace un enigmático 
            viaje por la mente de un anciano hechicero y regresa al pasado. Un pasado en el que conoce a su odiado y 
            temido padre. Y en el que tendrá que librar una batalla imposible contra el propio tiempo.<br/>&nbsp;Con <em>
            Tanis el semielfo</em> acaba la segunda trilogía de los <em>Preludios de la Dragonlance</em>.</q></blockquote></article>";
}

$paginaTanis = new tanis();
$paginaTanis->setTitulo("Tanis el semielfo");
$paginaTanis->setEnlace("cienciaFiccion.php");
$paginaTanis->mostrar();