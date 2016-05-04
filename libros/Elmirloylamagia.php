<?php

include 'indexLibros.php';

class laMagia extends libros{
    
    var $contenido2 = "<article id=\"libros\"><p>Escritor:</p>&nbsp;<cite>Freda Warrington</cite><p>Colección:</p>&nbsp;
        <em>El imperio de Gorethria</em><p>Volumen:</p>&nbsp;3<blockquote><h3>Sinopsis:</h3><q>La gran Serpiente M'gulfn, 
            canalizadora del Mal, murió veinticinco años atrás, pero su muerte liberó sobre el mundo una energía inmensa, 
            un poder que hizo posible la existencia de la magia. Ahora es, pues, el momento en que esa magia puede ser 
            controlada para servir al Bien o al Mal.<br/>&nbsp;Mellorn, hija de Silvren y Ashurek, está dispuesta a que 
            se utilice para el Bien, y para ello viaja a la Tierra bajo una identidad falsa.<br/>&nbsp;Sin embargo, este 
            propósito no va a ser tan fácil de cumplir, pues en Gorethria gobierna el malvado Xaedrek, usurpador del 
            trono, quien práctica una magia pérfida y retorcida con la intención de devolver al país su anterior gloria. 
            Además, ha conjurado al demonio Ah'garigh, único sirvientede M'gulfn que ha sobrevivido después de la 
            destrucción de todos los restantes. Ah'garigh se encarna en el cuerpo de una anciana, y pretende vengar a sus 
            compañeros muertos y sumir al mundo en el caos y la desolación.<br/>&nbsp;Por otra parte, Mellorn, hechicera 
            de nacimiento y conocida por el nombre de Melkavesh en Gorethria, es consciente de la maldad intrínseca de 
            las artes mágicas de Xaedrek, pero está profundamente enamorada de él. Cuando éste se niega a renunciar a su 
            &laquo;maldad&raquo;, ella escapa al vecino reino de Kristillia. Su tarea acaba de comenzar, pero tiene 
            confianza en sí misma a pesar de que el cumplimiento de sus planes puede desembocar en una terrible y 
            sangrienta guerra.<br/>&nbsp;<em>El mirlo y la magia</em> da un paso más en esta impresionante saga de 
            <b>El Imperio de Gorethria</b>, y sume al lector en un torbellino de aventuras y pasiones.</q></blockquote></article>";
}

$paginaLaMagia = new laMagia();
$paginaLaMagia->setTitulo("El mirlo y la magia");
$paginaLaMagia->setEnlace("cienciaFiccion.php");
$paginaLaMagia->mostrar();