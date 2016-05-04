<?php


include("index0.php");

class inicio extends pagina{
    var $fila2botones = array("Filosofia" => "filosofia.php",
                              "Ciencia Ficción" => "cienciaFiccion.php",
                              "Deportes" => "deportes.php",
                              "Comics" => "comics.php",
                              "Jardineria" => "jardineria.php",
                              "Novelas" => "novelas.php",
                              "Varios" => "varios.php");
    
    function mostrar(){
                echo "<html manifest=\"biblioteca.appcache\">\n<head>\n";
                $this->mostrarTitulo();
                $this->mostrarPalabraClave();
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


$paginaInicio = new inicio();
$paginaInicio->setTitulo("Inicio Biblioteca Online");
$paginaInicio->mostrar();