<?php

include 'indexLibros.php';

$paginaLasPalabras = new libros();
$paginaLasPalabras->setDescription("Libro sobre las palabras");
$paginaLasPalabras->setPalabrasClave("Libro, leyenda, palabras");
$paginaLasPalabras->setEnlace("varios.php");
$paginaLasPalabras->setTitulo("La leyenda de las palabras");
$paginaLasPalabras->setContenidos2("<article id=\"libros\"><p>Autor:</p>&nbsp;<cite>Juan Cervera</cite><p>
        Editorial:</p>&nbsp;Miñon<blockquote><h3>Presentación:</h3><p class=\"indentation\">¿Sabéis lo que es una rambla? Una rambla 
        es el lecho de un río que no existe, un río seco. O sea el cauce natural por donde corren las aguas tan 
        sólo cuando llueve torrencialmente, en algunos lugares, y se improvisa un río que desaparece cuando 
        cesa la lluvia.</p><p class=\"indentation\">Esas ramblas a veces tienen la belleza cautivadora porque 
            parecen ríos de guijarros blancos un poco azulados. Vistas desde lejos, las ramblas constituyen una 
            hermosa cinta serpenteante entre las montañas. Y, vistas desde cerca, ofrecen el espectáculo de sus 
            guijarros blanquecinos alineados y redondos sin huecos ni fisuras, todos inclinados mirando hacia 
            adelante, como si desearan echar a correr para llegar pronto al mar</p><p class=\"indentation\">
            Cuando veo una de estas ramblas siempre me pregunto lo mismo ¿De dónde vendrá cada uno de estos 
            guijarros? ¿De qué rocas o peñas se habrán desprendido? ¿Cuánto se habrán rozado unos con otros, y 
            contra el agua, hasta quedar tan redondos y lisos que parecen pastillas de jabón y peladillas?</p>
            <p class=\"indentation\">A veces pienso que un diccionario es como una rambla. Sólo que en el 
            diccionario las que están alineadas y ordenaditas son las palabras y no los guijarros. Pero ¿de 
            dónde provienen esas palabras que duermen en el diccionario y que yo empleo? ¿Siempre han sido 
            así? ¿Siempre han tenido la misma forma y significado que ahora?</p><p class=\"indentation\">
            Averiguarlo resulta entretenido, divertido y hasta apasionante. Tan apasionante como resultaría ir 
            por la tarde a la rambla o río seco, tomar en la mano una piedrecita convertida en guijarro y 
            preguntarle:</p><p class=\"indentation\">-¿Cómo te llamas?</p><p class=\"indentation\">Y después, 
                oír su nombre y la explicación de su historia.</p><p class=\"indentation\">Que una fría 
            madrugada se degajó de una gigantesca roca de la cima; que luego rodó puntiaguda y pequeña hasta 
            una pedriza donde había otras muchas sueltas; que más tarde, un dia de lluvia, se arrastró 
            ladera abajo y quedó junto a un corral de ovejas; que una noche el pastor la lanzó contra unas 
            matas donde sospechaba que se escondía un lobo; que luego la lluvia la empujó hasta el barranco y 
            la dejó junto a otros guijarros de la rambla...</p><p class=\"indentation\">¿Y después?</p><p 
                class=\"indentation\">No lo sabía. Quién sabe si algún día llegarían los obreros y la cargarían 
            con otras muchas en un camión para dejarla inmóvil en un bloque de hormigón de la escalera del 
            puerto...</p><p class=\"indentation\">Relatos como éste se recogen en este libro. Pero no de 
            piedras ni de guijarros; sino de palabras, redondeadas y púlidas como si estuvieran en una rambla. 
            Aquí encontrarás la palabra y su aventura.</p></blockquote></article>");
$paginaLasPalabras->mostrar();