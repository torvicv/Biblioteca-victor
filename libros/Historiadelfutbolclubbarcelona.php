<?php

include 'indexLibros.php';

class historia extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Rossend Calvet Mata</cite><p>Editorial:
        </p>&nbsp;Hispano Europea<blockquote><h3>Sinopsis:</h3><q>El nombre del autor, Rossend Calvet Mata, es 
            suficiente para comprender la extensión y la profundidad de esta obra. Porque nadie mejor que él ha 
            vivido los avatares del Barça, club poderoso, triunfador, destacado entre los del mundo por sus fichajes, 
            por sus victorias y por su fuerza, y dentro de nuestras fronteras, además, por el valor simbólico de sus 
            colores.<br/>&nbsp;Los primeros pasos de un club naciente, creado en torno a un deporte que iba a 
            convertirse en el más popular en todo el mundo, y su posterior desarrollo, tienen el interés que siempre 
            ofrece la lucha por el triunfo, con un entretejido de aciertos y errores, de presiones, de pequeñas 
            intrigas, de disputas y de defensa de intereses contrapuestos. Importa, sin duda, a los aficionados, el 
            dato deportivo, es decir, la cita de todos los acontecimientos (participación en campeonatos y torneos 
            nacionales e internacionales, partidos, grandes jugadas, fichajes y figuras, etc.) que en su fecunda 
            historia pueda haber cosechado un club como el Barcelona a través de las secciones que impulsa y han 
            ganado tantos laureles que acompañan a los muchos conquistados con su primerisimo deporte: el fútbol. 
            Pero no tiene menos interés el conocimiento entre bastidores de esta gran empresa que es el Barça, 
            que nos relata el autor extrayendo de su memoria curiosos recuerdos y anécdotas recogidos en momentos 
            de tensión triunfadora o en otros en que el Club ha tenido que sufrir las muchas crisis que aquejan 
            a todas las concentraciones en las que juegan criterios y temperamentos dispares. Esto es lo que 
            hallará el lector en las páginas de esta obra singular, amena y completísima, que Rossend Calvet 
            Mata ha escrito para que se perpetúe el recuerdo de aquellos que sucesivamente, sea como jugadores o 
            atletas, como directivos o como colaboradores en la gran empresa del Barça, han contribuido a sus 
            triunfos, a su consolidación y a su prestigio internacional.</q></blockquote></article>";
}

$paginaHistoria = new historia();
$paginaHistoria->setTitulo("Historia del futbol club barcelona");
$paginaHistoria->setEnlace("deportes.php");
$paginaHistoria->mostrar();