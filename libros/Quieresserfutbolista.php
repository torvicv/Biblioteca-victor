<?php

include 'indexLibros.php';

class quieres extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Antonio Berrio Soria</cite>
        <p>Editorial:</p>&nbsp;Hispano Europea<blockquote><h3>Sinopsis:</h3><q>Antonio Berrio Soria, destacado 
            preparador, dedica esta obra a los millares de aficionados al fútbol que quisieran alcanzar la 
            plenitud de conocimientos prácticos, tanto técnicos como tácticos, para jugar bien en sus respectivos 
            puestos y para destacar en este deporte.<br/>&nbsp;Comienza el autor estudiando el balón y su toque. 
            En esta parte del libro ofrece detalladas instrucciones para que el jugador sea dueño del esférico y 
            lo maneje a voluntad en todas las posiciones y situaciones. La retención y la conducción del mismo es 
            esencial para llegar a ser un buen futbolista. De ahí que Antonio Berrio Soria se ocupe con 
            minuciosidad  de este factor de base y avance en su análisis desde la parada del balón, sea con el 
            pecho, las piernas o los pies, hasta los tiros a puerta, pasando por las fintas propias del regateo y 
            por los pases a sus compañeros de equipo.<br/>&nbsp;Ataque y defensa se conjugan perfectamente en 
            esta obra, dirigida a los jugadores de todas las líneas. De ahí que junto al juego de delanteros, 
            líneas medias y defensa, dedique el autor la atención que merece la labor del portero y divida para 
            ello la meta en zonas, sea para lograr la perforación de la misma o para impedir ésta por la acción 
            del que la defiende, amparándose en el blocaje del balón o en el despeje cuando las circunstancias 
            impiden que se apodere del mismo.<br/>&nbsp;La preparación de los jugadores hasta alcanzar una 
            forma óptima, las técnicas posicionales en un partido y la permuta de puestos, completan esta obra, 
            en la que se suman muchos detalles que pasan normalmente inadvertidos para el profano, pero que 
            pueden llevar a un jugador a escalar puestos destacados en un fútbol en el que comenzará como 
            aficionado y que sus condiciones y las técnicas que asimile puede ofrecerle todas las perspectivas 
            que este deporte reserva a los mejores profesionales.<br/>&nbsp;La obra, profusamente ilustrada -
            <b>72 figuras y 37 diagramas</b>-, se divide en los siguientes capítulos:<b>1.Breve historia del 
            fútbol. 2.El balón. 3.La esfera-balón. 4.El campo de juego. 5.Ejercicios. 6.El guardameta. 7.El 
            equipo de fútbol.</b></q></blockquote></article>";
}

$paginaQuieres = new quieres();
$paginaQuieres->setTitulo("¿Quieres ser futbolista?");
$paginaQuieres->setEnlace("deportes.php");
$paginaQuieres->mostrar();