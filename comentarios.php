<?php
include ("index0.php");

class comentarios extends pagina{

function Tematica(){
    $enviado = FALSE;

    $nombre = filter_input(INPUT_POST, 'nombre');
    $email = filter_input(INPUT_POST, 'email');
    $comentario = filter_input(INPUT_POST, 'comentario');
    $aDireccion = "victor@sevilla.org";
    $asunto = "Comentarios desde el sitio web";
    $contenidoEmail = "Nombre: $nombre\nEmail:$email\nComentario:$comentario\n";

    $enviado = mail($aDireccion, $asunto, $contenidoEmail, $email);

    if($enviado === TRUE){
        echo "<font style='color: blue; font-size: 200%'>";
        echo "El mensaje se ha enviado correctamente.</font>";
    }else{
        echo "<font style='color: red; font-size: 200%'>";
        echo "El mensaje no se ha enviado correctamente.</font>";
    }
}
}

$paginaComentarios = new comentarios();
$paginaComentarios->setTitulo("Formulario Comentarios");
$paginaComentarios->mostrar();