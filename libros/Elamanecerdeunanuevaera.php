<?php

include 'indexLibros.php';

class elAmanecer extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Jean Rabe</cite><p>Colección:</p>&nbsp;
        <em>Quinta era</em><p>Volumen:</p>&nbsp;1<blockquote><h3>Sinopsis:</h3><q>Los dioses se han desvanecido y la magia 
            se ha debilitado hasta casi desaparecer de Krynn. Es la Era de los Mortales, pero también es la Era de los 
            Dragones, más grandes y poderosos que nunca. Arrasan pueblos, esclavizan a sus gentes y se proclaman señores 
            supremos de Ansalon. Goldmoon, miembro del grupo original de los Compañeros, no se da por vencida y busca 
            nuevos héroes que desafien a los dragones. Un hombre atormentado responde a su llamada, y a él se unen una 
            hermosa kalanesti, un enano apellidado Fireforge, un arrojado marinero de piel negra y su compañera (un 
            semiogro), un lobo rojo y, cómo no, un par de kenders. Todos ellos deben reunirse en Refugio Solitario con 
            un mago llamado Palin Majere.</q></blockquote></article>";
}

$paginaElAmanecer = new elAmanecer();
$paginaElAmanecer->setTitulo("El amanecer de una nueva era");
$paginaElAmanecer->setEnlace("cienciaFiccion.php");
$paginaElAmanecer->mostrar();