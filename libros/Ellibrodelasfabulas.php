<?php

include 'indexLibros.php';

$paginaFabulas = new libros();
$paginaFabulas->setDescription("Libro de fabulas");
$paginaFabulas->setPalabrasClave("Libro, fabulas");
$paginaFabulas->setEnlace("varios.php");
$paginaFabulas->setTitulo("El libro de las Fábulas");
$paginaFabulas->setContenidos2("<article id=\"libros\"><p>Autor:</p>&nbsp;<cite>Carmen Bravo-Villasante</cite>
    <p>Colección:</p>&nbsp;<em>La pompa de Jabón</em><p>Editorial:</p>&nbsp;Miñon<blockquote><h3>Presentación:</h3>
        <p class=\"indentation\">Desde hace muchos siglos las fábulas son famosas, y los fabulistas de todas las 
        épocas y de todos los países se encargan de divertirnos y de aleccionarnos con sus intencionados versos.</p>
        <p class=\"indentation\">La utilidad y la diversión de las fábulas son evidentes. Por lo general, la fábula 
        es un breve apólogo en verso de gran sencillez, de intención satírica y didáctica. Su laconismo, su 
        elegancia y concisión, donde se encierran consejos de sabiduría y experiencia, la hacen semejante a la 
        máxima y al apotegma, y a veces al epigrama y a la caricatura.</p><p class=\"indentation\">Las fábulas son 
            claras y exactas. La excelencia formal caracteriza al género fabulistico.</p><p class=\"indentation\">
        Muy original es el lenguaje prosaico y coloquial de la fábulas, que da un tono jocoso y divertido. 
        Cuando la poesía lírica no acepta determinadas palabras, por considerarlas vulgares, la fábula si, y por 
        eso mismo hace reír y resulta tan moderna. Es precisamente esa vulgaridad de la fábula lo que la hace 
        tan actual.</p><p class=\"indentation\">Los diálogos fabulísticos no se andan por las ramas; son tan 
        escuetos, que allí se dicen las verdades, y al necio se le llama necio, y al sabio, sabio. Por su 
        forma inolvidable, de ritmo vivo y pegadizo, de gracia saltarina, las fábulas gustan a niños y mayores. 
        Las fábulas suelen ser dialogadas. Los animales, la Naturaleza, los objetos y los hombres sostienen un 
        diálogo ágil y animado, lleno de gracejo, que tiene mucho de teatral.</p><p class=\"indentation\">Las 
        fábulas son como pequeñas dramatizaciones, y al final esa escueta frase que es la moraleja -o la moral 
        en acción- es enérgica y aguda, como un lema para el lector.</p></blockquote></article>");
$paginaFabulas->mostrar();