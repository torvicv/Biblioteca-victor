<?php

include 'indexLibros.php';

$paginaElVendedor = new libros();
$paginaElVendedor->setDescription("Libro de autoayuda y superación");
$paginaElVendedor->setPalabrasClave("Libro, vendedor, vender, autoayuda, superación");
$paginaElVendedor->setEnlace("varios.php");
$paginaElVendedor->setTitulo("El vendedor más grande del mundo");
$paginaElVendedor->setContenidos2("<article id=\"libros\"><p>Autor:</p>&nbsp;<cite>Og Mandino</cite><p>Editorial:</p>
    &nbsp;Grijalbo<blockquote><h3>Sinopsis:</h3><q>¿A que se debe que este libro se haya convertido en una de 
        las obras de mayor venta en el mundo, y que compañias gigantescas de todo el orbe lo hayan adquirido 
        por millares? El secreto radica en que OG MANDINO ha logrado con este libro un triunfo extraordinario: 
        presentar la vida humana en sus términos más claros y sencillos (verdad, sinceridad, fe). El público de 
        todos los niveles y de todas las actividades espirituales, intelectuales, sociales y del mundo de los 
        negocios ha sabido captar el mensaje, y con verdadero celo filantrópico se ha dedicado a difundirlo. 
        Estos millones de lectores no han tenido dificultad en percibir las grandes cualidades de la obra y la 
        espiritualidad que brota de la filosofía básica que impregna todas sus páginas: <q>La vida es un don 
            maravilloso , y es preciso vivirla con la mayor plenitud.</q><br/><br/>&nbsp;En esta obra, MANDINO 
        demuestra que la satisfacción y el bienestar provienen del hecho de que el hombre descubra su verdadera 
        personalidad y sus emociones, y sepa aplicarlas en su vida diaria. Cuando esto se consigue -asegura 
        el autor-, todos los demás beneficios de orden material se logran fácilmente.</q><br/><br/><span 
            class=\"flotante\">&#8226</span><div class=\"margin\"><div id=\"tamañoletras\">He aquí un 
                    verdadero <b>clásico de las ventas</b> que puede cambiar el rumbo de su vida.</div></div>
        <span class=\"flotante\">&#8226</span><div class=\"margin\"><div id=\"tamañoletras\">Un libro 
                constructivo y extraordinariamente eficaz que abre nuevos e insospechados horizontes al <b>
                    arte de vender</b></div></div></blockquote></article>");
$paginaElVendedor->mostrar();