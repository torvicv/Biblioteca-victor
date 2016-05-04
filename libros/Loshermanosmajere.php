<?php

include 'indexLibros.php';

class losHermanos extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Kevin Stein</cite><p>Colección:</p>&nbsp;<em>
            Preludios de la Dragonlance</em><p>Volumen:</p>&nbsp;3<blockquote><h3>Sinopsis:</h3><q>Los famosos Caramon y 
            Raistlin Majere, acompañados por un kender, llegan cerca de la ciudad de Mereklar donde encuentran un cartel 
            en el que se solicita &laquo;personas adiestradas y expertas&raquo; para realizar una importante investigación...
            <br/>&nbsp;Los hermanos deciden ofrecerse y averiguan que el trabajo consiste en hallar a los gatos de 
                Mereklar, que han desaparecido misteriosamente. Lo que parece una cuestión trivial, no es tal, sino que 
                estos animales tienen una importancia fundamental, pues, según cuenta la leyenda, son los que salvarán a 
                la ciudad de las fuerzas del Mal.<br/>&nbsp;Además de la desaparición de los gatos, los miembros del 
                Consejo empiezan a ser asesinados uno tras otro por un extraño felino de grandes proporciones. Raistlin 
                intuye que todos los sucesos están relacionados con el Festival del Ojo, durante el cual las tres lunas 
                de Krynn confluirán una sobre otra, momento en el que, gracias a esa conjunción, se abrirá la puerta 
                mágica y la Reina de la Oscuridad intentará penetrar en Mereklar y apoderarse de Krynn.<br/>&nbsp;¿Podrán 
                nuestros tres amigos destruir el altar de la malvada Takhisis y evitar la catástrofe?<br/>&nbsp;Una vez 
                más algunos de los héroes de la Dragonlance sorprenden a los lectores con sus increibles aventuras y 
                acaparan de nuevo la atención de los seguidores de la saga.</q></blockquote></article>";
}

$paginaLosHermanos = new losHermanos();
$paginaLosHermanos->setTitulo("Los hermanos Majere");
$paginaLosHermanos->setEnlace("cienciaFiccion.php");
$paginaLosHermanos->mostrar();