<?php

include ("indexLibros.php");

class laEspada extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Michael Reaves</cite><p>Colección:<p>&nbsp;
            La maquina del tiempo<br/><br/><br/><blockquote><h3>Sinopsis:</h3><div id=\"mdt\"><h4>Año 1615</h4><b>
            Has retrocedido hasta la época de los samurais.</b></div><br/><q>Estás acorralado por los temibles ninjas, espías y 
            asesinos. Te llevan a viva fuerza al borde del foso de los tigres.<br/>Debes actuar de inmediato. ¿Desafías a 
            los ninjas o corres el riesgo de saltar al foso de los tigres? ¡Tu decisión puede conducirte al éxito o a 
            quedar perdido en el tiempo!</q></blockquote></article>";
}

$paginaLaEspada = new laEspada();
$paginaLaEspada->setTitulo("La espada del samurai");
$paginaLaEspada->setEnlace("cienciaFiccion.php");
$paginaLaEspada->mostrar();