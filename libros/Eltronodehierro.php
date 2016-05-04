<?php

include ("indexLibros.php");

class elTrono extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Simon R. Green</cite><p>Colección:</p>&nbsp;
        <em>Deathstalker</em><p>Volumen:</p>&nbsp;1<blockquote><h3>Sinopsis:</h3><q>Su Majestad Imperial, la Emperatriz 
            Lionstone XIV, rige el imperio galáctico con mano de hierro. Desde los campesinos hasta los señores de los Clanes
            , todos están supeditados a los impredecibles decretos de Su caprichosa Majestad.<br/>La vida de Owen Deathstalker
            , lider de su Clan muy a su pesar, cambia radicalmente cuando la Emperatriz pone precio a su cabeza. Desde el 
            mundo fronterizo al que se había retirado para evitar las intrigas cortesanas, huye a Mistport, un planeta donde 
            se refugian toda suerte de criminales y fuera de la ley. Allí reúne a un grupo de personas que hará tambalear al
            mismísimo Trono de Hierro: un proscrito hombre de Haden, una pirata, una cazarrecompensas y un legendario rebelde. 
            Con ellos , Deathstalker inicia una azarosa singladura que lo llevará, a través de incontables peligros, a descubrir 
            el papel que le reserva el destino.</q></blockquote></article>";
}

$paginaElTrono = new elTrono();
$paginaElTrono->setTitulo("El Trono de Hierro");
$paginaElTrono->setEnlace("cienciaFiccion.php");
$paginaElTrono->mostrar();