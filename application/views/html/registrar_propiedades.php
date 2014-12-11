<!DOCTYPE html>

<html lang="en-US">
<head>
    <?php require_once 'header.php';?>
     <script src="http://maps.google.com/maps?file=api&amp;v=2.x&amp;key=ABQIAAAAeryWbH36wYIzBlyBTlVaYRT6h80I-LqGbyucm12i7tEuhx7_6BQakACdjbYSK8zwcGUkv8bt1m8NXQ" type="text/javascript"></script>
    <script type="text/javascript">
    //<![CDATA[

    var map = null;
    var geocoder = null;

    function load() {
      if (GBrowserIsCompatible()) {
        map = new GMap2(document.getElementById("map"));
		map.addControl(new GLargeMapControl());
		map.addControl(new GMapTypeControl());
        map.setCenter(new GLatLng(18.94335277253068,  -70.56518554687), 8);
        geocoder = new GClientGeocoder();
		
		GEvent.addListener(map, "click", function(marker, point) {
 		 if (marker) {
 		   //map.removeOverlay(marker);
 		 } else {

 			map.clearOverlays();
 		   map.addOverlay(new GMarker(point));
		   var temp_point = point.toString();
		   temp_point = temp_point.substring(1, temp_point.length-2);
		   var point_a = new Array();
		   point_a = temp_point.split(",");
		   document.latlong.latitude.value = point_a[0];
		   document.latlong.longitude.value = point_a[1];
		   //map.setCenter(point, 12);
  		}});
		
      }
    }
	
    //]]>
    </script>
    <title>Agregar Propiedad</title>

</head>

