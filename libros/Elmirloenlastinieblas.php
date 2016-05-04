<?php

include 'indexLibros.php';

class tinieblas extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Freda Warrington</cite><p>Colección:</p>&nbsp;
        <em>El imperio de Gorethria</em><p>Volumen:</p>&nbsp;2<blockquote><h3>Sinopsis:</h3><q>Ashurek, príncipe de 
            Gorethria, Estarinel, procedente de la feliz tierra de Forluin, y la enigmática Medrian prosiguen su camino 
            para intentar cumplir su gran Misión. Tras haber viajado al fabuloso plano azul, los tres personajes, destinados 
            a soportar una búsqueda tan peligrosa y traicionera como no se había visto otra, embarcan en la misteriosa nave 
            La Estrella de Filmoriel. Portadores de la mágica Vara de Plata, llegan a la sorprendente Ciudad de Cristal, 
            donde los aguarda un antiguo terror. Luego, a través de tierras heladas y desierta, siguen avanzando incansables. 
            Desde el Plano Azul al Plano Negro, pasando por las duras tierras salvajes de la tundra, se encontrarán con 
            multitud de personajes misteriosos y diversos como la Señora de H'tebhmella, una criatura etérea, hermosa y 
            rodeada de luz azul, y Arlenmia, un ser escultural con luminosos ojos de un penetrante color turquesa. Ashurek, 
            Estarinel y Medrian saben que hallen lo que hallen nunca deben abandonar la esperanza hasta que su Misión de 
            librar al mundo del dominio de M'gulfn se haya cumplido. El encuentro con el monstruo es terrorífico y las 
            consecuencias sobre Medrian, irreparables. Con <em>El mirlo de las tinieblas</em> continúa la epopeya que 
            constituye <b>El imperio de Gorethria</b>.</q></blockquote></article>";
}

$paginaTinieblas = new tinieblas();
$paginaTinieblas->setTitulo("El mirlo en las tinieblas");
$paginaTinieblas->setEnlace("cienciaFiccion.php");
$paginaTinieblas->mostrar();