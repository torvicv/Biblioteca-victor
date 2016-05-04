<?php

include 'indexLibros.php';

$paginaEnciclopedia = new libros();
$paginaEnciclopedia->setDescription("Enciclopedia de jardineria");
$paginaEnciclopedia->setPalabrasClave("jardin, jardineria, construcciones, plantas, labores, maquinas,"
        . " herramientas, accesorios, enfermedades, malas hierbas, frutas, hortalizas, cesped, arboles,"
        . "arbustos, rosales, plantas vivaces, plantas anuales, bulbosas, tuberosas, brezo,estanques");
$paginaEnciclopedia->setTitulo("Enciclopedia de la jardinería");
$paginaEnciclopedia->setContenidos2("<article id=\"libros\"><p>Autor:</p>&nbsp;<cite>&#268estmír Böhm</cite>
    <div class=\"punto\"><h4>Índice</h4>El hombre y el jardín<br/>&#8226<br/>Construcciones y complementos 
    arquitectónicos<br/>&#8226<br/>Descubriendo las plantas<br/>&#8226<br/>Las labores básicas<br/>&#8226<br/>
    Máquinas, herramientas y accesorios diversos<br/>&#8226<br/>Enfermedades y enemigos de las plantas
    <br/>&#8226<br/>Las malas hierbas<br/>&#8226<br/>Las frutas<br/>&#8226<br/>Las hortalizas<br/>&#8226<br/>
    El césped<br/>&#8226<br/>Árboles y arbustos ornamentales<br/>&#8226<br/>Los rosales<br/>&#8226<br/>
    Las plantas vivaces<br/>&#8226<br/>Las plantas anuales<br/>&#8226<br/>Las plantas bulbosas y tuberosas
    <br/>&#8226<br/>Las plantas de rocalla<br/>&#8226<br/>Los jardines de brezo<br/>&#8226<br/>Rincones 
    soleados y rincones umbríos<br/>&#8226<br/>Los estanques<br/>&#8226<br/>Plantas, incluso sin jardín</div>
</article>");
$paginaEnciclopedia->setEnlace("jardineria.php");
$paginaEnciclopedia->mostrar();