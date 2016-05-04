<?php

include ("index0.php");
class contacto extends pagina{
    function Tematica() {
        ?><blockquote><address>Victor Cabral Vida<br>
       Telefono: 675016413<br>
       email: torvicv@gmail.com, victor@sevilla.org</address></blockquote><?php
       parent::Tematica();
    }
}

$paginaContacto = new contacto();

$paginaContacto->setTitulo("Contacto Biblioteca Online");
$paginaContacto->mostrar();
