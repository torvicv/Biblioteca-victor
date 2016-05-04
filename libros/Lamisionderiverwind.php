<?php

include 'indexLibros.php';

class laMision extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Paul B. Thompson-Tonya R. Carter</cite>
        <p>Colección:</p>&nbsp;<em>Preludios de la Dragonlance-segunda trilogía</em><p>Volumen:</p>&nbsp;1<blockquote>
            <h3>Sinopsis:</h3><q>A fín de hacerse merecedor de su amada Goldmoon, Riverwind se ve forzado a emprender un 
            viaje para realizar una misión casi imposible. Encomendada por los ancianos de la tribu Que-Shu: encontrar 
            alguna evidencia con la que pueda demostrar la existencia de los dioses verdaderos.<br/>&nbsp;Junto con un 
            excéntrico adivino. Apodado cazamoscas. Riverwind se precipita por un pozo mágico y llega a un mundo en el 
            que reina la hechicería allí. Sus habitantes están esclavizados. Y se percibe que se está fraguando una 
            rebelión.<br/>&nbsp;Riverwind, cazamoscas y una perspicaz muchacha elfa llegan a Xak Tsaroth y descubren la 
            vara de cristal azul de Mishakal. Asi como la presencia del terrorífico Dragón Negro, Khisanth. Una vez más. 
            Un entrañable personaje de la Dragonlance se convierte en el protagonista central de este nuevo volumen de la 
            colección <em>Preludios de la Dragonlance</em>.</q></blockquote></article>";
}

$paginaLaMision = new laMision();
$paginaLaMision->setTitulo("La misión de Riverwind");
$paginaLaMision->setEnlace("cienciaFiccion.php");
$paginaLaMision->mostrar();