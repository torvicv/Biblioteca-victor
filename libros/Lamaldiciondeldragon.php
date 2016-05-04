<?php

include 'indexLibros.php';

class laMaldicion extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Dennis L. McKiernan</cite><p>Colección:</p>&nbsp;
        Libro suelto<blockquote><h3>Sinopsis:</h3><q>Mil años antes de la Guerra del Invierno, el orgulloso Elgo, un 
            valeroso príncipe de los vanadurin, rudos jinetes y guerreros, derrota con sus tropas al dragón Sleeth, 
            considerado invencible. Los vencedores se reparten fabulosas riquezas ocultas en la guarida del reptil, en 
            medio del regocijo general. Pero ignoran que el botín contiene algo más que oro y piedras preciosas: también 
            se esconden en él la muerte para nobles y campesinos, la guerra entre hombres y enanos, rencillas y 
            destrucciones sin fín. Y sobre tanto desastre planean las alas del mayor dragón de todos, Kalgalath el Negro, 
            aliado con el mago del mal, Andrak, dispuestos ambos a vengar la muerte de Sleeth y recuperar su tesoro maldito.
            <br/>&nbsp;Frente a esta alianza impía, dos enconados rivales se ponen de acuerdo para encontrar el legendario 
            martillo de plata capaz de vencer incluso a los dos terribles enemigos. Sin embargo, ni Elyn de Jord ni Thork 
            de Kachar pueden saber de antemano qué peligros tendrán que afrontar.<br/>&nbsp;Mas, aunque supieran que su 
            misión iba a acabar inexorablemente en el abrazo de la muerte, de todas formas la emprenderían, porque su 
            destino es enfrentarse a la maldición del dragón.</q></blockquote></article>";
}

$paginaLaMaldicion = new laMaldicion();
$paginaLaMaldicion->setTitulo("La maldición del dragón");
$paginaLaMaldicion->setEnlace("cienciaFiccion.php");
$paginaLaMaldicion->mostrar();