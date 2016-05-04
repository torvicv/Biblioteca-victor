<?php

include 'indexLibros.php';

$paginaTaichi = new libros();
$paginaTaichi->setDescription("Libro de taichi");
$paginaTaichi->setPalabrasClave("Tai chi, ejercicios, meditar");
$paginaTaichi->setTitulo("Tai chi, paso a paso");
$paginaTaichi->setContenidos2("<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Maestro Lam Kam Chuen</cite>
    <p>Editorial:</p>&nbsp;integral<blockquote><h3>Sinopsis:</h3><q>El Tai Chi ejercita el cuerpo, relaja la 
        mente y eleva el espíritu. Es una manera de meditar en movimiento. No se necesita ningún tipo de ropa 
        en especial y los movimientos se pueden realizar en un espacio mínimo. El manual de Tai Chi del maestro 
        Lam Kam Chuen presenta un programa de ejercicios minuciosamente elaborados para aprender progresimente 
        y muestra, paso a paso, la forma del círculo pequeño del maestro Lam. Esta forma fue ideada para sus 
        estudiantes de Occidente y para los lectores de este libro. Las secuencias cortas de movimientos lentos 
        y suaves incorporan y armonizan algunos de los elementos más importantes, como Chen, Yang, Wu, Shin y 
        Ng.<br/><br/><div class=\"punto\">TAI CHI, PASO A PASO te introducirá en los movimientos básicos del Tai Chi.<br/>&#8226<br/>Ejercicios especialmente seleccionados, que te ayudarán a aumentar tu 
        vigor, tu flexibilidad y tu resistencia.<br/>&#8226<br/>Un programa de 
        ejercicios beneficioso para la salud que resulta un poderoso antídoto contra el estrés.<br/>&#8226<br/>Las instrucciones y las ilustraciones garantizan que puedas realizar 
        correctamente los movimientos sin consultar a un profesor.<br/>&#8226<br/>
        Una base óptima para las clases de Tai Chi que se imparten en Occidente.<br/>&#8226
        <br/>Adecuado para personas de todas las edades y para aquellos que tienen poca o ninguna 
        experiencia.</div><br/><br/><b>Claro, conciso y práctico. Un manual indispensable para los principiantes y 
        para los que ya tienen experiencia.</b></q></blockquote></article>");
$paginaTaichi->setEnlace("deportes.php");
$paginaTaichi->mostrar();