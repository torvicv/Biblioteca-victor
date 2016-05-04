<?php

include 'indexLibros.php';

$paginaAmistad = new libros();
$paginaAmistad->setDescription("Novela sobre la esclavitud");
$paginaAmistad->setPalabrasClave("Novelas, historica, libro, pelicula");
$paginaAmistad->setTitulo("Amistad");
$paginaAmistad->setEnlace("novelas.php");
$paginaAmistad->setContenidos2("<article id=\"libros\"><p>Autor:</p>&nbsp;<cite>Alexs Pate</cite><p>Editorial:</p>
    &nbsp;Plaza Janés<blockquote><h3>Sinopsis:</h3><q>Basada en un hecho histórico, el motín ocurrido en 1839 en 
        un barco negrero español, esta novela narra la vicisitudes peripecias vividas por 53 jóvenes hombres y 
        mujeres -y por una joven nación- para conseguir que la libertad y la justicia sean las mismas para 
        todos los seres humanos.<br/>&nbsp;<em>Amistad</em> es la historia de un hombre ilegalmente cautivo, 
        Cinque, hijo de un jefe de la tribu africana mendé, quien lidera una sublevación llena de furia y coraje. 
        Es también la historia de John Quincy Adams, ex presidente norteamericano, quien pese a sus reticencias 
        iniciales acude a la llamada de la justicia y defiende a Cinque ante la Corte Suprema en un juicio que 
        cambiará las historia de su país. Y es la historia de unos hombres y mujeres que buscan encontrar la 
        verdad y hacer efectivos los principios fundamentales de la Constitución norteamericana. Brillantemente 
        narrada por el galardonado novelista <em>Alexs Pate</em>, <em>Amistad</em> simboliza el inquebrantable 
        espíritu humano de lucha, esperanza y libertad.</q><br/><br/>&laquo;Al contar esta historia aprendí que un 
        hombre esclavizado es capaz de hacer cualquier cosa para recuperar su libertad.&raquo;<br/><br/><div style=\"
        position: relative; left: 1000px;\">Steven Spielberg, director</div><br/><br/>&laquo;Una historia 
        verdadera sobre el coraje y la libertad, y que dice mucho acerca de lo que representa este país y su 
        gente.&raquo;<br/><br/><div style=\"position: relative; left: 1000px;\">Debbie Allen, productor
        </div></blockquote></article>");
$paginaAmistad->mostrar();