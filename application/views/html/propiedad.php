<!DOCTYPE html>

<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ThemeStarz">
	<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url();?>application/public/assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>application/public/assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>application/public/assets/css/bootstrap-select.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>application/public/assets/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>application/public/assets/css/jquery.slider.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>application/public/assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>application/public/assets/css/style.css" type="text/css">

    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
    
    function init(){

        <?php 
        $latitude = '';
        $longitude = '';
        
        foreach($locations as $location){
        	
        	$latitude = $location["latitude"];
        	$longitude = $location["longitude"];
        }
        
        
        ?>

    	var pointx = <?php echo $latitude;?>;
    	var pointy = <?php echo $longitude;?>;
    	//Variable que contiene el punto de la latitud y longitud
    	var posicion = new google.maps.LatLng(pointx, pointy);

    	
    	//Opciones del mapa
    	var mapOptions ={
    		zoom: 16,
    		center : posicion,
    		mapTypeId: google.maps.MapTypeId.ROADMAP,
    		//styles: mapStyles
    	};
    	
    	//Contenedor DIV del mapa
    	var display = document.getElementById("map");
    	
    	//Creacion del Mapa
    	var map = new google.maps.Map(display,mapOptions);
    	
    	//Marca 1
    	var marker1 = new google.maps.Marker({
    		position: posicion,
    		map : map,
    		title : 'Republica Dominicana'
    		
    	});
    	
    	//Vetana de informacion 1 InfoWindow
    	
    	var infowindow1 = new google.maps.InfoWindow({
    		content : pointx+", "+pointy
    	});
    	
    	//Evento click del Marker 1
    	
    	//google.maps.event.addListener(marker1,'click',function(){
    		//infowindow1.open(map,marker1);    		
    	//});
    	    	
    }
      
    </script>

    <title>Zoner | Property Detail</title>
    
    
</head>

