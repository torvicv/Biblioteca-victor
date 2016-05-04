<?php

include ("indexLibros.php");

class laGuerra extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Steve Perry</cite><p>Colección:</p>&nbsp;
        La máquina del tiempo<br/><br/><br/><blockquote><h3>Sinopsis:</h3><div id=\"mdt\"><h4>Año 1860</h4><b>Has viajado a través del
                tiempo hasta los Estados Unidos en la época anterior a la guerra de Secesión.</b></div><br/><q>Una negra llamada
                Harriet Tubman dirige la red clandestina Tren Secreto cuya misión es organizar la huida de los esclavos del sur
                hacia la libertad en el Norte.<br/>Puedes buscar a Harriet y unirte a sus combatientes por la libertad o quedarte
                en el Norte y esperarla. ¡Tu decisión puede conducirte a la seguridad o dejarte estancado en el tiempo!
                </q></blockquote></article>";
}

$paginaLaGuerra = new laGuerra();
$paginaLaGuerra->setTitulo("La guerra de Secesión");
$paginaLaGuerra->setEnlace("cienciaFiccion.php");
$paginaLaGuerra->mostrar();