<?php

include 'indexLibros.php';

class elCaballero extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Michael Williams</cite><p>Colección</p>&nbsp;
                <em>Héroes de la Dragonlance-segunda trilogía</em><p>Volumen:</p>&nbsp;3<blockquote><h3>Sinopsis:</h3>
                    <q>&laquo;Me acuerdo de la ceremonia. De haberme arrodillado ante Bayard, sir Robert y mi padre, que 
                    apoyaron sus grandes manos en el pomo de mi espada, y de las solemnes palabras que debo mantener en 
                    secreto... Luego, el Voto de la Espada, la Corona y la Rosa: el voto que me obligaba a defender, a 
                    comprometerme y, sobre todo, a entender. Luego, las manos de Bayard se posaron en mis hombros para 
                    hacerme volver hacia las personas reunidas en el salón... No había quien no me mirase.&raquo;<br/>
                    &nbsp;El haber sido armado caballero apenas había cambiado a Comadreja. Galen Pathwarden Brightblade 
                    sigue mostrándose reacio a correr aventuras, siempre dispuesto a salvar la propia piel a cualquier 
                    precio. Pero cuando su hermano Brithelm desaparece misteriosamente, Galen deja de lado sus reservas y 
                    emprende una búsqueda que lo conduce a las profundidades de la tierra, donde se ve envuelto en una 
                    infernal conspiración.</q></blockquote></article>";
}

$paginaElCaballero = new elCaballero();
$paginaElCaballero->setTitulo("El Caballero Galen");
$paginaElCaballero->setEnlace("cienciaFiccion.php");
$paginaElCaballero->mostrar();