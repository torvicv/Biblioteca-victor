<?php

include 'indexLibros.php';

class laSegunda extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Margaret Weis-Tracy Hickman</cite><p>Colección:
        </p>&nbsp;<em>Dragonlance</em><p>Volumen:</p>&nbsp;Libro suelto<blockquote><h3>Sinopsis:</h3><q>Hace muchos años, 
            Margaret Weis y Tracy Hickman narraron las historias de cómo los Compañeros de la Lanza lucharon para evitar 
            que el mundo fuera engullido por las tinieblas, cómo combatieron para restaurar el frágil equilibrio entre el 
            bien y el mal. La guerra se ganó y la paz llegó a Krynn. Los Compañeros de la Lanza se convirtieron en héroes. 
            El río del tiempo siguió su curso. Los héroes soñaban con encontrar un refugio seguro en ese río de rápida 
            corriente. Pero el equilibrio del poder eterno siempre es cambiante. La Reina de la Oscuridad fue vencida, pero 
            no destruida. Sus poderes son muchos y la gente es débil. Se olvidan las lecciones del pasado y las aguas del 
            río se vuelven más turbulentas y peligrosas. Pero no serán los Héroes de la Lanza quienes deberán lanzarse al 
            río revuelto de la guerra que se acerca. Ha llegado la hora para los que son más jovenes, más fuertes. Es hora 
            de entregar la espada, o el bastón de mago, a quienes serán los héroes de la segunda generación.<br/>&nbsp;O a 
            quienes traerán la perdición para esa nueva era.</q></blockquote></article>";
}

$paginaLaSegunda = new laSegunda();
$paginaLaSegunda->setTitulo("La Segunda Generación");
$paginaLaSegunda->setEnlace("cienciaFiccion.php");
$paginaLaSegunda->mostrar();