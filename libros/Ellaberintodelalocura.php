<?php

include ("indexLibros.php");

class elLaberinto extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Simon R. Green</cite><p>Colección:</p>&nbsp;
        <em>Deathstalker</em><p>Volumen:</p>&nbsp;2<blockquote><h3>Sinopsis:</h3><q>Owen Deathstalker, antes aspirante a 
                sabio y ahora guerrero por necesidad, ya no está solo.<br/>Lo acompaña un variopinto conjunto de personajes: 
            desde la cazarrecompensas Ruby Journey hasta Hazel d'Ark, pirata y pelirroja espadachina, pasando por el héroe 
            de leyenda y rebelde profesional, Jack Random, o el inquietante hombre cibernético Tobias Moon. Junto recorren 
            la galaxia con la muerte en los talones, perseguidos por naves imperiales y toda una cohorte de implacables 
            enemigos en una lucha sin cuartel por alcanzar su objetivo.<br/>&nbsp;Y si dicho objetivo tuviese un nombre, 
            sería rebelión, porque, cansados del injusto gobierno de la Emperatriz Lionstone XIV, apodada la Zorra de Hierro, 
            nuestros héroes procurarán por todos los medios reunir las fuerzas necesarias para plantarle cara. Todo eso sin 
            olvidar el trasfondo de intrigas palaciegas de la capital del Imperio, donde la rivalidad entre Clanes alcanza 
            su cenit.</q></blockquote></article>";
}

$paginaElLaberinto = new elLaberinto();
$paginaElLaberinto->setTitulo("El laberinto de la locura");
$paginaElLaberinto->setEnlace("cienciaFiccion.php");
$paginaElLaberinto->mostrar();