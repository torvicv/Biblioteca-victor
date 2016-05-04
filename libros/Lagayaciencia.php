<?php
        include ("indexLibros.php");
        class lagayaciencia extends libros{
            
        var $contenido2 = "<article id='libros'><p>Escritor:</p>&nbsp;<cite><abbr title='Friedrich'>F.</abbr>&nbsp;Nietzsche</cite><br/><br/></br>
            <blockquote><h3>Sinopsis:</h3><q>El <abbr title='Friedrich Nietzsche'>Nietzsche</abbr> librepensador
            se compendia en <b>La gaya ciencia</b>. A partir de la idea liberadora de que la vida ha dejado de ser
            una obligación, Nietzshce se interna con frescura y ligeraza en los terrenos pantanosos de la ciencia,
            la moral y la religión para sacar a la luz su significado desde la claridad de un conocimiento que ha 
            arrinconado la seriedad.<br/>&nbsp;
            A través de este pensamiento juguetón, se van desgranando algunos temas que el filósofo tratará en sus
            obras posteriores:<b>la muerte de dios</b>, <b>el amor fatí</b>, <b>el eterno retorno de lo mismo</b>,
            así como el personaje de ficción que se asocia de una manera espontánea a su filosofía:<b><cite>
            Zaratustra.</cite></b></q></blockquote></article>";
        
        }
$paginaLaGayaCiencia = new lagayaciencia();
$paginaLaGayaCiencia->setTitulo("La gaya ciencia");
$paginaLaGayaCiencia->setEnlace("filosofia.php");
$paginaLaGayaCiencia->mostrar();