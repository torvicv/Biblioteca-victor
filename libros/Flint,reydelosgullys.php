<?php

include 'indexLibros.php';

class flint extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Mary Kirchoff-Douglas Niles</cite><p>Colección:
        </p>&nbsp;<em>Preludios de la Dragonlance-segunda trilogía</em><p>Volumen:</p>&nbsp;2<blockquote><h3>Sinopsis:</h3>
            <q>Flint Fireforge, el paternal enano, miembro de los Héroes de la Lanza. Regresa al tranquilo y soñoliento 
            pueblo natal donde transcurrió su infancia. Situado en las estribaciones montañosas cercanas a Solace. Y le 
            sorprende encontrarlo inmerso en un febril ajetreo comercial. Cuando descubre por azar el ominoso origen de 
            esta prosperidad. Lo arrojan al foso de la bestia para acabar con él. Unos enanos gullys los rescatan de la 
            muerte. Junto con una joven enana muy atractiva. Investido monarca de Lodazal en contra de su voluntad. Flint 
            se esfuerza por convertir a un montón de harapientos aghar en un ejército con el que hacer frente a un 
            diabólico complot.<br/>&nbsp;<em>Flint, rey de los gullys</em> es una divertida y conmovedora historia sobre 
            el genial enano de la saga Dragonlance.</q></blockquote></article>";
}

$paginaFlint = new flint();
$paginaFlint->setTitulo("Flint, rey de los gullys");
$paginaFlint->setEnlace("cienciaFiccion.php");
$paginaFlint->mostrar();