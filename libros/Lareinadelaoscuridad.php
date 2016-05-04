<?php

include ("indexLibros.php");

class laReina extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Margaret Weis y Tracy Hickman</cite><p>Colección:
        </p>&nbsp;Crónicas de la dragonlance<p>Volumen:</p>&nbsp;3<blockquote><h3>Sinopsis:</h3><q>&nbsp;Paladine, gran dios
            del Bien, otorgó a Theros Ironfeld, el Ser del Brazo de Plata, la capacidad de forjar nuevas lanzas dragonlance
            para que los compañeros, igual que el legendario Huma, Portador de Luz, Primer Lancero, puedan enfrentarse a los
            ejércitos de los Dragones.<br/>&nbsp;Por otra parte, el sorprendente descubrimiento de los Orbes de los Dragones 
            proporciona a los amigos un mágico recurso con el mismo fin. A pesar de todo no pueden evitar el verse envueltos
            en numerosos peligros.<br/>&nbsp;Sin embargo, no cejan en su lucha contra el Mal aunque para ello hayan de 
            enfrentarse a la cruel Takhisis, Reina de la oscuridad, la cual tiene a su lado a un poderosísimo mago, cuyos 
            ojos tienen forma de relojes de arena... pero al que todavía le quedan ramalazos de generosidad.<br/>&nbsp;
            Lauralanthalasa, la valiente Princesa elfa hija del Orador de los Soles, adquiere en este volumen un gran 
            protagonismo. Es raptada por los esbirros de Kitiara, Señora del Dragón, la cual, a cambio de su liberación, pide 
            la capitulación de las fuerzas del Bien y de los compañeros, que se hallan en Neraka, cuartel general de las 
            tropas malignas.<br/>&nbsp;Tiempo atrás en el siniestro y, a la vez, bello templo de esta ciudad se desarrollaron 
            unos acontecimientos clave, que tuvieron como personajes fundamentales a Takhisis, la Reina Oscura, a Berem, el
            hombre de Joya Verde, y a la hermana de éste, Jasla, y es ahora cuando esos sucesos van a encontrar un desenlace 
            definitivo provocando el Caos total, para bien o para mal...<br/>&nbsp;Este III volumen cierra la primera trilogía 
            de las &laquo;Crónicas de la Dragonlance&raquo;. Su interés no decae en ningún momento y sus aventuras se suceden 
            aumentando, si cabe, la intriga de los dos primeros volumenes: &laquo;El retorno de los Dragones&raquo; y &laquo;
            La tumba de Huma&raquo;.</q></blockquote></article>";
}

$paginaLaReina = new laReina();
$paginaLaReina->setTitulo("La reina de la oscuridad");
$paginaLaReina->setEnlace("cienciaFiccion.php");
$paginaLaReina->mostrar();