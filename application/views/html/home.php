<!DOCTYPE html>

<html lang="en-US">
<head>
<?php require_once 'header.php';?>

    <title>Zoner</title>

</head>

<bodypage-homepage navigation-fixed-top map-google" id="page-top" data-spy="scroll" data-target=".navigation" data-offset="90">
<!-- Wrapper -->
<div class="wrapper">
<?php require_once 'navigation.php';?>
    

    <div class="container">
        <div class="geo-location-wrapper">
            <span class="btn geo-location"><i class="fa fa-map-marker"></i><span class="text">Find My Position</span></span>
        </div>
    </div>

    <!-- Map -->
    <div id="map" class="has-parallax"></div>
    <!-- end Map -->

    <!-- Search Box -->
    <div class="search-box-wrapper">
        <div class="search-box-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4">
                        <div class="search-box map">
                            <form role="form" id="" action="http://localhost/php/realstate/index.php/propiedades/" method="post" class="form-map form-search" name="form_buscar">
                                <h2>Busca Tu Propiedad</h2>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="search-box-property-id" placeholder="Propiedad ID">
                                </div>
                                <div class="form-group">
                                    <select name="mode">
                                        <option value="">Modo</option>
                                        <option value="1">Alquiler</option>
                                        <option value="2">Venta</option>
                                    </select>
                                </div><!-- /.form-group -->
                                
                                <div class="form-group">
                                    <select name="type">
                                        <option value="">Tipo de Propiedad</option>
                                        <option value="1">Apartamentos</option>
                                        <option value="2">Casas</option>
                                        <option value="3">Edificios</option>
                                        <option value="4">Oficinas</option>
                                        <option value="5">Finacas / Terrenos</option>
                                        <option value="6">Villas</option>
                                     
                                    </select>
                                </div><!-- /.form-group -->
                               
                                <div class="form-group">
                                    <input type="text" class="form-control" id="price_from" name="price_from" placeholder="Precio Desde">
                                </div>
                                 <div class="form-group">
                                    <input type="text" class="form-control" id="price_to"  name="price_to" placeholder="Precio Hasta">
                                </div>
                                <div class="form-group">
                                    <select name="country">
                                        <option value="">Pais</option>
                                        
                                        <option value="5">Republica Dominicana</option>
                                    </select>
                                </div><!-- /.form-group -->
                                 <div class="form-group">
                                    <select name="province">
                                        <option value="">Provincia</option>
                                        
                                        
                                    </select>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <select name="city">
                                        <option value="">Ciuadad</option>
                                        
                                    </select>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <select name="sector">
                                        <option value="">Sector</option>
                                        
                                    </select>
                                </div><!-- /.form-group -->
                             
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default">Buscar Ahora</button>
                                </div><!-- /.form-group -->
                            </form><!-- /#form-map -->
                        </div><!-- /.search-box.map -->
                    </div><!-- /.col-md-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.search-box-inner -->
    </div>
    <!-- end Search Box -->

    <!-- Page Content -->
    <div id="page-content">
        

        
        <section id="new-properties" class="block">
            <div class="container">
                <header class="section-title">
                    <h2>Nuevas Propiedades</h2>
                   
                </header>
                <div class="row">
                    <?php foreach($propiedades as $propiedad):?>
                                            
                                            <div class="col-md-3 col-sm-6">
                                <div class="property equal-height">
                                    <a href="http://localhost/php/realstate/index.php/propiedades/mostrar/<?php echo $propiedad['property_id']?>">
                                        <div class="property-image">
                                            <img alt="" src="<?php echo base_url();?>uploads/<?php echo $propiedad['photo_path']?>">
                                        </div>
                                        <div class="overlay">
                                            <div class="info">
                                                <div class="tag price">RD$ <?php echo $propiedad["sale_price"];?></div>
                                                <h3><?php echo $propiedad["sector_name"];?></h3>
                                                <figure><?php echo $propiedad["province_name"];?></figure>
                                            </div>
                                            <ul class="additional-info">
                                                <li>
                                                    <header>Area:</header>
                                                    <figure><?php echo $propiedad["plot_area"];?>m<sup>2</sup></figure>
                                                </li>
                                                <li>
                                                    <header>Habts:</header>
                                                    <figure><?php echo $propiedad["bedrooms"];?></figure>
                                                </li>
                                                <li>
                                                    <header>Baños:</header>
                                                    <figure><?php echo $propiedad["bathrooms"];?></figure>
                                                </li>
                                                <li>
                                                    <header>Parqueos:</header>
                                                    <figure><?php echo $propiedad["parking_slots"];?></figure>
                                                </li>
                                            </ul>
                                        </div>
                                    </a>
                                </div><!-- /.property -->
                            </div><!-- /.col-md-3 -->
                            
                            <?php endforeach;?>
                </div><!-- /.row-->
            </div><!-- /.container-->
        </section><!-- /#new-properties-->
