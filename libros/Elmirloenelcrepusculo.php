<?php

include 'indexLibros.php';

class crepusculo extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor</p>&nbsp;<cite>Freda Warrington</cite><p>Colección:</p>&nbsp;
        <em>El imperio de Gorethria</em><p>Volumen:</p>&nbsp;4<blockquote><h3>Sinopsis:</h3><q>Sin que nadie se dé 
            cuenta, el mirlo Miril se dirige como una flecha hacia la Tierra. Después de morir la Serpiente y a través 
            de las estrellas y de los tiempos, había volado en libertad, exultante de alegría y de júbilo. Pero ahora, y 
            de manera insistente, algo reclama su regreso...<br/>&nbsp;Y es que alguna parte de M'gulfn no había muerto 
            totalmente. Su maldad, terrible y mortal, se había encarnado en el cuerpo de una anciana, Ah'garith. Ësta se 
            las había ingeniado para infiltrarse en la corte y ser uno de los consejeros del emperador Xaedrek. La 
            demoníaca mujer lo presionaba para que atacara a la hechicera Melkavesh y declarará la guerra contra el 
            último de sus enemigos. El emperador se resistía, pero la tentación era fuerte y, además, tanto sus consejeros 
            como sus propios instintos, lo empujaban a la lucha.<br/>&nbsp;Sin embargo, la confrontación, si bien 
            garantizaba la hegemonia de Gorethria, podía liberar la maldad más profunda que acabaría con la existencia de 
            los seres vivos.<br/>&nbsp;Cuando la guerra ya es inevitable, se produce una impresionante batalla. El 
            encuentro entre Melkavesh y Xaedrek, que se aman en el fondo de sus duros corazones, es sobrecogedor.<br/>&nbsp;
            Mientras tanto, Miril, el mirlo que es la esperanza del mundo, vuela sin descanso para intentar que el Mal no 
            se apodere de éste.<br/>&nbsp;Así llega a su fín la epopeya <b>El imperio de Gorethria</b>, serie que ha 
            desarrollado una exuberante fantasía desde el primero al último volumen.</q></blockquote></article>";
}

$paginaCrepusculo = new crepusculo();
$paginaCrepusculo->setTitulo("El mirlo en el crepúsculo");
$paginaCrepusculo->setEnlace("cienciaFiccion.php");
$paginaCrepusculo->mostrar();