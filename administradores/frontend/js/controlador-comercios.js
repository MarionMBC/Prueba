document.getElementById('seccion-lista').style.display = 'none';
document.getElementById('seccion-registro').style.display = 'block';


function mostrarOcultarCom(ver, ocultar1) {
    var obj1 = document.getElementById(ver);
    var obj2 = document.getElementById(ocultar1);

    if (obj1.style.display == 'none') {
        obj1.style.display = 'block';
        obj2.style.display = 'none';
    } else {
        obj1.style.display = 'none';
    }
}


let graficoCom1 = document.getElementById("graficoCom1").getContext('2d');
/*Line chart*/
var chartCom1 = new Chart(graficoCom1, {
    type: 'line',
    data: {
        labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
        /*months*/
        datasets: [{
            label: 'Bershka',
            data: [1, 3, 2, 3, 5, 2, 3, 7, 6, 9, 7, 9],
            /*ganancias*/
            backgroundColor: 'rgba(249, 190, 56, 0.9)',
            borderColor: 'rgb(249, 190, 56)'
        }, {
            label: 'Olimpo',
            data: [2, 1, 3, 2, 4, 2, 2, 5, 4, 6, 5, 6],
            /*ganancias*/
            backgroundColor: 'rgba(134, 192, 55, 0.9)',
            borderColor: 'rgb(134,192,55)'
        }, {
            label: 'Stradivarius',
            data: [3, 2, 1, 3, 4, 2, 3, 5, 4, 6, 5, 6],
            /*ganancias*/
            backgroundColor: 'rgba(255, 99, 132, 0.9)',
            borderColor: 'rgb(255,99,132)'
        }, {
            label: 'Carrion',
            data: [4, 2, 3, 1, 2, 3, 2, 4, 3, 5, 4, 5],
            /*ganancias*/
            backgroundColor: 'rgba(255, 206, 86, 0.9)',
            borderColor: 'rgb(255,206,86)'
        }, {
            label: 'Sara',
            data: [5, 3, 2, 3, 1, 2, 3, 4, 3, 5, 4, 5],
            /*ganancias*/
            backgroundColor: 'rgba(75, 192, 192, 0.9)',
            borderColor: 'rgb(75,192,192)'
        }, {
            label: 'Unlimited',
            data: [6, 4, 2, 3, 5, 2, 3, 7, 6, 9, 7, 9],
            /*ganancias*/
            backgroundColor: 'rgba(255, 159, 64, 0.9)',
            borderColor: 'rgb(255,159,64)'
        }]
    }
});



var mymap = L.map('mapa').setView([14.1315, -87.2195], 13);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    maxZoom: 25,
    attribution: 'Datos del mapa de &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a>, ' + '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' + 'Imágenes © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox/streets-v11'
}).addTo(mymap);

//mas funciones del mapa
function verUbicacion() {
    if (navigator.geolocation) { //Validar si hay acceso web a la ubicación
        navigator.geolocation.getCurrentPosition(mostrarUbicacion); //Obtiene la posición
    } else {
        alert("¡Error! Este navegador no soporta la Geolocalización.");
    }

    //Funcion para obtener latitud y longitud
    function mostrarUbicacion(position) {
        let latitud = position.coords.latitude; //Obtener latitud
        let longitud = position.coords.longitude; //Obtener longitud
        let div = document.getElementById("coordenadas");
        div.innerHTML = "<br>Latitud: " + latitud + "<br>Longitud: " + longitud; //Imprime latitud y longitud

        ubicacion(latitud, longitud);
    }
}

function comercios(comercio) {
    if (comercio == 'olimpo') {
        var marcador3 = L.icon({
            iconUrl: 'img/locations/olimpo-location.png',
            iconSize: [60, 60]
        });
        var marker3 = L.marker([14.2115, -87.2095], {
            icon: marcador3
        }).addTo(mymap);
        marker3.bindPopup("<b>Olimpo</b><br>");
    } else if (comercio == 'carrion') {
        var marcador4 = L.icon({
            iconUrl: 'img/locations/carrion-location.png',
            iconSize: [60, 60]
        });
        var marker4 = L.marker([14.1315, -87.2195], {
            icon: marcador4
        }).addTo(mymap);
        marker4.bindPopup("<b>Carrion</b>");
    } else if (comercio == 'bershka') {
        var marcador5 = L.icon({
            iconUrl: 'img/locations/bershka-location.png',
            iconSize: [60, 60]
        });
        var marker5 = L.marker([14.1515, -87.2295], {
            icon: marcador5
        }).addTo(mymap);
        marker5.bindPopup("<b>Bershka</b>");
    }
}

comercios('olimpo');
comercios('carrion');
comercios('bershka');

function motorista() {
    var marcador1 = L.icon({
        iconUrl: 'img/locations/motorista.png',
        iconSize: [50, 50]
    });
    var marker1 = L.marker([14.0715, -87.1795], {
        icon: marcador1
    }).addTo(mymap);
    marker1.bindPopup("<b>Repartidor Fast</b>");

}

//funcion para llamar funcion ubicacion cada 10 segundos
var timer = setInterval(geoFindMeClient, 10000);

function ubicacion(latitud, longitud) {

    var marcador2 = L.icon({
        iconUrl: 'img/locations/cliente.png',
        iconSize: [60, 60]
    });
    var marker2 = L.marker([latitud, longitud], {
        icon: marcador2
    }).addTo(mymap);
    marker2.bindPopup("<b>Cliente</b>");

    mymap.setView([latitud, longitud], 13);

    motorista();

}


//otra forma de geolocalizacion
function geoFindMeClient() {
    console.log("Estoy aqui");
    var output = document.getElementById("coordenadas");

    if (!navigator.geolocation) {
        output.innerHTML = "<p>Geolocation is not supported by your browser</p>";
        return;
    }

    function success(position) {
        var latitude = position.coords.latitude;
        var longitude = position.coords.longitude;

        output.innerHTML = '<p>Latitude is ' + latitude + '° <br>Longitude is ' + longitude + '°</p>';
        ubicacion(latitude, longitude)

    };

    function error() {
        output.innerHTML = "Unable to retrieve your location";
    };

    var option = {
        enableHighAccuracy: true,
        setTimeout: 5000,
        maxiumAge: 0
    }

    output.innerHTML = "<p>Locating…</p>";

    navigator.geolocation.getCurrentPosition(success, error, option);

}


function detenerUbicacion() {
    clearInterval(timer);
    console.log('Proceso detenido')
}