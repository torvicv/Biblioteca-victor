<?php
include("index0.php");

class leerLibrosPrestados extends pagina{
function Tematica(){
$prestados = file("Biblioteca/librosPrestados.txt");

$numeroPrestados = count($prestados);

if($numeroPrestados == 0){
    echo "<font style='color: green; font-size: 200%'>";
    echo "<p>No hay libros prestados.</p></font>";
}else{
    ?>
<table border="1">
    <caption><h2>Libros Prestados</h2></caption>
    <tr style="background-color: lightblue">
        <th>Fecha</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Titulo del libro</th>
    </tr>
        <?php
        for($i=0;$i<$numeroPrestados;$i++){
            $linea = explode("\t", $prestados[$i]);
            ?>
    <tr>
        <td><?=$linea[0];?></td>
        <td><?=$linea[1];?></td>
        <td><?=$linea[2];?></td>
        <td><?=$linea[3];?></td>
    </tr>   
    <?php
        }
    ?>
</table>
<?php
}
}
}

$paginaLeerLibrosPrestados = new leerLibrosPrestados();
$paginaLeerLibrosPrestados->setTitulo("Datos archivados");
$paginaLeerLibrosPrestados->mostrar();
?>
