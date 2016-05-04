<?php

include ("index0.php");

class servicios extends pagina{
    function Tematica() {
        echo "Si quieres ver los libros prestados:";
        echo "<a href=\"leerLibrosPrestados.php\" title=\"ir a Libros Prestados\"><span id='link'>Libros Prestados</span></a><br/><br/>";
        echo "Si quieres hacer algún comentario:";
        echo "<a href=\"formularioComentarios.php\" title=\"ir a Comentarios\"><span id='link'>Comentarios</span></a>";
        parent::Tematica();
    }
}

$paginaServicios = new servicios();
$paginaServicios->setTitulo("Biblioteca Online Servicios");
$paginaServicios->mostrar();