<?php

include ("inicio.inc");

class cienciaFiccion extends inicio2{
    
    var $librosCienciaFiccion = array("La maquina del tiempo"=>array("La espada del samurai",
                                                                     "El secreto de los caballeros",
                                                                     "La ruta de los piratas",
                                                                     "La guerra de secesion",
                                                                     "Los anillos de saturno"),
                                      "Deathstalker"=>array("El trono de hierro",
                                                            "El laberinto de la locura",
                                                            "Apertura golgotha",
                                                            "Los circulos del infierno"),
                                      "Crónicas de la dragonlance"=>array("El retorno de los dragones",
                                                                          "La tumba de huma",
                                                                          "La reina de la oscuridad"),
                                      "El ocaso de los dragones"=>array("Los caballeros de takhisis",
                                                                        "La guerra de los dioses"),
                                      "Quinta era"=>array("El amanecer de una nueva era",
                                                          "El dragon azul",
                                                          "Conjuro de dragones"),
                                      "Heroes de la dragonlance"=>array("La leyenda de huma",
                                                                        "Espada de reyes",
                                                                        "El caballero de solamnia"),
                                      "Heroes de la dragonlance, trilogia 2"=>array("Kaz, el minotauro",
                                                                                    "Las puertas de thorbardin",
                                                                                    "El caballero galen"),
                                      "Los compañeros de la dragonlance"=>array("Qualinost",
                                                                                "El incorregible tas",
                                                                                "El codigo y la medida"),
                                      "La forja de un túnica negra"=>array("Raistlin, el aprendiz de mago",
                                                                           "Raistlin, crisol de la magia",
                                                                           "Raistlin, mago guerrero",
                                                                           "Raistlin, el tunica roja"),
                                      "Preludios de la dragonlance"=>array("El guardian de lunitari",
                                                                           "El pais de los kenders",
                                                                           "Los hermanos Majere"),
                                      "Preludios de la dragonlance, trilogia 2"=>array("La misión de riverwind",
                                                                                       "Flint, rey de los gullys",
                                                                                       "Tanis el semielfo"),
                                      "Cuentos de la dragonlance, trilogia 2"=>array("El reino de istar",
                                                                                     "El cataclismo",
                                                                                     "La guerra de la lanza"),
                                      "Villanos de la dragonlance"=>array("Emperador de Ansalon"),
                                      "La discípula oscura"=>array("Ambar y cenizas",
                                                                   "Ambar y hierro",
                                                                   "Ambar y sangre"),
                                      "Libros sueltos de la dragonlance"=>array("Apendices",
                                                                                "La segunda generacion",
                                                                                "La guerra de los espiritus",
                                                                                "Las naciones elficas"),
                                      "Juego de tronos"=>array("Canción de hielo y fuego"),
                                      "Crónicas de Belgarath"=>array("La senda de la profecía",
                                                                     "La reina de la hechiceria",
                                                                     "La luz del orbe",
                                                                     "El castillo de la magia",
                                                                     "La ciudad de las tinieblas"),
                                      "El Imperio de Gorethria"=>array("El mirlo de la esperanza",
                                                                       "El mirlo en las tinieblas",
                                                                       "El mirlo y la magia",
                                                                       "El mirlo en el crepusculo"),
                                      "El señor de los anillos"=>array("La comunidad del anillo"),
                                      "Libros sueltos"=>array("En el torbellino",
                                                              "La maldición del dragon",
                                                              "Tigana",
                                                              "La sombra de sus alas"));
    
    function tematicas($tematica) {
        parent::tematicas($this->librosCienciaFiccion);
    }
}

$paginaCienciaFiccion = new cienciaFiccion();
$paginaCienciaFiccion->setTitulo("Ciencia Ficción");
$paginaCienciaFiccion->mostrar3();