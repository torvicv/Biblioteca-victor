<?php

include ("indexLibros.php");

class apendices extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Margaret Weis y Tracy Hickman</cite><p>
            Colección:</p>&nbsp;<em>Dragonlance</em><p>Volumen:</p>&nbsp;Libro suelto<blockquote><h3>Sinopsis:</h3><q>Todos 
            los lectores de las <em>Crónicas</em> y las <em>Leyendas de la Dragonlance</em> guardan en la memoria el 
            recuerdo de El Último Hogar, la posada donde tuvieron lugar las primeras aventuras de los protagonistas de las 
            <em>Cronicas de la Dragonlance</em>.<br/>&nbsp;Pues bien, ahora, al cabo de muchos años y avatares, Caramon y 
            Tika Majere celebran la reapertura de su local después de restaurarlo. La fiesta, alegre y nostálgica a la 
            vez, esta marcada por el reencuentro de antiguos compañeros de hazañas, hoy Héroes de la Lanza, e inspira a 
            Caramon el deseo de publicar la abundante información que posee sobre el fabuloso mundo de Krynn, redactada en 
            gran parte por personajes de todos conocidos. Así, por ejemplo, Astinus, el gran cronista de Palanthas, nos 
            cuenta la historia antigua de Krynn, y Bertrem el Esteta describe en un ensayo, lleno de detalles pintorescos, 
            la organización social de razas tan entrañables como las de los gnomos, enanos gully y kenders, completándolo 
            con un curioso estudio de runología aplicada.<br/>&nbsp;Por su parte, Gunthar, el muy noble Caballero de 
            Solamnia, nos ofrece un diario de guerra con una minuciosa enumeración de los Dragones del Bien y del Mal, así 
            como un extracto del Código y la Medida, fundamental compilación de normas y leyes de la Orden solámnica.<br/>
            &nbsp;Cabe destacar también el curioso herbario del discípulo del archifamoso Raistlin, Dalamar, quien nos 
            ofrece una serie de recetas de su <em>shalafi</em>, que adivinamos diabólicas, y la explicación de las 
            propiedades mágicas de algunas plantas.<br/>&nbsp;Un autor nuevo, también historiador de la Biblioteca de 
            Palanthas, complementa el sobre las razas de Krynn según sus propias experiencias. Además de ser un apasionante 
            relato de aventuras, gracias a el nos enteramos de un sin fín de aspectos acerca de los draconianos, minotauros 
            y elfos, aprendemos como se destila el fortisimo aguardiente enanil y nos adentramos en el corazón de un 
            Dragón Plateado transformado en mujer.</q></blockquote></article>";
}

$paginaApendices = new apendices();
$paginaApendices->setTitulo("Apéndices");
$paginaApendices->setEnlace("cienciaFiccion.php");
$paginaApendices->mostrar();