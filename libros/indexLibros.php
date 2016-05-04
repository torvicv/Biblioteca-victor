    <?php
    include ("../inicio.inc");
    
      class libros extends inicio2{
          
        var $contenido = "<div id=\"contenido\"><h1>Biblioteca Victor Cabral Vida</h1></div>";
        var $instrucciones = "<aside><h3>Instrucciones</h3>Para pedir prestado el libro, pincha en el "
                . "enlace al final de la pagina.</aside>";
        var $url;
        function enlace(){
            echo "<a href='../formularioPrestar.php'><h4 id=\"prestar\">Pedir prestado libro</h4></a>"
                . "<div id=\"retroceder\"><a href='../$this->url'>Retroceder pagina</a></div>";
            }
        function setEnlace($url2){
            $this->url = $url2;
            }
        
      function mostrarBoton($width,$nombre,$url,$activo = TRUE){
                if($activo){
                    echo "<td width = \"$width%\">
                        <a href=\"../$url\"><img src=\"../Biblioteca/images.png\" 
                            alt=\"$nombre\" width=\"15px\" height=\"15px\" border=0></a>
                                <a href=\"../$url\"><span class=\"menu\">$nombre</span></a>";
                    //aqui hay un dato para rellenar en mostrarEstilos().El <span>.
                }else{
                    echo "<td width = \"$width\">
                        <img src=\"../Biblioteca/images1.png\" alt=\"$nombre\"
                            width=\"15px\" height=\"15px\">
                            <span class=\"menu\">$nombre</span>";
                }
            }
        function mostrarCabecera(){
                echo "<img src=\"../Biblioteca/PIC_0015.jpg\" alt=\"Imagen\" width=\"100%\" height=\"300px\">";
            }
        function setContenidos2($nuevosContenidos2){
            $this->contenido2 = $nuevosContenidos2;
        }
            var $circulo = "<svg width=\"0.6cm\" height=\"0.6cm\">"
                    . "<circle id=\"circulo\" r=\"0.1cm\" cx=\"0.3cm\" cy=\"0.3cm\" fill=\"lightcyan\""
            . "><animate xlink:href=\"#circulo\" attributeName=\"r\" from=\"0.1cm\" to=\"0.3cm\" dur=\"1s\""
                    . "begin=\"click\" fill=\"freeze\"></svg>";
            var $circulo2 = "<svg width=\"0.6cm\" height=\"0.6cm\">"
            . " <circle id=\"circulo2\" r=\"0.1cm\" cx=\"0.3cm\" cy=\"0.3cm\" fill=\"lightcyan\""
            . "><animate xlink:href=\"#circulo2\" attributeName=\"r\" from=\"0.1cm\" to=\"0.3cm\" dur=\"4s\" "
                    . "begin=\"click\" fill=\"freeze\" values=\"0.1cm; 0.3cm; 0.1cm\"/></svg>";
            var $circulo3 = "<svg class=\"circulo3\" width=\"0.6cm\" height=\"0.6cm\"><circle id=\"circulo3\" r=\"0.1cm\" cx=\"0.3cm\" cy=\"0.3cm\" fill=\"lightcyan\""
            . "><animate xlink:href=\"#circulo3\" attributeName=\"r\" from=\"0.1cm\" to=\"0.3cm\" dur=\"4s\" "
                    . "begin=\"click\" end=\"click\" fill=\"freeze\" /></svg>";
            var $circulo4 = "<svg class=\"circulo4\" width=\"0.6cm\" height=\"0.6cm\"><circle id=\"circulo4\" r=\"0.1cm\" cx=\"0.3cm\" cy=\"0.3cm\" fill=\"lightcyan\""
            . "><animate xlink:href=\"#circulo4\" attributeName=\"r\" from=\"0.1cm\" to=\"0.3cm\" dur=\"4s\" "
                    . "begin=\"click\" end=\"click\" fill=\"freeze\" /></svg>";
            var $circulo5 = "<svg class=\"circulo5\" width=\"0.6cm\" height=\"0.6cm\"><circle id=\"circulo5\" r=\"0.1cm\" cx=\"0.3cm\" cy=\"0.3cm\" fill=\"lightcyan\""
            . "><animate xlink:href=\"#circulo5\" attributeName=\"r\" from=\"0.1cm\" to=\"0.3cm\" dur=\"4s\" "
                    . "begin=\"click\" end=\"click\" fill=\"freeze\" /></svg>";
            var $circulo6 = "<svg class=\"circulo6\" width=\"0.6cm\" height=\"0.6cm\"><circle id=\"circulo6\" r=\"0.1cm\" cx=\"0.3cm\" cy=\"0.3cm\" fill=\"lightcyan\""
            . "><animate xlink:href=\"#circulo6\" attributeName=\"r\" from=\"0.1cm\" to=\"0.3cm\" dur=\"4s\" "
                    . "begin=\"click\" end=\"click\" fill=\"freeze\" /></svg>";
            var $circulo7 = "<svg class=\"circulo7\" width=\"0.6cm\" height=\"0.6cm\"><circle id=\"circulo7\" r=\"0.1cm\" cx=\"0.3cm\" cy=\"0.3cm\" fill=\"lightcyan\""
            . "><animate xlink:href=\"#circulo7\" attributeName=\"r\" from=\"0.1cm\" to=\"0.3cm\" dur=\"4s\" "
                    . "begin=\"click\" end=\"click\" fill=\"freeze\" /></svg>";
                    
            function mostrar(){
                echo "<html>\n<head>\n";
                $this->mostrarTitulo();
                $this->mostrarAutor();
                $this->mostrarBase();
                $this->mostrarDescription();
                $this->mostrarPalabraClave();
                $this->mostrarEstilos();
                echo "</head>\n<body>\n";
                $this->mostrarCabecera();
                $this->mostrarMenu($this->botones);
                $this->mostrarMenu($this->fila2botones);
                echo $this->contenido;
                echo $this->instrucciones;
                echo $this->contenido2;
                $this->enlace();
                $this->mostrarFooter();
                echo "</body>\n</html>\n";
            }
            function mostrar2(){
                echo "<html>\n<head>\n";
                $this->mostrarTitulo();
                $this->mostrarAutor();
                $this->mostrarBase();
                $this->mostrarDescription();
                $this->mostrarPalabraClave();
                $this->mostrarEstilos();
                echo "</head>\n<body>\n";
                $this->mostrarCabecera();
                $this->mostrarMenu($this->botones);
                $this->mostrarMenu($this->fila2botones);
                echo $this->contenido;
                echo $this->contenido2;
                $this->enlace();
                $this->mostrarFooter();
                echo "</body>\n</html>\n";
            }
      }