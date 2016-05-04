<?php

include 'indexLibros.php';

$paginaElClan = new libros();
$paginaElClan->setDescription("Libro sobre la vida nuestros antepasados");
$paginaElClan->setPalabrasClave("Clan, antepasados, oso, cavernario, neandertales, tierra");
$paginaElClan->setEnlace("novelas.php");
$paginaElClan->setTitulo("El clan del oso cavernario");
$paginaElClan->setContenidos2("<article id=\"libros\"><p>Autor:</p>&nbsp;<cite>Jean M. Auel</cite><p>Serie:</p>
            <span id=\"uppercase\">Los hijos de la tierra</span><blockquote><h3>Sinopsis:</h3><div id=\"tamañoletras\">
        Primera novela de la serie <span id=\"uppercase\">los hijos de la tierra</span> de Jean M. Auel sobre la 
            vida de nuestros antepasados en la última fase de la Era Glacial, cuando los Neanderthales y los 
            Cro-Magnones compartían la Tierra.</div><q>La heroína es Ayla, una valiente e indomable joven mujer 
            cuya historia empieza cuando, huérfana de cinco años, es adoptada por el Clan, un grupo de 
            Neanderthales.<br>&nbsp;Al principio, Ayla inspira sorpresa, luego cautela y, por fin, aceptación 
            por parte del Clan. Iza, la curandera, y Creb, el Hombre Santo, cuidan de ella. El comportamiento y 
            las actitudes de los miembros del Clan no le es ajeno. Se interesa por las cacerías y los preparativos 
            de las armas, algo que está prohibido a las mujeres y que ella, no obstante, domina con notable 
            maestría.</q><br/><br/>&nbsp;<em>El Clan del Oso Cavernario</em> <b>es el primer libro de la serie de 
            enorme éxito</b> <span id=\"uppercase\">los hijos de la tierra</span>&reg;, <b>que continúa en</b>
            <em>El Valle de los Caballos, Los Cazadores de Mamuts, Las Llanuras del Tránsito</em> <b>y en el 
            esperado y fabuloso quinto título</b>, <em>Los Refugios de Piedra</em>, <b>donde volveremos 
            a vibrar de emoción con Ayla y Jondalar.</b><br/><br/><b><q>Un gran best-seller
            ..., una obra de imaginación excepcional</q></b><div class=\"position\">
            Daily Express</div><br/><br/><b><q>Sabía mixtura de investigación, imaginación y olfato
            </q></b><div class=\"position\">ABC</div><br/><br/><b><q>Un fenómeno literario provocado
            por una mujer jovial... Un derroche de alegría, imaginación y conocimientos.</q></b>
            <div class=\"position\">La Vanguardia</div></blockquote></article>");
$paginaElClan->mostrar();