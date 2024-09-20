// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);



})();

function initBuscador() {
  var map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: -42.7683807, lng: -65.0958759}, //-42.7683807,-65.0958759,12zz
    zoom: 7,
    mapTypeId: 'roadmap'
  });
// Create the search box and link it to the UI element. #desde
var input = document.getElementById('desde');
var searchBox = new google.maps.places.Autocomplete(input);
//map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

// Create the search box and link it to the UI element. #hasta
var input2 = document.getElementById('hasta');
var searchBox2 = new google.maps.places.Autocomplete(input2);
//map.controls[google.maps.ControlPosition.TOP_LEFT].push(input2);
}

function initAutocomplete() {
  var map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: -42.7683807, lng: -65.0958759}, //-42.7683807,-65.0958759,12zz
    zoom: 7,
    mapTypeId: 'roadmap'
  });


  // Create the search box and link it to the UI element. #desde
  var input = document.getElementById('desde');
  var searchBox = new google.maps.places.Autocomplete(input);
  //map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

  // Create the search box and link it to the UI element. #hasta
  var input2 = document.getElementById('hasta');
  var searchBox2 = new google.maps.places.Autocomplete(input2);
  //map.controls[google.maps.ControlPosition.TOP_LEFT].push(input2);

  var input3 = document.getElementById('ciudad');
  var searchBox = new google.maps.places.Autocomplete(input3);
  //map.controls[google.maps.ControlPosition.TOP_LEFT].push(input3);

  var input4 = document.getElementById('punto1');
  var searchBox = new google.maps.places.Autocomplete(input4);
  //map.controls[google.maps.ControlPosition.TOP_LEFT].push(input3);

  var input5 = document.getElementById('punto2');
  var searchBox = new google.maps.places.Autocomplete(input5);
  //map.controls[google.maps.ControlPosition.TOP_LEFT].push(input3);
}

function initMap() {
  var bounds = new google.maps.LatLngBounds;
  var markersArray = [];

  var origin1 = document.getElementById('desde').value;
  
  var destinationA = document.getElementById('hasta').value;

   

  
  var destinationIcon = 'https://chart.googleapis.com/chart?' +
  'chst=d_map_pin_letter&chld=D|FF0000|000000';
var originIcon = 'https://chart.googleapis.com/chart?' +
  'chst=d_map_pin_letter&chld=O|FF0000|000000';
var map = new google.maps.Map(document.getElementById('map'), {
center: {lat: -42.7683807, lng: -65.0958759},
zoom: 7,

});
var geocoder = new google.maps.Geocoder;

var service = new google.maps.DistanceMatrixService;
service.getDistanceMatrix({
origins: [origin1],
destinations: [destinationA],
travelMode: 'DRIVING',
unitSystem: google.maps.UnitSystem.METRIC,
avoidHighways: false,
avoidTolls: false
}, function(response, status) {
if (status !== 'OK') {
  alert('Error! Complete todos los campos: ' + status);
} else {
  var originList = response.originAddresses;
  var destinationList = response.destinationAddresses;
  var outputDiv = document.getElementById('output');
  outputDiv.innerHTML = '';
  deleteMarkers(markersArray);

  var showGeocodedAddressOnMap = function(asDestination) {
    var icon = asDestination ? destinationIcon : originIcon;
    return function(results, status) {
      if (status === 'OK') {
        map.fitBounds(bounds.extend(results[0].geometry.location));
        markersArray.push(new google.maps.Marker({
          map: map,
          position: results[0].geometry.location,
          icon: icon
        }));
      } else {
        alert('Error! Complete todos los campos: ' + status);
      }
    };
  };

  for (var i = 0; i < originList.length; i++) {
    var results = response.rows[i].elements;
    var dolar= 20.20;
    geocoder.geocode({'address': originList[i]},
        showGeocodedAddressOnMap(false));
    for (var j = 0; j < results.length; j++) {
      
      var costo=(parseFloat(results[j].distance.text)*(0.643564356)*dolar); //corta y media distancia
      var distancia=replaceAll(results[j].distance.text,',',''); //replaceAll
      
      
      if (parseFloat(distancia)>33.1 && parseFloat(distancia)<850.1){
        costo=(parseFloat(distancia)*(0.0992677391)*dolar+(5.1*dolar))/1.6; 
        //Formula para larga distancia
      }else if(parseFloat(distancia)>850.1){ costo=(parseFloat(distancia)*(0.0992677391)*dolar+(7.5*dolar))/1.77;} 

//Mejorar el tiempo aproximado
      geocoder.geocode({'address': destinationList[j]},
          showGeocodedAddressOnMap(true));
      outputDiv.innerHTML += '<div>Desde <u>'+ciudadProvincia(originList[i])+ '</u> hasta <u>' + 
      ciudadProvincia(destinationList[j]) +
          '</u> son <u>' + distancia + '</u> | tiempo estimado: <u>' +
          results[j].duration.text + '</u>. | costo aproximado: <u>$'+Math.ceil(costo);+'</u></div>';
    }
  }
}
});
}
function replaceAll( text, busca, reemplaza ){
  
    while (text.toString().indexOf(busca) != -1)
  
        text = text.toString().replace(busca,reemplaza);
  
    return text;
  
  }
  
function ciudadProvincia(cadena) //Solo muestra ciudad
{
  var indice=cadena.indexOf(',');

  return cadena.substring(0, indice);

}

function ciudadProvincia2(cadena) // muestra ciudad y provincia
{
  var indice=cadena.lastIndexOf(',');

  return cadena.substring(0, indice);
  

}
function deleteMarkers(markersArray) {
for (var i = 0; i < markersArray.length; i++) {
markersArray[i].setMap(null);
}
markersArray = [];
}
function base_url(segment){
  // get the segments
  pathArray = window.location.pathname.split( '/' );
  // find where the segment is located
  indexOfSegment = pathArray.indexOf(segment);
  // make base_url be the origin plus the path to the segment
  return window.location.origin + pathArray.slice(0,indexOfSegment).join('/') + '/';
}
function myFunction() {
cadena=document.getElementById("ciudad").value;
fruits.push("<div id='ciudad_paso"+fruits.length+"' class='btn btn2 btn-xs'><img id='img_mover' src='http://localhost/CodeIgniter/img/mover.png'>#"+cadena.replace(/,/g, "|")+"<img id='img_borra' src='http://localhost/CodeIgniter/img/borrar.png' onclick='BorraElemento("+fruits.length+")'></div>");
document.getElementById("sortable").innerHTML = fruits.join("");
document.getElementById("ciudad").value="";
}
function muestra() {
cadena=document.getElementById("sortable").innerText;
//cadena=cadena.replace('#', "");
document.getElementById("test").innerHTML=cadena;  //MUESTRA ORDENADO
var vector=cadena.split("#"); //Pasa a vector los divs, ordenados
    
}
function limpia() {
    document.getElementById("sortable").innerHTML="";
    document.getElementById("test").innerHTML="";
    fruits=[];
    }

    function BorraElemento(indice) {
        
        $('#ciudad_paso'+indice).remove();
        fruits.splice(indice, 1)
        //Ver como agregar indice, y actualizar haciendo un pop al vector
        //alert(indice);
    }
	
	 function BorraElementoBD(indice) {
        
        $('#ciudad_paso_bd'+indice).remove();
		$('#ciudad_paso_o').val('');
		
        fruits.splice(indice, 1)
        //Ver como agregar indice, y actualizar haciendo un pop al vector
        //alert(indice);
    }
	
	