<?php

include 'indexLibros.php';

class laSombra extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Bruce Fergusson</cite><p>Colección:</p>&nbsp;
        Libro suelto<blockquote><h3>Sinopsis:</h3><q>Ésta es la historia de Lukan Barra y su búsqueda. La acción transcurre 
                a finales del primer milenio en el reino de Myrcia, un mundo imaginario y fantástico.<br/>&nbsp;Al principio, 
            Lukan se separa de su criminal hermano, Vearus, quien ha regresado del destierro con el secreto para poder curar 
            y transformar los cuerpos, lo que le permite convertirse en el Curandero del despótico tirano, el Sanctor Grouin.
            <br/>&nbsp;En esos días, el reino de Myrcia es invadido por los vandálicos ejercitos del jefe de Escarria, 
            Gortahook, el terrorífico Garfio del Este, y Grouin promete el trono a quien consiga que el fabuloso dragón Erseyr 
            los ayude a vencer a los intrusos. La fiera es una criatura inmortal, adorada y temida por los myrcians, que vive 
            en las profundidades de una montaña donde ha acumulado un tesoro, fruto del tributo que se le entrega año tras año.
            <br/>&nbsp;Lukan emprende una aventura alucinante en busca del monstruoso dios Erseiyr, cuyas enormes alas 
            ensombrecen el futuro del país y cuyo destino queda ligado al de Lukan con extraños y maravillosos lazos</q>
        </blockquote></article>";
}

$paginaLaSombra = new laSombra();
$paginaLaSombra->setTitulo("La sombra de sus alas");
$paginaLaSombra->setEnlace("cienciaFiccion.php");
$paginaLaSombra->mostrar();