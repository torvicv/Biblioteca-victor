<?php

include ("indexLibros.php");

class elGuardian extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Paul B. Thompson-Tonya R. Carter</cite><p>
            Colección:</p>&nbsp;<em>Preludios de la Dragonlance</em><p>Volumen:</p>&nbsp;1<blockquote><h3>Sinopsis:</h3>
            <q>Los personajes clave de la saga Dragonlance se reúnen el El Último Hogar para despedirse antes de que 
            cada uno emprenda viaje en busca de aventuras y fortuna. Allí están Caramon, Raistlin, Kitiara, Sturm, Flint, 
            Tanis y Tas, y todos se comprometen a reunirse otra vez en el mismo lugar al cabo de cinco años. Es el &laquo;
            preludio&raquo; de una larga y apasionante historia.<br/>&nbsp;La novela se centra en las vicisitudes de 
            Kitiara y Sturm. Éste quiere ir a Solamnia, su patria, para buscar a su padre y Kitiara decide acompañarlo. 
            Unos divertidos gnomos los llevan en un ingenioso barco volador, inventado, naturalmente, por ellos. Sin 
            embargo, en pleno vuelo un rayo estropea uno de los mecanismos de la nave y se estrella contra Lunitari. Así 
            pues, la luna roja de Krynn será el singular y mágico paraje donde se desarrollarán las aventuras de los dos 
            amigos y de los gnomos, y donde encontrarán a Cupelix, el Guardian de Lunitari, que custodia los huevos de los 
            Dragones del Bien...<br/>&nbsp;<em>El Guardián de Lunitari</em> es el primer volumen de la trilogía <em>
            Preludios de la Dragonlance</em> que logra un perfecto perfil de sus protagonistas: la proverbial seriedad 
            de Sturm, la tozudez y bravuconería de Kitiara y la deliciosa personalidad de los gnomos con sus ingeniosos 
            inventos, su eterna alegría y su incesante parloteo. Todo ello, junto con la sucesión inacabable de aventuras, 
            acción trepidante y una sutil ironía y buen humor hacen de esta obra una grata lectura en espera de su 
            continuación.</q></blockquote></article>";
}

$paginaElGuardian = new elGuardian();
$paginaElGuardian->setTitulo("El Guardián de Lunitari");
$paginaElGuardian->setEnlace("cienciaFiccion.php");
$paginaElGuardian->mostrar();