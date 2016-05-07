
<?php

include("index0.php");

class inicio2 extends pagina{
    var $fila2botones = array("Filosofia" => "filosofia.php",
                              "Ciencia Ficción" => "cienciaFiccion.php",
                              "Deportes" => "deportes.php",
                              "Comics" => "comics.php",
                              "Jardineria" => "jardineria.php",
                              "Novelas" => "novelas.php",
                              "Varios" => "varios.php");
    var $instrucciones = "<aside><h3>Instrucciones</h3>Para pedir prestado el libro, pincha en el "
            . "libro escogido que te llevará a la página del libro.</aside>";
    var $libros;
    
            function tematicas($tematica) { 
                echo "<table id='cf'>";
                while (list($volumenes,$titulos)=each($tematica)){
                    echo "<tr><th rowspan='".count($titulos)."'>$volumenes</th>";
                    natcasesort($titulos);
                    $provisional = current($titulos);
                    while (list($key,$titulo)=each($titulos)){
                        if(preg_match("/(\¿|\?)/", $titulo)){
                            $eliminarInterrogacion = preg_replace("/(\¿|\?)/", "", $titulo);
                            $eliminarEspacios = str_replace(" ", "", $eliminarInterrogacion);
                            if($provisional === $titulo){
                                echo "<td><a href='libros/$eliminarEspacios.php'>$titulo</a></td></tr>";
                            }else{
                                echo "<tr><td><a href='libros/$eliminarEspacios.php'>$titulo</a></td></tr>";
                            }
                        }elseif(preg_match("/(\º|\.|\/)/", $titulo)){
                            $eliminarCaracteres = preg_replace("/(\º|\.|\/)/", "", $titulo);
                            $eliminarEspacios = str_replace(" ", "", $eliminarCaracteres);
                            if($provisional === $titulo){
                                echo "<td><a href='libros/$eliminarEspacios.php'>$titulo</a></td></tr>";
                            }else{
                                echo "<tr><td><a href='libros/$eliminarEspacios.php'>$titulo</a></td></tr>";
                            }
                        }elseif(preg_match("/\ñ/", $titulo)){
                            $eliminarñ = preg_replace("/\ñ/", "n", $titulo);
                            $eliminarEspacios = str_replace(" ", "", $eliminarñ);
                            if($provisional === $titulo){
                                echo "<td><a href='libros/$eliminarEspacios.php'>$titulo</a></td></tr>";
                            }else{
                                echo "<tr><td><a href='libros/$eliminarEspacios.php'>$titulo</a></td></tr>";
                            }
                        }else{
                            $eliminarEspacios = str_replace(" ", "", $titulo);
                            if($provisional === $titulo){
                                echo "<td><a href='libros/$eliminarEspacios.php'>$titulo</a></td></tr>";
                            }else{
                                echo "<tr><td><a href='libros/$eliminarEspacios.php'>$titulo</a></td></tr>";
                            }                           
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
    function mostrar3(){
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
                $this->tematica($this->libros);
                $this->mostrarFooter();
                echo "</body>\n</html>\n";
    }
}