<body class="page-sub-page page-property-detail" id="page-top" onload="init();">
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
                <li><a href="#">Home</a></li>
                <li class="active">Property Detail</li>
            </ol>
        </div>
        <!-- end Breadcrumb -->

        <div class="container">
            <div class="row">
                <!-- Property Detail Content -->
                <div class="col-md-9 col-sm-9">
                    <section id="property-detail">
                        <header class="property-title">
                        <?php foreach($propiedad as $datos):?>
                            <h1><?php echo $datos["sector_name"];?></h1>
                            <figure><?php echo $datos["province_name"];?></figure>
                         <?php endforeach;?>
                            <span class="actions">
                                <!--<a href="#" class="fa fa-print"></a>-->
                                <a href="#" class="bookmark" data-bookmark-state="empty"><span class="title-add">Add to bookmark</span><span class="title-added">Added</span></a>
                            </span>
                        </header>
                        <section id="property-gallery">
                            <div class="owl-carousel property-carousel">
                            <?php foreach($fotos as $foto):?>
                                <div class="property-slide">
                                    <a href="<?php echo base_url();?>application/public/assets/img/properties/<?php echo $foto['photo_path'];?>" class="image-popup">
                                        <div class="overlay"><h3></h3></div>
                                        <img alt="" src="<?php echo base_url();?>uploads/<?php echo $foto['photo_path'];?>">
                                    </a>
                                </div><!-- /.property-slide -->
                                <?php endforeach;?>
                                
                            </div><!-- /.property-carousel -->
                        </section>
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <section id="quick-summary" class="clearfix">
                                    <header><h2>Informacion Propiedad</h2></header>
                                    <dl>
                                    <?php foreach($propiedad as $datos):?>
                                        <dt>Ubicacion</dt>
                                            <dd><?php echo $datos["province_name"];?>, <?php echo $datos["sector_name"];?></dd>
                                        <dt>Direccion</dt>
                                            <dd><?php echo $datos["address"];?></dd>
                                         <dt>Numero</dt>
                                            <dd><?php echo $datos["number"];?></dd>
                                         <dt>Edificion</dt>
                                            <dd><?php echo $datos["building"];?></dd>
                                          <dt>Nivel</dt>
                                            <dd><?php echo $datos["level"];?></dd>   
                                          
                                        <dt>Precio Venta</dt>
                                            <dd><span class="tag price">RD$ <?php echo $datos["sale_price"];?></span></dd>
                                         <dt>Precio Alquiler</dt>
                                            <dd><span class="tag price">RD$ <?php echo $datos["rental_price"];?></span></dd>
                                         <dt>Precio Alquiler Amueblado</dt>
                                            <dd><span class="tag price">RD$ <?php echo $datos["furnished_rental_price"];?></span></dd>
                                        
                                        <dt>Tipo de Propiedad:</dt>
                                            <dd><?php echo $datos["type"];?></dd>
                                        <dt>Modo:</dt>
                                            <dd><?php echo $datos["mode"];?></dd>
                                        <dt>Area Solar:</dt>
                                            <dd><?php echo $datos["plot_area"];?> m<sup>2</sup></dd>
                                        <dt>Area Construccion:</dt>
                                            <dd><?php echo $datos["construction_area"];?> m<sup>2</sup></dd>
                                        <dt>Habitaciones:</dt>
                                            <dd><?php echo $datos["bedrooms"];?></dd>
                                        <dt>Banos:</dt>
                                            <dd><?php echo $datos["bathrooms"];?></dd>
                                        <dt>Parqueos:</dt>
                                            <dd><?php echo $datos["parking_slots"];?></dd>
                           
                                        <?php endforeach;?>
                                    </dl>
                                </section><!-- /#quick-summary -->
                            </div><!-- /.col-md-4 -->
                            <div class="col-md-8 col-sm-12">
                                <section id="description">
                                    <header><h2>Descripcion de la Propiedad</h2></header>
                                    
                                    <?php foreach($propiedad as $datos):?>
                                    <p><?php echo $datos["general_description"];?></p>
                                     <?php endforeach;?>   
                                    
                                </section><!-- /#description -->
                                <section id="property-features">
                                    <header><h2>Amenidades</h2></header>
                                    <ul class="list-unstyled property-features-list">
                                        <?php foreach($features as $feature):?>
                                        <li><?php echo $feature["feature_name"]; ?></li>
                                        <?php endforeach;?>
                                        
                                    </ul>
                                </section><!-- /#property-features -->
                                
                                <section id="floor-plans">
                                    <div class="floor-plans">
                                        <header><h2>Planos</h2></header>
                                        <a href="<?php echo base_url();?>application/public/assets/img/properties/plano.jpg" class="image-popup"><img alt="" src="<?php echo base_url();?>application/public/assets/img/properties/plano.jpg" width="200" height="200"></a>
                                        
                                    </div>
                                </section><!-- /#floor-plans -->
                                

                                
                                
                                <section id="property-map">
                                    <header><h2>Mapa</h2></header>
                                    <div class="property-detail-map-wrapper">
                                        <div class="property-detail-map" id="map" style="width: 500px; height: 300px"></div>
                                    </div>
                                </section>
                                
                                <!-- /#property-map -->
                            
                               
                            </div><!-- /.col-md-8 -->
                            <div class="col-md-12 col-sm-12">
                                <section id="contact-agent">
                                    <header><h2>Contactar Vendedor</h2></header>
                                    
                                    <div class="row">
                                    <?php foreach($propiedad as $datos):?>
                                        <section class="agent-form">
                                            <div class="col-md-7 col-sm-12">
                                                <aside class="agent-info clearfix">
                                                    <figure><a href="http://localhost/php/realstate/index.php/agentes/mostrar_agente/<?php echo $datos['user_id'];?>"><img alt="" src="<?php echo base_url();?>application/public/assets/img/agent-01.jpg"></a></figure>
                                                    <div class="agent-contact-info">
                                                        <h3><?php echo $datos["full_name"];?></h3>
                                                        <p>
                                                            
                                                        </p>
                                                        <dl>
                                                            <dt>Telefono:</dt>
                                                            <dd><?php echo $datos["phone_1"];?></dd>
                                                            <dt>Celular:</dt>
                                                            <dd><?php echo $datos["cell_phone"];?></dd>
                                                            <dt>Correo:</dt>
                                                            <dd><a href="mailto:#"><?php echo $datos["email"];?></a></dd>
                                                            <!--<dt>Skype:</dt>
                                                            <dd>john.doe</dd>-->
                                                        </dl>
                                                        <hr>
                                                       <!-- <a href="agent-detail.html" class="link-arrow">Full Profile</a>-->
                                                    </div>
                                                </aside><!-- /.agent-info -->
                                            </div><!-- /.col-md-7 -->
                                           
                                            <div class="col-md-5 col-sm-12">
                                                <div class="agent-form">
                                                    <form role="form" id="form-contact-agent" method="post" action="" class="clearfix">
                                                        <div class="form-group">
                                                            <label for="form-contact-agent-name">Nombre<em>*</em></label>
                                                            <input type="text" class="form-control" id="form-contact-agent-name" name="form-contact-agent-name" >
                                                        </div><!-- /.form-group -->
                                                        <div class="form-group">
                                                            <label for="form-contact-agent-email">Correo<em>*</em></label>
                                                            <input type="email" class="form-control" id="form-contact-agent-email" name="form-contact-agent-email" >
                                                        </div><!-- /.form-group -->
                                                        <div class="form-group">
                                                            <label for="form-contact-agent-message">Mensaje<em>*</em></label>
                                                            <textarea class="form-control" id="form-contact-agent-message" rows="2" name="form-contact-agent-message" ></textarea>
                                                        </div><!-- /.form-group -->
                                                        <div class="form-group">
                                                            <button type="submit" class="btn pull-right btn-default" id="form-contact-agent-submit">Enviar Mensaje</button>
                                                        </div><!-- /.form-group -->
                                                        <div id="form-contact-agent-status"></div>
                                                    </form><!-- /#form-contact -->
                                                </div><!-- /.agent-form -->
                                            </div><!-- /.col-md-5 -->
                                        </section><!-- /.agent-form -->
                                        <?php endforeach;?>
                                    </div><!-- /.row -->
                                </section><!-- /#contact-agent -->
                               <!--  <hr class="thick">
                                <section id="similar-properties">
                                    <header><h2 class="no-border">Propiedades Similares</h2></header>
                                   <!-- <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="property">
                                                <a href="property-detail.html">
                                                    <div class="property-image">
                                                        <img alt="" src="<?php echo base_url();?>application/public/assets/img/properties/property-06.jpg">
                                                    </div>
                                                    <div class="overlay">
                                                        <div class="info">
                                                            <div class="tag price">$ 11,000</div>
                                                            <h3>3398 Lodgeville Road</h3>
                                                            <figure>Golden Valley, MN 55427</figure>
                                                        </div>
                                                        <ul class="additional-info">
                                                            <li>
                                                                <header>Area:</header>
                                                                <figure>240m<sup>2</sup></figure>
                                                            </li>
                                                            <li>
                                                                <header>Beds:</header>
                                                                <figure>2</figure>
                                                            </li>
                                                            <li>
                                                                <header>Baths:</header>
                                                                <figure>2</figure>
                                                            </li>
                                                            <li>
                                                                <header>Garages:</header>
                                                                <figure>0</figure>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div><!-- /.property -->
                                       <!-- </div><!-- /.col-md-3 -->
                                       <!-- <div class="col-md-4 col-sm-6">
                                            <div class="property">
                                                <a href="property-detail.html">
                                                    <div class="property-image">
                                                        <img alt="" src="<?php echo base_url();?>application/public/assets/img/properties/property-04.jpg">
                                                    </div>
                                                    <div class="overlay">
                                                        <div class="info">
                                                            <div class="tag price">$ 38,000</div>
                                                            <h3>2186 Rinehart Road</h3>
                                                            <figure>Doral, FL 33178 </figure>
                                                        </div>
                                                        <ul class="additional-info">
                                                            <li>
                                                                <header>Area:</header>
                                                                <figure>240m<sup>2</sup></figure>
                                                            </li>
                                                            <li>
                                                                <header>Beds:</header>
                                                                <figure>3</figure>
                                                            </li>
                                                            <li>
                                                                <header>Baths:</header>
                                                                <figure>1</figure>
                                                            </li>
                                                            <li>
                                                                <header>Garages:</header>
                                                                <figure>1</figure>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div><!-- /.property -->
                                       <!-- </div><!-- /.col-md-3 -->
                                      <!--  <div class="col-md-4 col-sm-6">
                                            <div class="property">
                                                <a href="property-detail.html">
                                                    <div class="property-image">
                                                        <img alt="" src="<?php echo base_url();?>application/public/assets/img/properties/property-07.jpg">
                                                    </div>
                                                    <div class="overlay">
                                                        <div class="info">
                                                            <div class="tag price">$ 325,000</div>
                                                            <h3>3705 Brighton Circle Road</h3>
                                                            <figure>Glenwood, MN 56334</figure>
                                                        </div>
                                                        <ul class="additional-info">
                                                            <li>
                                                                <header>Area:</header>
                                                                <figure>240m<sup>2</sup></figure>
                                                            </li>
                                                            <li>
                                                                <header>Beds:</header>
                                                                <figure>3</figure>
                                                            </li>
                                                            <li>
                                                                <header>Baths:</header>
                                                                <figure>1</figure>
                                                            </li>
                                                            <li>
                                                                <header>Garages:</header>
                                                                <figure>1</figure>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div><!-- /.property -->
                                       <!-- </div><!-- /.col-md-3 -->
                                   <!-- </div><!-- /.row-->
                              <!--  </section><!-- /#similar-properties -->
                               <!--   <hr class="thick">-->
                                
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->
                    </section><!-- /#property-detail -->
                </div><!-- /.col-md-9 -->
                <!-- end Property Detail Content -->

                <!-- sidebar -->
                <?php require_once 'side.php';?>
                <!-- end Sidebar -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- end Page Content -->
    <!-- Page Footer -->
<?php require_once 'footer.php';?>
    <!-- end Page Footer -->
</div>

<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/smoothscroll.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/markerwithlabel_packed.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/infobox.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/jquery.placeholder.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/icheck.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/jquery.raty.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/jshashtable-2.1_src.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/jquery.numberformatter-1.2.3.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/tmpl.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/jquery.dependClass-0.1.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/draggable-0.1.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/jquery.slider.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/custom-map.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/custom.js"></script>
<!--[if gt IE 8]>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/ie.js"></script>
<![endif]-->
<script type="text/javascript">
    var propertyId = 0;
    google.maps.event.addDomListener(window, 'load', initMap(propertyId));
</script>

</body>
</html>