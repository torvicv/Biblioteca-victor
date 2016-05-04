<?php
include ("index0.php");
class formularioComentarios extends pagina{
            
    function Tematica() {
            ?>
        <form action="comentarios.php" method="post">
            <table border="0"> 
                <tr><td>Ingrese su nombre:</td>
                    <td><input type="text" name="nombre" placeholder="Nombre" autofocus/></td></tr>
                <tr><td>Ingrese su email:</td>
                    <td><input type="email" name="email" placeholder="Email"/></td></tr>
                <tr><td colspan="2"><textarea name="comentario" rows="10" cols="50" placeholder="ingrese su comentario"></textarea></td></tr>
                <tr><td colspan="2" style="text-align: center"><input type="submit" value="enviar datos"/></td></tr></table>
        </form>
<?php
            parent::Tematica();
}
}

$paginaFormularioComentarios = new formularioComentarios();
$paginaFormularioComentarios->setTitulo("Formulario Comentarios");
$paginaFormularioComentarios->mostrar();