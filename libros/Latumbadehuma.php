<?php

include ("indexLibros.php");

class laTumba extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Margaret Weis y Tracy Hickman</cite><p>
            Colección:</p>&nbsp;Crónicas de la dragonlance<p>Volumen:</p>&nbsp;2<blockquote><h3>Sinopsis:</h3><q>Solace,
            &laquo;El Último Hogar&raquo;, el Bosque Oscuro, Xak Tsaroth, Mishakal, el Orador de los Soles, Pax Tharkas, 
            Pyros, Verminaard, Matafleur... ¡cuántos nombres y situaciones acuden a la memoria cuando recordamos las 
            aventuras de los compañeros en su lucha contra los ejércitos de los Dragones! Pero su misión no concluyó, 
            ni mucho menos con la victoría en Pax Tharkas sino que sus vidas se ven envueltas en nuevas y apasionantes
            acciones, y sus corazones agitados por profundos sentimientos.<br/>&nbsp;Siguen comprometidos en su tarea de 
            encontrar la manera de desterrar la oscuridad de Krynn. Sin embargo, sus destinos experimentan graves 
            alteraciones. Después de la destrucción de Tarsis, la Bella, se ven separados en dos grupos. Sin perder la 
            amistad entre ellos, cada uno de estos vivirá momentos plenos de emoción y peligro. Es evidente, por ejemplo, 
            la conmoción que sienten sus espíritus, cuando uno de los grupos descubre la tumba -¿auténtica, falsa?- del
            legendario Huma...<br/>&nbsp;Dos nuevos elementos van a jugar un papel fundamental en su lucha contra el 
            Mal: por una parte, el hallazgo de la punta de una lanza, ¿tal vez la Dragonlance?, encontrada en la mano
            de un Caballero Solámnico, muerto y aprisionado en un muro de hielo, cabalgando a lomos de un majestuoso 
            Dragón Plateado... y, por otra parte, el descubrimiento de los Orbes de los Dragones. ¿Qué misterio
            encerraban aquellas enigmáticas esferas de cristal creadas por los &laquo;Túnicas&raquo; en las Torres de
            la Alta Hechicería?<br/>Las autoras de esta trilogía, como ya lo demostraron en el 1 volumen de las &laquo;
            Crónicas de la Dragonlance&raquo;, continuan dando pruebas de su fecunda imaginación, habiendo creado el 2
            volumen de la serie en el cual no decae, en ningún momento, ni la acción, ni el interes ni la abundancia de
            nuevas y sorprendentes aventuras.</q></blockquote></article> ";
}

$paginaLaTumba = new laTumba();
$paginaLaTumba->setTitulo("La tumba de Huma");
$paginaLaTumba->setEnlace("cienciaFiccion.php");
$paginaLaTumba->mostrar();