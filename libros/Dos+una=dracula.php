<?php

include 'indexLibros.php';

$paginaDos = new libros();
$paginaDos->setDescription("Libro infantil");
$paginaDos->setPalabrasClave("Libro, infantil, dracula");
$paginaDos->setEnlace("varios.php");
$paginaDos->setTitulo("Dos + una = Drácula");
$paginaDos->setContenidos2("<article id=\"libros\"><p>Autor:</p>&nbsp;<cite>Mercé Company i Agustí Asensio</cite>
    <p>Editorial:</p>&nbsp;Timun mas<blockquote><div style=\"width:30%;float:left;margin-right:50px;\">MERCÈ COMPANY, escritora nacida en 
        Barcelona en el año 1947, ha creado y escrito esta colección basándose en personajes reales a quienes 
        hace vivir unas aventuras en que, por las circunstancias y los escenarios donde se desarrollan, pueden 
        hallarse envueltos cualquier día los chicos y chicas más curiosos.<br/>&nbsp;A caballo entre la realidad 
        y la fantasía, estos libros pretenden ser el puente entre el libro de cuentos y la primera novela.<br/>
        &nbsp;La autora destina su producción literaria al campo infantil y juvenil, y ha sido galardonada con 
        los premios XVI Ciutat de'Olot, Crítica Serra d'Or 1983, VII Jaume March y III Premi Enric Valor del País 
        Valencià. Está casada y tiene dos hijas.</div><div style=\"width:65%;\">AGUSTÍ ASENSIO, ilustrador, nació 
        en Cardedeu (Barcelona) en el año 1949. Para dibujar los tres personajes de estas historias, se inspiró 
        en su sobrino mayor (Pere-Lluís), en el amigo más íntimo de su hija (Victor el Piula) y en una amiga de 
        cuando él era pequeño (Èlia).<br/>&nbsp;Algunos de sus libros están editados en el Japón. En 1983 fue 
        galardonado con el premio Crítica Serra d'Or. Las ilustraciones del libro Misión especial: Hipotenusa, 
        de esta misma colección, merecieron ser seleccionadas por la Muestra de Ilustradores de la Feria de 
        Bolonia (Italia), 1983. Posteriormente, el mismo libro recibió una mención del Ministerio de Cultura al 
        libro mejor editado por la ilustración.</div></blockquote></article>");
$paginaDos->mostrar();