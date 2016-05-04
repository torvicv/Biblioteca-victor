<?php

include 'indexLibros.php';

class crisol extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Margaret Weis</cite><p>Colección:</p>&nbsp;
        <em>La forja de un túnica negra</em><p>Volumen:</p>&nbsp;2<blockquote><h3>Sinopsis:</h3><q>Han pasado los años.
            Caramon y Raistlin han entablado amistad con personajes tan dispares como un kender, un enano y un semielfo, 
            quién, a su vez, conoce en un viaje a una hermosa guerrera, que no es otra que Kitiara, hermanastra de los 
            jóvenes Majere. Juntos corren sus primeras aventuras.<br/>&nbsp;Una primavera, Raistlin recibe una misiva del 
            Cónclave de Hechiceros en la que lo emplazan a acudir a la Torre de la Alta Hechiceria de Wayreth, donde 
            deberá someterse a la Prueba a pesar de su juventud. Los dioses requieren una espada bien templada para la 
            guerra que se avecina contra las fuerzas del Mal, y Par-Salian quiere que esa espada sea Raistlin. aunque 
            existe el riesgo de que la hoja de acero -la vida del joven- se quiebre en el proceso.</q></blockquote></article>";
}

$paginaCrisol = new crisol();
$paginaCrisol->setTitulo("Raistlin, crisol de la magia");
$paginaCrisol->setEnlace("cienciaFiccion.php");
$paginaCrisol->mostrar();