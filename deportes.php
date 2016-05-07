<?php

include 'inicio.inc';

class deportes extends inicio2{
    
    var $librosDeportes = array("Voleibol" =>array("Voleibol-reglas",
                                                   "Voleibol-deporte 92",
                                                   "Voleibol",
                                                   "Manual del preparador de voleibol",
                                                   "Voleibol-guia de competiciones nacionales",
                                                   "Voley, mayo-junio 1996",
                                                   "Voleyplaya-nº17",
                                                   "Voleibol set-nº4"),
                                "Futbol" =>array("El futbol, sin ley",
                                                 "¿Quieres ser futbolista?",
                                                 "Historia del futbol club barcelona",
                                                 "Futbol",
                                                 "Setenta años de liga-coleccion As",
                                                 "F.c. barcelona-diario 16"),
                                "Enciclopedia de los deportes" => array("Enciclopedia de los deportes 1",
                                                                        "Enciclopedia de los deportes 2",
                                                                        "Enciclopedia de los deportes 3"),
                                "Varios" => array("Correr",
                                                  "Educacion fisica para 2º b.u.p.",
                                                  "Tai-chi, paso a paso",
                                                  "Anuario Marca 1995/96",
                                                  "Curso de monitor y entrenador nacional de fisicoculturismo"));
            
    function tematicas($tematica){
        parent::tematicas($this->librosDeportes);
    }
   
}

$paginaDeportes = new deportes();
$paginaDeportes->setTitulo("Deportes");
$paginaDeportes->mostrar3();