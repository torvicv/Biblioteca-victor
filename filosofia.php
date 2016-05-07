<?php

include ("inicio.inc");

class filosofia extends inicio2{
    var $librosFilosofia = array("Aristoteles"=>array("Politica"),
                                 "Carlos Marx"=>array("El manifiesto comunista"),
                                 "Friedrich Nietzsche"=>array("La gaya ciencia",
                                                              "Ecce Homo",
                                                              "Mas alla del bien y del mal",
                                                              "Crepusculo de los idolos"),
                                 "José Ferrater Mora"=>array("Diccionario de filosofia abreviado"),
                                 "Lenin"=>array("El estado y la revolucion"),
                                 "Spinoza"=>array("Etica"));
                             function tematicas($tematica) {
                                 parent::tematicas($this->librosFilosofia);
                             }
                                               
}

$paginaFilosofia = new filosofia();
$paginaFilosofia->setTitulo("Filosofía");
$paginaFilosofia->mostrar3();