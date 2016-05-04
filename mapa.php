<?php

include ("index0.php");

class mapa extends pagina{
    function Tematica() {
        
echo "<p id=\"demo\">La marca roja señala la dirección</p><figure><div id=\"mapholder\"></div>

<script src=\"http://maps.google.com/maps/api/js?sensor=false\"></script>

<script>
var x = document.getElementById(\"demo\");
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else { 
        x.innerHTML = \"Geolocation is not supported by this browser.\";
    }

function showPosition(position) {
    lat = 37.3287047;
    lon = -6.059712599999999;
    latlon = new google.maps.LatLng(lat, lon)
    mapholder = document.getElementById('mapholder')
    mapholder.style.height = '500px';
    mapholder.style.width = '80%';

    var myOptions = {
    center:latlon,zoom:14,
    mapTypeId:google.maps.MapTypeId.ROADMAP,
    mapTypeControl:true,
    navigationControlOptions:{style:google.maps.NavigationControlStyle.SMALL}
    }
    
    var map = new google.maps.Map(document.getElementById(\"mapholder\"), myOptions);
    var marker = new google.maps.Marker({position:latlon,map:map,title:\"You are here!\"});
}

function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            x.innerHTML = \"User denied the request for Geolocation.\"
            break;
        case error.POSITION_UNAVAILABLE:
            x.innerHTML = \"Location information is unavailable.\"
            break;
        case error.TIMEOUT:
            x.innerHTML = \"The request to get user location timed out.\"
            break;
        case error.UNKNOWN_ERROR:
            x.innerHTML = \"An unknown error occurred.\"
            break;
    }
}
</script><figure>";
        parent::Tematica();
    }
}

$paginaMapa = new mapa();
$paginaMapa->setTitulo("Mapa Biblioteca Online");
$paginaMapa->mostrar();