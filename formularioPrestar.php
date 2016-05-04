<?php

include("index0.php");

class formularioPrestar extends pagina{
    var $instrucciones = "<aside><h3>Instrucciones</h3>Escriba el titulo del libro sin tildes y en mayúcula solo 
        la primera letra del título. Tenga en cuenta no dejar espacios ni al principio ni al final al pedir 
        prestado el libro. Si son comics tiene que escribir la colección más (,) más espacio más el título o 
        número.En los comics se escriben con mayúsculas los nombres propios y no se escribe con mayúscula la 
        primera letra del título a menos que sea un nombre propio, también se escriben sin tildes como en los 
        otros temas.En los comics en el caso de que sea editorial no hay que escribir (la editorial)</aside>";
    function Tematica() {
        ?>
<table><caption>Formulario para prestar libros</caption><form action="librosPrestados.php"
                method="post" target="_blank"><tr><td>Nombre del usuario</td><td><input type='text' name='nombre' 
                                                         placeholder='nombre' autofocus/></td></tr>
                <tr><td>Email del usuario</td><td><input type='email' name='email' 
                                                         placeholder="email"/></td></tr>
                <tr><td>Libro prestado</td><td><input type="text" name="libro" placeholder="Libro"/></td></tr>
                <tr><td colspan="2" style="text-align: center"><input type="submit" value="enviar datos"/></td></tr>
            </form></table>
        <?php
        parent::Tematica();
    }
    function mostrar(){
                echo "<html>\n<head>\n";
                $this->mostrarTitulo();
                $this->mostrarPalabraClave();
                $this->mostrarEstilos();
                echo "</head>\n<body>\n";
                $this->mostrarCabecera();
                $this->mostrarMenu($this->botones);
                //$this->ordenarTabla();
                echo $this->contenido;
                echo $this->instrucciones;
                $this->Tematica();
                $this->mostrarFooter();
                echo "</body>\n</html>\n";
            }
}
$paginaFormularioPrestar = new formularioPrestar();
$paginaFormularioPrestar->setTitulo("Formulario para prestar libros");
$paginaFormularioPrestar->mostrar();