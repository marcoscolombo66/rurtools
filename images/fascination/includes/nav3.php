 <style>.bg-light {background-color:#ffd703!important;} </style>
 <ul class="navbar-nav mr-auto">
 <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()."Presupuestos"; ?>"><img style="width:20%;height:20%;" src="<?php echo base_url()."assets/logo-nuevo-gestion2.png";?>"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()."Presupuestos"; ?>"><strong>Inicio</strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()."Presupuestos/clientes_abm"; ?>"><strong>Clientes</strong></a>
      </li>
	   
	   
      
	  <?php 
	  echo '
	  <li class="nav-item">
        <a class="nav-link" href="'.base_url().'Presupuestos/listado"><strong>Presupuestos</strong></a>
      </li>
	  ';
	  
	  echo '
	  <li class="nav-item">
        <a class="nav-link" href="'.base_url().'Presupuestos/stock"><strong>Stock</strong></a>
      </li>
	  ';
	  
	  /*
		echo '
		<li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()."Gestion/pagos_abm"; ?>"><strong>Cobros</strong></a>
      </li>
	  
	  <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()."Gestion/deudores_abm"; ?>"><strong>Deudores</strong></a>
      </li>
		';
	  
		$arrSesion = $this->session->userdata('ses_usuario');
		if ($arrSesion==true && $arrSesion['tipo_usuario']=="reseller")
		{
			echo '<li class="nav-item">
			<a class="nav-link" href="'.base_url().'Gestion/reseller"><strong>Reseller</strong></a>
			</li>
			';
		
		} 
		
		*/
		?>
		
		
	  <li class="nav-item">
        <a class="nav-link" href="<?php 
		$arrSesion = $this->session->userdata('ses_usuario');
		if ($arrSesion==true){echo base_url()."Presupuestos/diseno/edit/".$arrSesion['id_usuario'];} ?>"><strong>Diseño</strong></a>
      </li>
	  
       <li class="nav-item">
        <a class="nav-link" href="<?php 
		$arrSesion = $this->session->userdata('ses_usuario');
		if ($arrSesion==true){echo base_url()."Presupuestos/editar_perfil/edit/".$arrSesion['id_usuario'];} ?>"><strong>Mi Perfil</strong></a>
      </li>
	  
	  <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()."cerrar"; ?>"><strong>Salir</strong></a>
      </li>
    </ul>  <!-- ffd703 -->