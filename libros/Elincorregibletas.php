<?php

include 'indexLibros.php';

class elIncorregible extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Mary Kirchoff-Steve Winter</cite><p>Colección:</p>
        &nbsp;<em>Los compañeros de la Dragonlance</em><p>Volumen:</p>&nbsp;2<blockquote><h3>Sinopsis:</h3><q>El kender 
                Tasslehoff Burrfoot está en la edad del &laquo;ansia viajera&raquo;, como la llaman los de su raza. En su 
            deambular, llega a Solace durante la Feria de la Primavera y se fija en un precioso brazalete de cobre con 
            incrustaciones de piedras semipreciosas que exhibe un enano gruñón. Para evitar naturalmente que un desaprensivo 
            robe tan preciosa joya. Tas la pone a buen recaudo en su muñeca, con la intención de devolverla después al 
            artesano. Ëste no comprende sus buenos propósitos y al sorprenderlo, los acusa de ladrón en medio de un gran 
            alboroto. De esta manera se conocen Tas, Flint y Tanis, quien llega a tiempo para aclarar el &laquo;malentendido
            &raquo;.</q></blockquote></article>";
}

$paginaElIncorregible = new elIncorregible();
$paginaElIncorregible->setTitulo("El incorregible Tas");
$paginaElIncorregible->setEnlace("cienciaFiccion.php");
$paginaElIncorregible->mostrar();