<body class="page-sub-page page-submit" id="page-top" onload="load()" onunload="GUnload()">
<!-- Wrapper -->
<div class="wrapper">
    <!-- Navigation -->
    <?php require_once 'navigation.php';?>
    <!-- end Navigation -->
    <!-- Page Content -->
    <div id="page-content">
        <!-- Breadcrumb -->
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Inicio</a></li>
                <li class="active">Agrega tu propiedad</li>
            </ol>
        </div>
        <!-- end Breadcrumb -->

        <div class="container">
            <header><h1>Agrega Tu Propiedad</h1></header>
       
            <form role="form" name="latlong" id="form-submit" class="form-submit"  method="post" action="http://localhost/php/realstate/index.php/propiedades/registrar" enctype="multipart/form-data">
                <div class="row">
                    <div class="block">
                        <div class="col-md-6 col-sm-6">
                            <section id="submit-form">
                                <section id="basic-information">
                  
              <?php if(isset($enviado)){?>	     
		<div class="form-group">
            <h3 style="color: green;"><?php echo $enviado; ?></h3>
          <br />
            </div><!-- /.form-group -->	
			<?php }?>
			
            <div class="form-group">
            <label for="country_id">Tipo Propiedad:</label>
            <select class="form-control" id="type" name="type" />
            
            <?php foreach($properties_type as $type):?>
            <option value="<?php echo $type['type_id']?>"><?php echo $type["type_name"]?></option>
            <?php endforeach;?>
            </select><br />
          
            </div><!-- /.form-group -->
            <?php 
            $userID = 0;
            if($this->session->userdata('user_id')){
            	
            	$userID = $this->session->userdata('user_id');
            
            }
            ?>
            <!-- CAMPO USER_ID --> 
            <input type="hidden" class="form-control" id="user_id" name="user_id" value="<?php echo $userID; ?>" readonly="readonly"/><br />
           
			<div class="form-group">
            <label for="country_id">Modo:</label>
            <select class="form-control" id="mode" name="mode" />
            
            <option value="1">Alquiler</option>
            <option value="2">Venta</option>
            <option value="3">Alquiler y Venta</option>
       
            </select><br /><br />
          
            </div><!-- /.form-group -->
			<div class="form-group">
            <label for="general_description">Descripcion General:</label><textarea id="general_description" name="general_description" cols="70" rows="10" required></textarea><br /></div><!-- /.form-group -->
			<div class="form-group">
            <label for="actual_use">Uso Actual:</label>
            <select class="form-control" id="actual_use" name="actual_use" />
            
            <option value="residencial">Residencial</option>
            <option value="comercial">Comercial</option>
            <option value="ambos">Ambos</option>
       
            </select><br />
          
            <br /></div><!-- /.form-group -->
			<div class="form-group">
            <label for="country_id">Moneda:</label>
            <select class="form-control" id="country_id" name="country_id" required />
            
            <option value="1">RD$</option>

            </select><br /><br />
          
            </div><!-- /.form-group -->
			<div class="form-group">
            <label for="rental_price">Precio Alquiler:</label><input type="text" class="form-control" id="rental_price" name="rental_price" required /><br /></div><!-- /.form-group -->
			<div class="form-group">
            <label for="furnished_rental_price">Precio Alquiler Amueblado:</label><input type="text" class="form-control" id="furnished_rental_price" name="furnished_rental_price" required /><br /></div><!-- /.form-group -->
			<div class="form-group">
            <label for="sale_price">Precio Venta:</label><input type="text" class="form-control" id="sale_price" name="sale_price" required /><br /></div><!-- /.form-group -->
			<div class="form-group">
            
            <div class="form-group">
            <label for="country_id">Pais:</label>
            <select class="form-control" id="country_id" name="country_id" />
            <?php foreach($paises as $pais):?>
            <option value="<?php echo $pais["country_id"]?>"><?php echo $pais["country_name"];?></option>
            <?php endforeach;?>
            </select><br /><br />
           <!--   <input type="text" class="form-control" id="country_id" name="country_id" /><br />-->
            </div><!-- /.form-group -->
             
			<div class="form-group">
            <label for="province_id">Provincia:</label>
             <select class="form-control" id="province_id" name="province_id" />
            <?php foreach($provincias as $provincia):?>
            <option value="<?php echo $provincia["province_id"]?>"><?php echo $provincia["province_name"];?></option>
            <?php endforeach;?>
            </select><br /><br />
            
            <div class="form-group">
            <label for="sector_id">Sector:</label>
            
             <select class="form-control" id="sector_id" name="sector_id" />
            <?php foreach($sectores as $sector):?>
            <option value="<?php echo $sector["sector_id"]?>"><?php echo $sector["sector_name"];?></option>
            <?php endforeach;?>
            </select><br />
            <br /></div><!-- /.form-group -->
            
            <label for="address">Direccion:</label><input type="text" class="form-control" id="address" name="address" required /><br /></div><!-- /.form-group -->
			<div class="form-group">
            <label for="number">Numero:</label><input type="text" class="form-control" id="number" name="number" /><br /></div><!-- /.form-group -->
			<div class="form-group">
            <label for="bulding">Edificio:</label><input type="text" class="form-control" id="building" name="building" /><br /></div><!-- /.form-group -->
		
			<div class="form-group">
            <label for="bedrooms"># Banos:</label><input type="text" class="form-control" id="bedrooms" name="bedrooms" /><br /></div><!-- /.form-group -->
			<div class="form-group">
            <label for="bathrooms"># Habitaciones:</label><input type="text" class="form-control" id="bathrooms" name="bathrooms" /><br /></div><!-- /.form-group -->
			<div class="form-group">
            <label for="parking_slots"># Parqueos:</label><input type="text" class="form-control" id="parking_slots" name="parking_slots" /><br /></div><!-- /.form-group -->
			<div class="form-group">
            <label for="construction_status">Estado de la Construccion:</label>
            
            <select class="form-control" id="construction_status" name="construction_status" />
            
            <option value="nueva">Nueva</option>
            <option value="construccion">Construccion</option>
            <option value="remodelada">Remodelada</option>
            <option value="segundo uso">Segundo Uso</option>
       
            </select><br />
            
            <br /></div><!-- /.form-group -->
			<div class="form-group">
            <label for="level">Nivel:</label><input type="text" class="form-control" id="level" name="level" /><br /></div><!-- /.form-group -->
			<div class="form-group">
            <label for="plot_area">Area Solar:</label><input type="text" class="form-control" id="plot_area" name="plot_area" required /><br /></div><!-- /.form-group -->
            <div class="form-group">
            <label for="plot_area">Area Construccion:</label>
    
            <input type="text" class="form-control" id="construction_area" name="construction_area" required />
            
            <br /></div><!-- /.form-group -->
            </section><!-- /#basic-information -->

                             

                                <section class="block" id="gallery">
                                    <header><h2>Galeria de imagenes</h2></header>
                                    <div class="center">
                                        <div class="form-group">
                                        
                                            <input id="file-upload" name="imagenes[]" type="file" class="file" multiple="true" data-show-upload="false" data-show-caption="false" data-show-remove="false" accept="image/jpeg,image/png" data-browse-class="btn btn-default" data-browse-label="Cargar Imagenes">
                                            <figure class="note"><strong>Hint:</strong> Tu puedes cargar todas las images al mismo tiempo!</figure>
                                        </div>
                                    </div>
                                </section>
                              
                              <section class="block">
                              <header><h2>Busca la ubicacion de tu propiedad en el mapa</h2></header>
                              <div id="map" style="width: 900px; height: 500px"></div>
                              <br />

	<div class="form-group">
            <label for="latitud">Latitud:</label>  <input name="latitude" type="text" size="20" class="form-control" /></div>
	<div class="form-group">
            <label for="longitud">Longitud:</label> <input name="longitude" type="text" size="20" class="form-control" /></div>
                              </section>
								
                                <section id="property-features" class="block">
                                    <section>
                                        <header><h2>Amenidades</h2></header>
                                        <ul class="submit-features">
                                        <?php foreach($features as $feature): ?>
                                            <li><div class="checkbox"><label><input type="checkbox" name="features[]" value="<?php echo $feature['feature_id']?>"><?php echo $feature["feature_name"]?></label></div></li>
                                         <?php endforeach;?>
                                        </ul>
                                    </section>
                                </section>
                                
                                <hr>
                            </section>
                        </div><!-- /.col-md-9 -->
                      
                    
                </div><!-- /.row -->
                <div class="row">
                    <div class="block">
      
                    </div>
                    
                    
                        <div class="col-md-9 col-sm-9">
                            <div class="center">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default large">Guardar Propiedad</button>
                                </div><!-- /.form-group -->
                                
                            </div>
                        </div>
                       
                    </div>
                </div>
            </form><!-- /#form-submit -->
        </div><!-- /.container -->
    </div>
    <!-- end Page Content -->
    <!-- Page Footer -->
    <?php require_once 'footer.php';?>
    <!-- end Page Footer -->
</div>

<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/markerwithlabel_packed.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/smoothscroll.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/icheck.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/fileinput.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/custom-map.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/custom.js"></script>
<!--[if gt IE 8]>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/ie.js"></script>
<![endif]-->
</body>
</html>