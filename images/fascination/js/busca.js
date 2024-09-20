  $(document).ready(function() {    
    //Al escribr dentro del input con id="service"
    $('#desde').keypress(function(){
		
		 var dataString = $(this).val();
		 
		 if (dataString.length >= 2){
        //Obtenemos el value del input
                 
       
//alert (service);
        //Le pasamos el valor del input al ajax
        $.ajax({
            type: "POST",
            url: "http://localhost/Codeigniter/index.php/inicio/GetDesde",
            data: dataString,
            success: function(data) {
                //Escribimos las sugerencias que nos manda la consulta
                $('#autosugerencia').fadeIn(1000).html(data);
                //Al hacer click en algua de las sugerencias
                 					
		
		
		$('#autosugerencia').on('click', 'ul li', function () {
        $('#desde').val($(this).text());
        $('#autosugerencia').fadeOut(1000);
    	
	});				
                             
            }
        });
		}});              
});   

 


 