<?php

include 'inicio.inc';

class novelas extends inicio2{
    
    var $librosNovelas = array("R. Bach" => array("Juan Salvador Gaviota"),
                               "Alexs Pate" => array("Amistad"),
                               "Fedor Dostoyevski" => array("El jugador"),
                               "Jean M. Auel" => array("El clan del oso cavernario"),
                               "Jack London" => array("Colmillo blanco"),
                               "Emilio Salgari" => array("La costa de marfil"),
                               "Ken Follett" => array("El hombre de san petersburgo"),
                               "Alfred Hitchcock y los 3 investigadores" => array("Misterio de los asaltos terrorificos",
                                                                                  "Misterio del leon nervioso",
                                                                                  "Misterio de las huellas flameantes",
                                                                                  "Misterio del tesoro desaparecido"),
                               "Manuel Jimenez Bellón" => array("Jugando desnudo en la arena"),
                               "Edgar Allan Poe" => array("Las aventuras de arturo gordon pym"),
                               "J. Oliver Curwood" => array("El bosque en llamas"));
                           function tematicas($tematica) {
                               parent::tematicas($this->librosNovelas);
                           }
}

$paginaNovelas = new novelas();
$paginaNovelas->setDescription("Coleccion de novelas");
$paginaNovelas->setPalabrasClave("Libros, novelas, misterio");
$paginaNovelas->setTitulo("Novelas");
$paginaNovelas->mostrar3();