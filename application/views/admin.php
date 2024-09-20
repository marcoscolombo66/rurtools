<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Panel Admin - Antiguoshop</title>

          <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?php echo base_url();?>css/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="<?php echo base_url();?>css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo base_url();?>css/startmin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="<?php echo base_url();?>css/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo base_url();?>css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
		<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<style>
    #page-wrapper {
    
    margin-left: 25px; 
    
}
</style>
</head>
<body>

        <div id="wrapper">

            <!-- Top Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">AntiguoShop</a>
                </div>                 

                 

                <!-- Right Menu -->
                <ul class="nav navbar-right navbar-top-links">
                    
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="text-decoration: none; background-color: transparent !important;">
                            <i class="fa fa-user fa-fw"></i> Admin <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li class="divider"></li>
                            
                            <li>
                            <a href="<?php echo site_url('admin/productos')?>" class="active">
							<i class="fa fa-shopping-cart fa-fw"></i> PRODUCTOS</a>
                        </li>
						<li>
                            <a href="<?php echo site_url('admin/categorias')?>" class="active">
							<i class="fa fa-list-ol  fa-fw"></i> CATEGOR&Iacute;A</a>
                        </li>
						<li>
                            <a href="<?php echo site_url('admin/plataformaspago/edit/0')?>" class="active">
							<i class="fa fa-money fa-fw"></i> PLATAFORMAS PAGO</a>
                        </li>
						<li>
                            <a href="<?php echo site_url('admin/ordenes')?>" class="active">
							<i class="fa fa-list-alt fa-fw"></i> ORDENES DE PAGO</a>
                        </li>
                            <li>
                                <a href="<?php echo site_url('cerrar')?>"><i class="fa fa-sign-out fa-fw"></i> CERRAR</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>

             

            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">

                     
				<div style="margin-top:50px;">
				<?php echo $output; ?>
				</div>
					

                </div>
            </div>

        </div>

         
         
	
	   
    
		
     
    <?php foreach($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>

	 <!-- jQuery -->
	  
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url();?>js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url();?>js/startmin.js"></script>
</body>
</html>
