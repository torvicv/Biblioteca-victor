<?php

include 'indexLibros.php';

class Mago extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Margaret Weis-Don Perrin</cite><p>Colección:</p>
        &nbsp;<em>La forja de un túnica negra</em><p>Volumen:</p>&nbsp;3<blockquote><h3>Sinopsis:</h3>&nbsp;<q>Pocos días 
            después de superar la prueba, Raistlin y Caramon abandonan la Torre de Wayreth. En la primera parte del viaje, 
            los acompaña el protector del joven mago, Antímodes, quien les da una carta de presentación para un noble que 
            recluta mercenarios. Por su parte, Kitiara también se une a un ejército que se está agrupando en la peligrosa 
            ciudad de Sancrist a las órdenes del implacable general Ariakas. Las fuerzas de la Reina de la Oscuridad ponen 
            en marcha los planes de su malvada señora y cuentan con la ayuda de un ser que muchos creían legendario: un 
            Dragón Rojo.</q></blockquote></article>";
}

$paginaMago = new Mago();
$paginaMago->setTitulo("Raistlin, mago guerrero");
$paginaMago->setEnlace("cienciaFiccion.php");
$paginaMago->mostrar();