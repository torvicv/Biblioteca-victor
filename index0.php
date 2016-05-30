<!DOCTYPE html>

        <?php
        class pagina{
            //atributos de la clase
            var $arrayLibros = array("Filosofia"=>array("Ecce homo",
                                                        "Crepusculo de los idolos",
                                                        "La gaya ciencia",
                                                        "Mas alla del bien y del mal",
                                                        "Politica",
                                                        "Etica",
                                                        "El estado y la revolucion",
                                                        "Diccionario abreviado de filosofia",
                                                        "El manifiesto comunista"),
                                     "Ciencia Ficcion"=>array("La espada del samurai",
                                                              "Los anillos de saturno",
                                                              "La ruta de los piratas",
                                                              "El secreto de los caballeros",
                                                              "La guerra de secesion",
                                                              "El retorno de los dragones",
                                                              "La tumba de huma",
                                                              "La reina de la oscuridad",
                                                              "El trono de hierro",
                                                              "El laberinto de la locura",
                                                              "Apertura golgotha",
                                                              "Los circulos del infierno",
                                                              "Apendices",
                                                              "La leyenda de huma",
                                                              "Espada de reyes",
                                                              "El caballero de solamnia",
                                                              "El guardian de lunitari",
                                                              "El pais de los kenders",
                                                              "Los hermanos majere",
                                                              "Ambar y cenizas",
                                                              "Ambar y hierro",
                                                              "Ambar y sangre",
                                                              "El reino de istar",
                                                              "El cataclismo",
                                                              "La guerra de la lanza",
                                                              "Kaz, el minotauro",
                                                              "Las puertas de thorbardin",
                                                              "El caballero galen",
                                                              "La segunda generacion",
                                                              "Raistlin, el aprendiz de mago",
                                                              "Raistlin, crisol de la magia",
                                                              "Raistlin, mago guerrero",
                                                              "Raistlin, el tunica roja",
                                                              "El amanecer de una nueva era",
                                                              "El dragon azul",
                                                              "Conjuro de dragones",
                                                              "Tanis el semielfo",
                                                              "Flint, rey de los gullys",
                                                              "La mision de riverwind",
                                                              "Qualinost",
                                                              "El incorregible tas",
                                                              "El codigo y la medida",
                                                              "La senda de la profecia",
                                                              "La reina de la hechiceria",
                                                              "La luz del orbe",
                                                              "El castillo de la magia",
                                                              "La ciudad de las tinieblas",
                                                              "La sombra de sus alas",
                                                              "Tigana",
                                                              "La maldicion del dragon",
                                                              "El mirlo en el crepusculo",
                                                              "El mirlo y la magia",
                                                              "El mirlo en las tinieblas",
                                                              "El mirlo de la esperanza"),
                                     "Deportes"=>array("Voleibol-reglas",
                                                       "El futbol, sin ley",
                                                       "¿Quieres ser futbolista?",
                                                       "Correr",
                                                       "Historia del futbol club barcelona",
                                                       "Voleibol-deporte 92",
                                                       "Educacion fisica para 2º b.u.p.",
                                                       "Voleibol",
                                                       "Manual del preparador de voleibol",
                                                       "Tai-chi, paso a paso",
                                                       "Futbol",
                                                       "Enciclopedia de los deportes 1",
                                                       "Enciclopedia de los deportes 2",
                                                       "Enciclopedia de los deportes 3",
                                                       "Anuario marca 1995/96",
                                                       "Curso de monitor y entrenador nacional de fisicoculturismo",
                                                       "Voley, mayo-junio 1996",
                                                       "Voleyplaya-nº17",
                                                       "Voleibol set-nº4",
                                                       "Setenta años de liga-coleccion as",
                                                       "F.c.barcelona-diario 16"),
                                    "Jardineria" => array("El libro del jardin",
                                                          "Del cannabis y su cultivo",
                                                          "Tecnicas de jardineria",
                                                          "Enciclopedia de la jardineria",
                                                          "Tus plantas 1",
                                                          "Tus plantas 2",
                                                          "Tus plantas 3"),
                                    "Novelas" => array("Amistad",
                                                       "El clan del oso cavernario",
                                                       "Colmillo blanco",
                                                       "La costa de marfil",
                                                       "El hombre de san petersburgo",
                                                       "Misterio de los asaltos terrorificos",
                                                       "Misterio del leon nervioso",
                                                       "Misterio de las huellas flameantes",
                                                       "Misterio del tesoro desaparecido",
                                                       "Jugando desnudo en la arena",
                                                       "Juan Salvador Gaviota",
                                                       "El jugador",
                                                       "Las aventuras de arturo gordon pym",
                                                       "El bosque en llamas"),
                                    "Varios" => array("Como superar las matematicas de 3ºb.u.p.",
                                                      "Age of empires, the age of kings",
                                                      "El vendedor mas grande del mundo",
                                                      "Quiromasaje facil",
                                                      "Student book",
                                                      "Practice book",
                                                      "Age of empires",
                                                      "La leyenda de las palabras",
                                                      "El libro de las fabulas",
                                                      "Cuentos al amor de la lumbre",
                                                      "Dos + una = dracula",
                                                      "La conquista de las profundidades marinas"),
                                    "Comics" => array("Eric Castel, los juniors de Eric",
                                                      "Eric Castel, partido de vuelta",
                                                      "Eric Castel, ¡tarjeta roja!",
                                                      "Eric Castel, ¡de cara a gol!",
                                                      "Eric Castel, el hombre de la tribuna F",
                                                      "Eric Castel, la noche del Tibidabo",
                                                      "Eric Castel, la gran decision",
                                                      "Eric Castel, los cinco primeros minutos",
                                                      "Eric Castel, el regreso",
                                                      "Eric Castel, ¡¡secuestro!!",
                                                      "Eric Castel, la casa del Cormoran",
                                                      "Eric Castel, aventura en Tunez",
                                                      "Eric Castel, ¡alarma en el museo!",
                                                      "Bateadores, nº 3",
                                                      "Bateadores, nº 4",
                                                      "Bateadores, nº 11",
                                                      "Gamma el hombre de hierro, nº 1",
                                                      "Gamma el hombre de hierro, nº 2",
                                                      "Gamma el hombre de hierro, nº 3",
                                                      "Gamma el hombre de hierro, nº 4",
                                                      "Gamma el hombre de hierro, nº 5",
                                                      "Gamma el hombre de hierro, nº 6",
                                                      "Gamma el hombre de hierro, nº 7",
                                                      "Dark Angel, nº 2",
                                                      "Metal, durango",
                                                      "Lucky Luke, la curacion de los Dalton",
                                                      "Tintin, stock de coque",
                                                      "Tintin, Tintin y los picaros",
                                                      "Tintin, Tintin en el pais del oro negro",
                                                      "Spirou y Fantasio, el retorno de Z",
                                                      "Papyrus, la metamorfosis de Imhotep",
                                                      "Percevan, el arenal de El Jerada",
                                                      "Cartland, el niño luz",
                                                      "Blueberry, jinete azul",
                                                      "Blueberry, nariz rota",
                                                      "La vuelta al mundo en ochenta dias",
                                                      "Famosas novelas, nº 1",
                                                      "Flash Gordon, tomo V",
                                                      "Tormenta sobre China",
                                                      "Barcelona, la aventura de una ciudad",
                                                      "Principe Valiente, nº 28",
                                                      "Principe Valiente, nº 29",
                                                      "Principe Valiente, nº 30",
                                                      "Principe Valiente, nº 27",
                                                      "Principe Valiente, tomo V",
                                                      "Tirante el blanco",
                                                      "Transformers, nº 42",
                                                      "Hawkmoon joya en la frente, traicion",
                                                      "El mundo perdido de Warlord, frente a la muerte",
                                                      "Aliens vs. Predator, nº 3",
                                                      "Predator-big game, nº 3",
                                                      "Aliens guerra contra la tierra, nº 4",
                                                      "New statesmen, nº 1",
                                                      "Silent möbius, nº 9",
                                                      "Silent möbius, nº 6",
                                                      "Silent möbius, nº 3",
                                                      "Bubblegum crisis, nº 1",
                                                      "Aquaman, nº 1 y 2",
                                                      "Ben 10, y fueron diez",
                                                      "Nuevos titanes, nº 49 y 50",
                                                      "Nuevos titanes, nº 32",
                                                      "Nuevos titanes, nº del 26 al 30",
                                                      "Nuevos titanes, nº 14",
                                                      "Nuevos titanes, nº 13",
                                                      "Nuevos titanes, nº 12",
                                                      "Nuevos titanes, nº 11",
                                                      "Nuevos titanes, nº 7",
                                                      "Nuevos titanes, nº 3",
                                                      "Nuevos titanes, nº 1",
                                                      "Estela plateada, nº del 11 al 15",
                                                      "Green lantern, nº del 26 al 28",
                                                      "Green lantern, nº del 21 al 25",
                                                      "Green lantern, nº 20",
                                                      "Green lantern, nº 19",
                                                      "Green lantern, nº 17",
                                                      "Green lantern, nº 16",
                                                      "Green lantern, nº 10",
                                                      "Green lantern, nº 8",
                                                      "Green lantern, nº 6",
                                                      "Green lantern, nº 4",
                                                      "Capa y puñal, nº 2",
                                                      "Spiderman, comic sin numerar sobre \"el tigre\"",
                                                      "Spiderman, comic sin numerar sobre \"el hombre reptil\"",
                                                      "Spiderman, nº 27",
                                                      "Los nuevos mutantes, nº 54",
                                                      "Los nuevos mutantes, nº 53",
                                                      "Los nuevos mutantes, nº 54",
                                                      "Los nuevos mutantes, nº del 48 al 50",
                                                      "Los nuevos mutantes, nº del 45 al 47",
                                                      "Los nuevos mutantes, nº del 41 al 44",
                                                      "Los nuevos mutantes, nº del 36 al 40",
                                                      "Los nuevos mutantes, nº 29",
                                                      "Los nuevos mutantes, nº 27",
                                                      "Los nuevos mutantes, nº 26",
                                                      "Mortal kombat, nº 3",
                                                      "Next men, nº 7",
                                                      "La cosa, nº 3",
                                                      "Estela plateada, nº del 6 al 10",
                                                      "Secret wars II, nº 32",
                                                      "Secret wars II, la vida gana",
                                                      "Secret wars II, nº 34",
                                                      "Secret wars II, nº 35",
                                                      "Secret wars II, nº 36",
                                                      "Secret wars II, nº 43",
                                                      "Secret wars II, nº 44",
                                                      "Secret wars II, nº 46",
                                                      "Secret wars II, nº 31",
                                                      "Secret wars II, nº 29",
                                                      "Secret wars II, nº 28"));
            var $tematicaLibros = array("Filosofia","Ciencia Ficción","Deportes","Comics","Jardineria","Novelas",
                "Varios");
            var $contenido = "<h1><span class=\"inicio\">BIBLIOTECA VICTOR CABRAL VIDA</span></h1>";
                    function Tematica(){
                        for($x=0;$x<count($this->tematicaLibros);$x++){
                            echo "<h2><span class=\"inicio\">".$this->tematicaLibros[$x]."</span></h2>";                           
                        }
                    }

            var $titulo = "Biblioteca Online";
            var $palabrasClave = "Libreria online, aqui pondremos las palabras clave.
                Podemos personalizarlas para cada pagina.";
            var $description = "Aquí pondremos la description de la pagina";
            var $botones = array("Inicio" => "index.php",
                                 "Contacto" => "contacto.php",
                                 "Servicios" => "servicio.php",
                                 "Mapa" => "mapa.php");
            var $instrucciones = "<aside><h3>Instrucciones</h3>Para pedir prestado un libro tienes que pinchar"
                    . "&nbsp;en la temática correspondiente, y allí elegir el libro.</aside>";
            //operaciones de la clase
            function setContenidos($nuevosContenidos){
                $this->contenido = $nuevosContenidos;
            }
            function setTitulo($nuevoTitulo){
                $this->titulo = $nuevoTitulo;
            }
            function setDescription($nuevaDescripcion){
                $this->description = $nuevaDescripcion;
            }
            function setPalabrasClave($nuevasPalabraClave){
                $this->palabrasClave = $nuevasPalabraClave;
            }
            function setBotones($nuevosBotones){
                $this->botones = $nuevosBotones;
            }
            
            function mostrar(){
                echo "<html LANG=\"es\">\n<head>\n";
                $this->mostrarTitulo();
                $this->mostrarAutor();
                $this->mostrarDescription();
                $this->mostrarPalabraClave();
                $this->mostrarBase();
                $this->mostrarEstilos();
                echo "</head>\n<body>\n";
                $this->mostrarCabecera();
                $this->mostrarMenu($this->botones);
                //$this->ordenarTabla();
                echo $this->contenido;
                $this->Tematica();
                $this->mostrarFooter();
                echo "</body>\n</html>\n";
            }
            
            function mostrarTitulo(){
                echo "<title>$this->titulo</title>";
            }
            function mostrarPalabraClave(){
                echo "<meta name=\"keywords\" content=\"$this->palabrasClave\">";
            }
            function mostrarAutor(){
                echo "<meta name=\"author\" content=\"Victor Cabral Vida\"/>";
            }
            function mostrarBase(){
                echo "<base target=\"_blank\"/>";
            }
            function mostrarDescription(){
                echo "<meta name=\"description\" content=\"$this->description\"/>";
            }
            function mostrarEstilos(){
                //escribir aqui el estilo que queremos darle a la pagina(css)
                ?>
        <style>
            table#index {float: left}
            span#inicio {background-color: yellow; color: blue;}
            span.inicio {background-color: yellow; color: blue;}
            h1 {text-shadow: 3px 3px 3px darkblue,-3px -3px 3px yellow;}
            img.image {border: 0px;}
            img.cabecera {width: 100%;}
            footer {background-color: black;color: white;clear: both}
            span.menu {background-color: black; color: yellow; border-radius: 6px 6px 6px 6px;}
            span#link {background-color: white; margin-left: 10px}
            table#cf {min-width: 600px; border-spacing: 1px;} /* está en inicio.inc */
            th {background-color: darkblue; color: lightblue;}
            td {background-color: lightcyan; color: darkcyan; border: 5px outset lightcyan; padding: 5px;}
            td:hover {background-color: lightblue;}
            a:link {text-decoration: none;}
            a:visited {text-decoration: none;}
            a:hover {text-decoration: underline;}
            a:active {text-decoration: underline;}
            aside {float: right; width: 150px; background-color: aqua; padding: 10px;
                   border: 10px solid transparent;text-align: justify;margin-bottom: 30px;margin-left: 30px;
                   border-image: url("Biblioteca/border1.jpg") 25% stretch;}/* está tanto en inicio.inc como en indexLibros.php */
            aside#border {border-image: url("../Biblioteca/border1.jpg") 25% stretch;}
            article#libros {background-color: lightblue;padding: 10px;border: 10px groove lightblue;} /*esta en todos los libros de carpeta libros */
            div#mdt {text-align: center;} /* se encuentra en la colección La máquina del tiempo */
            div#contenido {background-color: turquoise;padding: 15px;color: blue;border: 10px ridge turquoise;} /* está en indexLibros.php */
            h4#prestar {text-align: center;} /* esta en indexLibros.php */
            pre {position: relative; left: 700px;} /* está en enElTorbellino.php */
            div.punto {text-align: center;width: 85%;} /* esta en Taichi,pasoapaso.php, en Enciclopediadelosdeportes1, 2 y 3, Anuariomarca199596, etc. */
            div.margin {margin-left: 10px;} /* esta en Ellibrodeljardin.php */
            span.flotante {float: left;} /* está en Ellibrodeljardin.php */
            div#retroceder {text-align: right;} /* esta en indexLibros.php */
            div.position {position: relative; left: 500px;}
            span#uppercase {text-transform: uppercase;} /* está en Elclandelosocavernario.php */
            div#tamañoletras {font-size: 150%;} /* está en Elclandelosocavernario.php */
            hr {color: black;}
            div.pre{ white-space: pre;}
            p.indentation {text-indent: 30px;} /* esta en Laleyendadelaspalabras.php */
            .circulo {float: left;}
        </style>
        <?php
            }
            function mostrarCabecera(){
                echo "<img class=\"cabecera\" src=\"Biblioteca/PIC_0015.jpg\" alt=\"Imagen\" height=\"300\">";
            }
            function mostrarMenu($botones){
                echo "<table style=\"background-color: white; color: black;font-family: verdana;font-size: 120%;
                    cellspacing: 10px; cellpadding: 10px; width: 100%\">\n";
                echo "<tr>\n";
                $width = 100/count($botones);
                while (list($nombre,$url)=  each($botones)){
                    $this->mostrarBoton($width,$nombre,$url,!$this->isUrlCurrentPage($url));
                }
                echo "</tr>\n</table>\n";
            }
            function isUrlCurrentPage($url){
                /*esta no funciona if(strpos($GLOBALS['SCRIPT NAME'],$url) == FALSE) ni
                 * tampoco if(strpos($_SERVER['SCRIPT_NAME'],$url) == FALSE)*/
                if(strpos(filter_input(INPUT_SERVER,'SCRIPT_NAME'),$url) == FALSE){
                    return FALSE;
                }else{
                    return TRUE;
                }
            }
            function mostrarBoton($width,$nombre,$url,$activo = TRUE){
                if($activo){
                    echo "<td style=\"outline: 2px solid lightcyan; width: $width%\">
                        <a href=\"$url\"><img class=\"image\" src=\"Biblioteca/images.png\" 
                            alt=\"$nombre\" width=\"15\" height=\"15\"></a>
                                <a href=\"$url\"><span class=\"menu\">$nombre</span></a>";
                    //aqui hay un dato para rellenar en mostrarEstilos().El <span>.
                }else{
                    echo "<td style=\"outline: 2px solid lightcyan; width: $width%\">
                        <img src=\"Biblioteca/images1.png\" alt=\"$nombre\"
                            width=\"15\" height=\"15\">
                            <span class=\"menu\">$nombre</span>";
                }
            }
            function mostrarFooter(){
                echo "<footer><p>Curso Videotutorial Jesus Conde-Victor Cabral Vida 2015</p></footer>";
            }
        
        }