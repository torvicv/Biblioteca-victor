<?php

include ("indexLibros.php");

class politica extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Aristóteles</cite><br/><br/><br/><br/>
        <blockquote><h3>Sinopsis:</h3><q>Compuesta entre el 330 y el 323 a.C., la <b>Política</b> se puede considerar en
        lo esencial como una de las últimas obras de <em>ARISTÓTELES</em> (384-322 a.C.). En ella, el que fuera preceptor
        de Alejandro Magno y discípulo de <em>Platón</em> se erige en defensor de la &laquo;polis&raquo; tomando en 
        consideración sus posibilidades históticas y sus grandes realizaciones civilizadoras. Frente al desarraigo y 
        exacerbado individualismo dominantes en la Grecia de la época, y contra los que creen en el buen salvaje, 
        <em>Aristóteles</em> hace hincapie en el carácter social del hombre -definido como &laquo;animal cívico&raquo;- y
        en el fundamento natural de la ciudad -anterior por naturaleza a la familia y aun a cada individuo-, valorándolos
        como un logro insuperable de la civilización griega frente a las rudas formaciones políticas de las tribus 
        bárbaras.</q></blockquote></article>";
}

$paginaPolitica = new politica();
$paginaPolitica->setTitulo("Política");
$paginaPolitica->setEnlace("filosofia.php");
$paginaPolitica->mostrar();