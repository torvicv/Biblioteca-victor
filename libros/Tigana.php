<?php

include 'indexLibros.php';

class tigana extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Guy Gavriel Kay</cite><p>Colección:</p>&nbsp;
        Libro suelto<blockquote><h3>Sinopsis:</h3><q>Tigana es una tierra asediada y atrapada en la telaraña de una 
            tiranía y su historia es la lucha por ser libre. Los hechos se inician en La Palma, una península dividida en 
            dos pequeños estados rivales.<br/>&nbsp;Al resistir a una invasión, la provincia de Tigana derrota al ejército 
            del rey hechicero Brandin y el hijo de éste muere en la batalla. Brandin, enfurecido, envía un ejército más 
            poderoso para aplastar a Tigana y luego arroja un hechizo para borrar el nombre de la provincia de la memoria 
            humana. Sólo aquellos que habían nacido antes de la caída podrían recordar su nombre.<br/>&nbsp;Años después 
            de la devastación de su tierra natal, un puñado de hombres y mujeres, que siguen a un líder cuya identidad es 
            el mayor secreto guardado por ellos, se dispone a derrocar a sus conquistadores y a devolver al mundo el brillo 
            perdido de un nombre borrado: Tigana.<br/>&nbsp;Teniendo como fondo un mundo sensual y brutal al mismo tiempo, 
            magnificamente descrito, el autor entreteje una epopeya de pasión, fuego y persecución de un sueño. Músicos, 
            comerciantes, granjeros, magos renegados, nobles caballeros y damas de castillos fortificados se reúnen para 
            representar su papel y dar vida a la trama de seducción, intriga y traición. En su búsqueda de venganza y de 
            reafirmación, los herederos de una tierra mancillada aprenden que también deben luchar contra el enigma más 
            profundo e impredecible de todos: el amor.</q></blockquote></article>";
}

$paginaTigana = new tigana();
$paginaTigana->setTitulo("Tigana");
$paginaTigana->setEnlace("cienciaFiccion.php");
$paginaTigana->mostrar();