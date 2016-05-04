<?php

include 'indexLibros.php';

class losCaballeros extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Margaret Weis-Tracy Hickman</cite><p>Colección:
        </p>&nbsp;<em>El Ocaso de los Dragones</em><p>Volumen:</p>&nbsp;1<blockquote><h3>Sinopsis:</h3><q>La Guerra de la 
            Lanza ya es historia. Las estaciones vienen y se van. Es verano: un verano abrasador como jamás se había visto 
            en Krynn. Afligido por una dolorosa pérdida, el joven mago Palin Majere trata de entrar al Abismo en busca de 
            su tio, el famoso archimago Raistlin. La Reina Oscura ha encontrado nuevos paladines en los Caballeros de 
            Takhisis, seguidores devotos y leales hasta el fín. Un paladin oscuro, Steel Brightblade, cabalga a lomos de un 
            dragón azul para atacar la Torre del Sumo Sacerdote, la fortaleza que su padre defendiera hasta la muerte.<br/>
            &nbsp;En una pequeña isla, los misteriosos irdas se apoderan de un antiguo objeto mágico, la Gema Gris, y lo 
            utilizan para garantizar su propia seguridad. Usha, una joven criada por los irdas, llega a Palanthas y dice ser 
            la hija de Raistlin.<br/>&nbsp;Será un verano mortal, quizás el último verano de Ansalon. Llamas ardientes 
            consumen la hierba seca y Caos, el padre de los dioses, regresa. El mundo entero puede desaparecer.<br/>&nbsp;
            Los dos volumenes de <em>El ocaso de los dragones</em> cierran el ciclo iniciado en las <em>Crónicas de la 
            Dragonlance</em>, pero significan también un nuevo comienzo.</q></blockquote></article>";
}

$paginaLosCaballeros = new losCaballeros();
$paginaLosCaballeros->setTitulo("Los Caballeros de Takhisis");
$paginaLosCaballeros->setEnlace("cienciaFiccion.php");
$paginaLosCaballeros->mostrar();