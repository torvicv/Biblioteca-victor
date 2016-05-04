<?php

include 'index0.php';

class comics extends pagina{
    
    var $instrucciones = "<aside><h3>Instrucciones</h3>Para pedir prestado el comic pincha en el titulo "
            . "o número que te llevara al formulario para pedir el comic.</aside>";
    
    var $arrayComics = array("Eric Castel" => array("Los juniors de Eric 1",
                                                    "Partido de vuelta 2",
                                                    "¡Tarjeta roja! 3",
                                                    "¡De cara a gol! 4",
                                                    "El hombre de tribuna F 5",
                                                    "El secreto de Pablito 6",
                                                    "La noche del Tibidado 7",
                                                    "La gran decisión 8",
                                                    "Los cinco primeros minutos 9",
                                                    "El regreso 10",
                                                    "¡¡Secuestro!! 11",
                                                    "La casa del Cormorán 12",
                                                    "Aventura en Túnez 13",
                                                    "¡Alarma en el museo! 14"),
                             "Bateadores" => array("nº 3",
                                                   "nº 4",
                                                   "nº 11"),
                             "Gamma, el hombre de hierro" => array("nº 1",
                                                                   "nº 2",
                                                                   "nº 3",
                                                                   "nº 4",
                                                                   "nº 5",
                                                                   "nº 6",
                                                                   "nº 7"),
                             "Dark Angel" => array("nº 2"),
                             "Famosas novelas" => array("nº 1"),
                             "Editorial bruguera" => ("La vuelta al mundo en ochenta días"),
                             "Blueberry" => array("Nariz rota 15",
                                                  "Jinete azul 14"),
                             "Cartland" => array("El niño luz 8"),
                             "Percevan" => array("El arenal de El Jerada 5"),
                             "Papyrus" => array("La metamorfosis de Imhotep"),
                             "Spirou y Fantasio" => array("El retorno de Z"),
                             "Tintin" => array("Tintin en el país del oro negro",
                                               "Tintin y los picaros",
                                               "Stock de coque"),
                             "Lucky Luke" => array("La curación de los Dalton"),
                             "Metal" => array("Durango"),
                             "Editorial bruguera" => array("Tirante el blanco"),
                             "Principe Valiente" => array("Tomo V",
                                                          "nº 27",
                                                          "nº 30",
                                                          "nº 29",
                                                          "nº 28"),
                             "Barcelona" => array("La aventura de una ciudad"),
                             "Editorial Totem" => array("Tormenta sobre China"),
                             "Flash Gordon" => array("Tomo V"),
                             "Ben 10" => array("Y fueron diez"),
                             "Aquaman" => array("nº 1 y 2"),
                             "Bubblegum crisis" => array("nº 1"),
                             "Silen möbius" => array("nº 3",
                                                     "nº 6",
                                                     "nº 9"),
                             "Predator-big game" => array("nº 3"),
                             "New statesmen" => array("nº 1"),
                             "Aliens guerra contra la Tierra" => array("nº 4"),
                             "Aliens vs. Predator" => array("nº 3"),
                             "El mundo perdido de Warlord" => array("Frente a la muerte"),
                             "Hawkmoon joya en la frente" => array("Traición"),
                             "Transformers" => array("nº 42"),
                             "Secret wars II" => array("nº 28",
                                                       "nº 29",
                                                       "nº 31",
                                                       "nº 46",
                                                       "nº 44",
                                                       "nº 43",
                                                       "nº 36",
                                                       "nº 35",
                                                       "nº 34",
                                                       "la vida gana",
                                                       "nº 32",),
                             "Estela plateada" => array("nº del 6 al 10",
                                                        "nº del 11 al 15"),
                             "La cosa" => array("nº 3"),
                             "Next men" => array("nº 7"),
                             "Mortal kombat" => array("nº 3"),
                             "Los nuevos mutantes" => array("nº 26",
                                                            "nº 27",
                                                            "nº 29",
                                                            "nº del 36 al 40",
                                                            "nº del 41 al 44",
                                                            "nº del 45 al 47",
                                                            "nº del 48 al 50",
                                                            "nº 52",
                                                            "nº 53",
                                                            "nº 54"),
                             "Spiderman" => array("nº 27",
                                                  "Comic sin numerar sobre \"el tigre\"",
                                                  "Comic sin numerar sobre \"el hombre reptil\""),
                             "Capa y puñal" => array("nº 2"),
                             "Green lantern" => array("nº 4",
                                                      "nº 6",
                                                      "nº 8",
                                                      "nº 10",
                                                      "nº 16",
                                                      "nº 17",
                                                      "nº 19",
                                                      "nº 20",
                                                      "nº del 21 al 25",
                                                      "nº del 26 al 28"),
                             "Nuevos titanes" => array("nº 1",
                                                       "nº 3",
                                                       "nº 7",
                                                       "nº 11",
                                                       "nº 12",
                                                       "nº 13",
                                                       "nº 14",
                                                       "nº del 26 al 30",
                                                       "nº 32",
                                                       "nº 49 y 50"));
    var $fila2botones = array("Filosofia" => "filosofia.php",
                              "Ciencia Ficción" => "cienciaFiccion.php",
                              "Deportes" => "deportes.php",
                              "Comics" => "comics.php",
                              "Jardineria" => "jardineria.php",
                              "Novelas" => "novelas.php",
                              "Varios" => "varios.php");
    
    function Tematica() {
        echo "<table id=\"cf\">";
        while (list($coleccion, $titulos)=  each($this->arrayComics)){
            echo "<tr><th rowspan=\"".count($titulos)."\">$coleccion</th>";
            natcasesort($titulos);
            $provisional = current($titulos);
            while (list($clave, $titulo) = each($titulos)){
                if($titulo === $provisional){
                    echo "<td><a href=\"formularioPrestar.php\">$titulo</a></td></tr>";
                }else{
                    echo "<tr><td><a href=\"formularioPrestar.php\">$titulo</a></td></tr>";
                }
            }
        }
        echo "</table>";
    }
    function mostrar(){
                echo "<html>\n<head>\n";
                $this->mostrarTitulo();
                $this->mostrarPalabraClave();
                $this->mostrarAutor();
                $this->mostrarBase();
                $this->mostrarDescription();
                $this->mostrarEstilos();
                echo "</head>\n<body>\n";
                $this->mostrarCabecera();
                $this->mostrarMenu($this->botones);
                $this->mostrarMenu($this->fila2botones);
                echo $this->contenido;
                echo $this->instrucciones;
                $this->Tematica();
                $this->mostrarFooter();
                echo "</body>\n</html>\n";
            }
}
$paginaComics = new comics();
$paginaComics->setDescription("Colección de comics");
$paginaComics->setPalabrasClave("Comics, superheroes, humor, deporte, futbol, beisbol");
$paginaComics->setTitulo("Comics");
$paginaComics->mostrar();