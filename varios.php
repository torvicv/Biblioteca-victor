<?php

include 'inicio.inc';

class varios extends inicio2{
    
    var $librosVarios = array("Pablo Taniguchi" => array("Como superar las matematicas de 3ºb.u.p."),
                              "Microsoft" => array("Age of empires 2, the age of kings",
                                                   "Age of empires"),
                              "Og-Mandino" => array("El vendedor mas grande del mundo"),
                              "Dr. Jesus Vazquez Gallego" => array("Quiromasaje facil"),
                              "Antonio Ribera" => array("La conquista de las profundidades marinas"),
                              "Antonio Perez Garcia" => array("Aprender a dibujar"),
                              "The Cambridge English Course" => array("Student book",
                                                                      "Practice book"),
                              "El catalá es facil" => array("El catala es facil"),
                              "Editorial Timun mas" => array("Dos + una = Dracula"),
                              "A. R. Almodovar" => array("Cuentos al amor de la lumbre"),
                              "Editorial miñon" => array("La leyenda de las palabras",
                                                         "El libro de las fabulas"));
    
                                                 function tematicas($tematica) {
                                                     parent::tematicas($this->librosVarios);
                                                 }
}

$paginaVarios = new varios();
$paginaVarios->setDescription("Colección variada de libros");
$paginaVarios->setTitulo("Varios");
$paginaVarios->mostrar3();