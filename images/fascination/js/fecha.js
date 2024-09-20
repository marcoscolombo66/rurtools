		 
     
    ahora          = new Date();
    ahoraDay    = ahora.getDate();
    ahoraMonth = ahora.getMonth();
    ahoraYear   = 1970;

     
  

     
    function cuantosDias(mes, anyo)
    {
        var cuantosDias = 31;
        if (mes == "Abril" || mes == "Junio" || mes == "Septiembre" || mes == "Noviembre")
      cuantosDias = 30;
        if (mes == "Febrero" && (anyo/4) != Math.floor(anyo/4))
      cuantosDias = 28;
        if (mes == "Febrero" && (anyo/4) == Math.floor(anyo/4))
      cuantosDias = 29;
        return cuantosDias;
    }

     
    function asignaDias()
    {
         
        comboDias = document.getElementById("seleccionaDia"); 
		comboMeses = document.getElementById("seleccionaMes");	 
		comboAnyos = document.getElementById("seleccionaAnyo");

        Month = comboMeses[comboMeses.selectedIndex].text;
        Year = comboAnyos[comboAnyos.selectedIndex].text;

        diasEnMes = cuantosDias(Month, Year);
        diasAhora = comboDias.length;

        if (diasAhora > diasEnMes)
        {
            for (i=0; i<(diasAhora-diasEnMes); i++)
            {
                comboDias.options[comboDias.options.length - 1] = null
            }
        }
        if (diasEnMes > diasAhora)
        {
            for (i=0; i<(diasEnMes-diasAhora); i++)
            {
                sumaOpcion = new Option(comboDias.options.length + 1);
                comboDias.options[comboDias.options.length]=sumaOpcion;
            }
        }
        if (comboDias.selectedIndex < 0) 
          comboDias.selectedIndex = 0;
     }

     
    function ponDia()
    {
        
		comboDias = (document.getElementById("seleccionaDia")); 
		comboMeses = (document.getElementById("seleccionaMes"));	 
		comboAnyos = (document.getElementById("seleccionaAnyo"));
		//comboDias = eval("document.formFecha.seleccionaDia");
        //comboMeses = eval("document.formFecha.seleccionaMes");
        //comboAnyos = eval("document.formFecha.seleccionaAnyo");

        comboAnyos[0].selected = true;
        comboMeses[ahoraMonth].selected = true; 
  
        asignaDias();

        comboDias[ahoraDay-1].selected = true;
    }

     
    function rellenaAnyos(masAnyos)
    {
        cadena = '<select name="seleccionaAnyo" id="seleccionaAnyo"  onchange="asignaDias()" style="width:55px;"><option  value="1990">1990</option>';

        for (i=0; i<masAnyos; i++)
        {
            cadena += "<option value='"+(ahoraYear + i)+"'>";
            cadena += ahoraYear + i+"</option>";
        }
        return cadena+'</select>';
    }