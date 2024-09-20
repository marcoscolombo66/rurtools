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

  var input4 = document.getElementById('desde2');
  var searchBox = new google.maps.places.Autocomplete(input4);
  //map.controls[google.maps.ControlPosition.TOP_LEFT].push(input3);

  var input5 = document.getElementById('hasta2');
  var searchBox = new google.maps.places.Autocomplete(input5);
  //map.controls[google.maps.ControlPosition.TOP_LEFT].push(input3);
 
  }
  
  function initMap2() {
  var bounds = new google.maps.LatLngBounds;
  var markersArray = [];

  var origin1 = document.getElementById('desde2').value;
  
  var destinationA = document.getElementById('hasta2').value;

   

  
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
  var outputDiv = document.getElementById('output2');
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
    //var dolar= 20.20;
    var dolar= document.getElementById("hid_DOLAR").value;
    
	
	geocoder.geocode({'address': originList[i]},
        showGeocodedAddressOnMap(false));
    
	 
	
	for (var j = 0; j < results.length; j++) {
      
      var costo=''; 
      
	  var distanciaKM=results[j].distance.text;
	  distanciaKM= replaceAll(distanciaKM,',',''); //replaceAll
      
   var distancia=results[j].distance.text;
   distancia=replaceAll(distancia,'km',''); //replaceAll
	   
	  distancia=replaceAll(results[j].distance.text,',',''); //replaceAll
      distancia=parseFloat(distancia);
      distancia=Math.trunc(distancia);
      
	  dolar=parseFloat(dolar);
	  dolar=Math.trunc(dolar);
      
	  
	   
	  var duracion=Math.trunc(results[j].duration.value);
	  
	  
	  
	   
	   if (distancia<30){costo=(distancia/8)*dolar;} //corta distancia  8 coeficiete 
	   else if (distancia>=30 & distancia<=300){costo=(distancia/16)*dolar;} //media distancia 16 coeficiente
	   else if (distancia>300){costo=(distancia/22)*dolar;} //larga distancia 22 coeficiente
	   
	 
//Mejorar el tiempo aproximado
      geocoder.geocode({'address': destinationList[j]},
          showGeocodedAddressOnMap(true));
      outputDiv.innerHTML += '<div class="alerta_validacion color_grisclaro" style="text-align:justify;"><u>Desde</u> '+ciudadProvincia($("#desde2").val())+ ' <u>hasta</u> ' + 
      ciudadProvincia($("#hasta2").val()) +
          ' son ' + distanciaKM + '.  - <u>Tiempo estimado:</u> ' +
          horasminutos(duracion) + '. </div>';
     
	}
	$('#txtCobra').val((costo.toFixed(0)));
    $('#total_distancia').val(distancia);
    $('#hidDistancia').val(distancia);
  }
}
});
}
 

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
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
    //var dolar= 20.20;
    var dolar= document.getElementById("hid_DOLAR").value;
    
	
	geocoder.geocode({'address': originList[i]},
        showGeocodedAddressOnMap(false));
    
	 
	
	for (var j = 0; j < results.length; j++) {
      
      var costo=''; 
      
	  var distanciaKM=results[j].distance.text;
	  distanciaKM= replaceAll(distanciaKM,',','.'); //replaceAll
      
   var distancia=results[j].distance.text;
   distancia=replaceAll(distancia,'km',''); //replaceAll
	   
	  distancia=replaceAll(results[j].distance.text,',','.'); //replaceAll
      distancia=parseFloat(distancia);
      distancia=Math.round(distancia);
	  
	  dolar=parseFloat(dolar);
	  dolar=Math.round(dolar);
      
	  
	   
	  var duracion=Math.round(results[j].duration.value);
	  
	  
	  
	   
	   if (distancia<30){costo=(distancia/8)*dolar;} //corta distancia  8 coeficiete 
	   else if (distancia>=30 & distancia<=300){costo=(distancia/16)*dolar;} //media distancia 16 coeficiente
	   else if (distancia>300){costo=(distancia/22)*dolar;} //larga distancia 22 coeficiente
	   
	 
//Mejorar el tiempo aproximado
      geocoder.geocode({'address': destinationList[j]},
          showGeocodedAddressOnMap(true));
      outputDiv.innerHTML += '<div class="alerta_validacion color_grisclaro" style="text-align:justify;"><u>Desde</u> '+ciudadProvincia($("#desde").val())+ ' <u>hasta</u> ' + 
      ciudadProvincia($("#hasta").val()) +
          ' son ' + distanciaKM + '. <br/> <u>Tiempo estimado:</u> ' +
          horasminutos(duracion) + '. | <u>Costo sugerido x asiento:</u> $<a id="valor_cobrar">'+(costo.toFixed(0))+'</a></div>';
    $('#txtCobra').val((costo.toFixed(0)));
    $('#total_distancia').val(distancia);
    $('#hidDistancia').val(distancia);
	}
  }
}
});
}

function horasminutos(tiempo){
	
	var hours = Math.floor( tiempo / 3600 );  
var minutes = Math.floor( (tiempo % 3600) / 60 );
var seconds = tiempo % 60;
 
//Anteponiendo un 0 a los minutos si son menos de 10 
minutes = minutes < 10 ? '0' + minutes : minutes;
 
//Anteponiendo un 0 a los segundos si son menos de 10 
seconds = seconds < 10 ? '0' + seconds : seconds;
 
var result = hours + " Hs. " + minutes + " min. " + seconds +' seg';  // 2:41:30
	return result;
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


fruits.push("<div   id='ciudad_paso"+fruits.length+"' class='alerta boxshadow'><small><i class='fas fa-map-pin'></i>#"+cadena.replace(/,/g, "|")+"</small><button type='button' onclick='BorraElemento("+fruits.length+")'><span aria-hidden='true'>&times;</span></button></div>");

document.getElementById("sortable").innerHTML = fruits.join("");
document.getElementById("ciudad").value="";

}
function muestra() {
cadena=document.getElementById("sortable").innerText;
//cadena=cadena.replace('&times;', "");
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