<!--
        <section id="testimonials" class="block">
            <div class="container">
                <header class="section-title"><h2>Testimonials</h2></header>
                <div class="owl-carousel testimonials-carousel">
                    <blockquote class="testimonial">
                        <figure>
                            <div class="image">
                                <img alt="" src="http://31.220.2.27/public/assets/img/client-01.jpg">
                            </div>
                        </figure>
                        <aside class="cite">
                            <p>Fusce risus metus, placerat in consectetur eu, porttitor a est sed sed dolor lorem cras adipiscing</p>
                            <footer>Natalie Jenkins</footer>
                        </aside>
                    </blockquote>
                    <blockquote class="testimonial">
                        <figure>
                            <div class="image">
                                <img alt="" src="http://31.220.2.27/public/assets/img/client-01.jpg">
                            </div>
                        </figure>
                        <aside class="cite">
                            <p>Fusce risus metus, placerat in consectetur eu, porttitor a est sed sed dolor lorem cras adipiscing</p>
                            <footer>Natalie Jenkins</footer>
                        </aside>
                    </blockquote>
                </div><!-- /.testimonials-carousel -->
<!--            
	</div>
        </section>
        <section id="partners" class="block">
            <div class="container">
                <header class="section-title"><h2>Our Partners</h2></header>
                <div class="logos">
                    <div class="logo"><a href=""><img src="http://31.220.2.27/public/assets/img/logo-partner-01.png" alt=""></a></div>
                    <div class="logo"><a href=""><img src="http://31.220.2.27/public/assets/img/logo-partner-02.png" alt=""></a></div>
                    <div class="logo"><a href=""><img src="http://31.220.2.27/public/assets/img/logo-partner-03.png" alt=""></a></div>
                    <div class="logo"><a href=""><img src="http://31.220.2.27/public/assets/img/logo-partner-04.png" alt=""></a></div>
                    <div class="logo"><a href=""><img src="http://31.220.2.27/public/assets/img/logo-partner-05.png" alt=""></a></div>
                </div>
            </div><!-- /.container -->
        <!--</section><!-- /#partners -->
    </div>
    <!-- end Page Content -->
    <!-- Page Footer -->
    <?php require_once 'footer.php';?>
    <!-- end Page Footer -->
</div>

<div id="overlay"></div>

<script type="text/javascript" src="http://31.220.2.27/public/assets/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="http://31.220.2.27/public/assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="http://31.220.2.27/public/assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://31.220.2.27/public/assets/js/smoothscroll.js"></script>
<script type="text/javascript" src="http://31.220.2.27/public/assets/js/markerwithlabel_packed.js"></script>
<script type="text/javascript" src="http://31.220.2.27/public/assets/js/infobox.js"></script>
<script type="text/javascript" src="http://31.220.2.27/public/assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="http://31.220.2.27/public/assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="http://31.220.2.27/public/assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="http://31.220.2.27/public/assets/js/jquery.placeholder.js"></script>
<script type="text/javascript" src="http://31.220.2.27/public/assets/js/icheck.min.js"></script>
<script type="text/javascript" src="http://31.220.2.27/public/assets/js/jquery.vanillabox-0.1.5.min.js"></script>
<script type="text/javascript" src="http://31.220.2.27/public/assets/js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="http://31.220.2.27/public/assets/js/jshashtable-2.1_src.js"></script>
<script type="text/javascript" src="http://31.220.2.27/public/assets/js/jquery.numberformatter-1.2.3.js"></script>
<script type="text/javascript" src="http://31.220.2.27/public/assets/js/tmpl.js"></script>
<script type="text/javascript" src="http://31.220.2.27/public/assets/js/jquery.dependClass-0.1.js"></script>
<script type="text/javascript" src="http://31.220.2.27/public/assets/js/draggable-0.1.js"></script>
<script type="text/javascript" src="http://31.220.2.27/public/assets/js/jquery.slider.js"></script>
<script type="text/javascript" src="http://31.220.2.27/public/assets/js/markerclusterer_packed.js"></script>
<script type="text/javascript" src="http://31.220.2.27/public/assets/js/custom-map.js"></script>
<script type="text/javascript" src="http://31.220.2.27/public/assets/js/custom.js"></script>
<!--[if gt IE 8]>
<script type="text/javascript" src="http://31.220.2.27/public/assets/js/ie.js"></script>
<![endif]-->
<script>
_latitude = 18.539577732352203;
_longitude =  -69.8833465576171 ;
    //_latitude = 48.87;
    //_longitude = 2.29;
    createHomepageGoogleMap(_latitude,_longitude);
</script>
</body>
</html>

