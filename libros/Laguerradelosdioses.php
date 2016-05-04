<?php

include 'indexLibros.php';

class laGuerra extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Margaret Weis-Tracy Hickman</cite><p>Colección:
        </p>&nbsp;<em>El Ocaso de los Dragones</em><p>Volumen:</p>&nbsp;2<blockquote><h3>Sinopsis:</h3><q>Palin y Tas 
            cruzan el Portal y entran en el Abismo, donde aguarda Raistlin para llevarlos a presenciar un acontecimiento 
            extraordinario: la asamblea de los dioses. En ella, Paladin accede a la petición de la Reina Oscura y de 
            Gilean, que consiste en retirar los dragones del Bien para que los Caballeros de Takhisis se alcen con la 
            victoria y unifiquen bajo un mando único todas las fuerzas de las distintas razas. De esta manera podrán 
            afrontar la lucha contra Caos y evitar la destrucción de Krynn y de todo lo creado.<br/>&nbsp;La Torre del 
            Sumo Sacerdote cae en manos de las fuerzas de la Oscuridad por primera vez en la historia y el dominio 
            absoluto de Ariakan se extiende rapidamente por Ansalon. Entre tanto, Steel Brightblade va a ser ajusticiado 
            por haber dejado escapar a su prisionero, Palin Majere.<br/>&nbsp;En la posada El Último Hogar, Caramon y 
            Tika tienen la alegría de volver a ver a su hijo, a quién creían muerto. Pero el joven Palin llega acompañado 
            de un visitante inesperado: Raistlin Majere, quien ha vuelto al plano mortal para ayudar en la batalla contra 
            Caos.<br/>&nbsp;Los dos volumenes de <em>El ocaso de los dragones</em> cierran el ciclo iniciado en las <em>
            Crónicas de la Dragonlance</em>, pero significan también un nuevo comienzo.</q></blockquote></article>";
}

$paginaLaGuerra = new laGuerra();
$paginaLaGuerra->setTitulo("La Guerra de los Dioses");
$paginaLaGuerra->setEnlace("cienciaFiccion.php");
$paginaLaGuerra->mostrar();