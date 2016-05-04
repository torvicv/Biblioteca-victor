<?php

include 'indexLibros.php';

$paginaDelJardin = new libros();
$paginaDelJardin->setDescription("El libro del jardin");
$paginaDelJardin->setPalabrasClave("jardin, plantas, flores, arboles, arbustos, trasplante, poda, injertos"
        . ", parterres, estanques, emparrados, vallas, setos, cortavientos, senderos, muros");
$paginaDelJardin->setTitulo("El libro del jardín");
$paginaDelJardin->setContenidos2("<article id=\"libros\"><p>Escritor</p>&nbsp;<cite>Fausta Mainardi Fazio</cite>
    <br/><br/><blockquote><span class=\"flotante\">$paginaDelJardin->circulo</span><div class=\"margin\">¿Tienes 
        las semillas de una planta poco conocida y quiere saber cómo cultivarla? Aquí hallará una tabla de 
        casi doscientas plantas herbáceas, con datos sobre exposición, dimensiones, características, 
        utilización ideal, época de floración e información general sobre los procedimientos de cultivo.</div>
        <br/><span class=\"flotante\">$paginaDelJardin->circulo2</span><div class=\"margin\">¿Quiere plantar 
        árboles pero desea saber antes qué puede esperar en cuanto a frutos y flores, en cuanto a dimensiones, 
        en cuanto a época de floración, etc.?Le ofrecemos extensas tablas con todas las especies que pueden 
        interesarle.</div><br/><span class=\"flotante\">$paginaDelJardin->circulo3</span><div class=\"margin\">
        ¿Quiere conocer bien todos los problemas de multiplicación? Hallará páginas ampliamente ilustradas 
        para comprender a la perfección ejemplos y procedimientos.</div><br/><span class=\"flotante\">
        $paginaDelJardin->circulo4</span><div class=\"margin\">¿Le gusta un tipo de flores en particular: 
        hortensias, rosas, etc.? Le ofrecemos páginas específicas con todos los detalles.</div><br/><span 
        class=\"flotante\">$paginaDelJardin->circulo5</span><div class=\"margin\">¿Quiere crear un parterre con 
        una combinación predeterminada de colores? Le explicamos qué debe hacer.</div><br/><span 
        class=\"flotante\">$paginaDelJardin->circulo6</span><div class=\"margin\">¿Quiere destacar una 
        pendiente, levantar setos, obtener alfombras de flores de vivos colores? <b>El libro del jardín</b> le 
        ayuda también a esto.</div><br/><span class=\"flotante\">$paginaDelJardin->circulo7</span><div 
        class=\"margin\">¿O le gustaría dedicar una parte del jardín a las plantas medicinales y obtener una 
        verdadera farmacia natural en el exterior de su casa? Lea( y mire) qué debe hacer.</div><br/><br/>
        Una amplia guía llena de información práctica, para cultivar flores y árboles, arbustos y setos 
        adecuados a los suelos españoles. Un libro fácil, ameno y profusamente ilustrado en color.
    </blockquote></article>");
$paginaDelJardin->setEnlace("jardineria.php");
$paginaDelJardin->mostrar();