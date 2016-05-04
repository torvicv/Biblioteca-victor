<?php

include("index0.php");
class librosPrestados extends pagina{
function Tematica(){
$nombrePrestado = filter_input(INPUT_POST, 'nombre');
$emailPrestado = filter_input(INPUT_POST, 'email');
$libroPrestado = filter_input(INPUT_POST, 'libro');
setlocale(LC_ALL ,"es");
$date = strftime("%X %A %d %B %Y");

if(strlen($nombrePrestado)>0){
    if(preg_match("/^[A-Za-z0-9_\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/", $emailPrestado)){
        if($this->buscarLibro($libroPrestado)=== TRUE){
    
    echo "El nombre a quien se ha prestado el libro es: " . $nombrePrestado;
    echo "<br/>";
    echo "El email de a quien se ha prestado el libro es: " . $emailPrestado . "<br/>";
    echo "El libro prestado es: " . $libroPrestado . "<br/>";
    echo "En la hora y fecha indicada: ". $date ."<br/>";
    
    $fp = fopen("Biblioteca/librosPrestados.txt", "a");
    
    $stringSalida = $date . "\t" . $nombrePrestado . "\t" . $emailPrestado . 
            "\t" . $libroPrestado . "\n";
    if(!$fp){
        echo "<font color=blue>";
        echo "<p>La orden no ha sido procesada. Por favor inténtelo de nuevo mas tarde.</p>";
        echo "</font>";
    }else{
        
        flock($fp, LOCK_EX);
        
        fwrite($fp, $stringSalida);
        
        flock($fp, LOCK_UN);
        
        fclose($fp);
        echo "<font color=red>";
        echo "La orden ha sido procesada y guardada.";
        echo "</font>";
    }
        }else{
        echo "<font color=blue>";
        echo "<p>El libro no esta en la biblioteca o esta mal escrito el nombre."
        . "Pruebe escribiendo la primera letra en mayúscula.</p></font>";
        }
    }else{
           echo "<font color=red>";
           echo "<p>El email no es correcto</p></font>";
        }
    }else{
        echo "<font color=green>";
        echo "<p>Introduzca un nombre</p></font>";
    }
}
function buscarLibro($libroPrestado){
    while(list($tema,$titulo) = each($this->arrayLibros)){
        if(in_array ($libroPrestado, $titulo)){
            return TRUE;
        }
    }
    return FALSE;
} 
}

$paginaLibrosPrestados = new librosPrestados();
$paginaLibrosPrestados->setTitulo("Datos del cliente");
$paginaLibrosPrestados->mostrar();