<!DOCTYPE html>

<html lang="en-US">
<head>
    <?php require_once 'header.php';?>

    <title>Zoner | Detalle de Agente</title>

</head>

<body class="page-sub-page page-agent-detail" id="page-top">
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
                <li><a href="#">Agentes</a></li>
                <li class="active">Detalle Agente</li>
            </ol>
        </div>
        <!-- end Breadcrumb -->

        <div class="container">
            <div class="row">
            <?php foreach($agente as $a):?>
                <!-- Agent Detail -->
                <div class="col-md-9 col-sm-9">
                    <section id="agent-detail">
                    
                        <header><h1><?php echo $a["full_name"];?></h1></header>
                        <section id="agent-info">
                            <div class="row">
                                <div class="col-md-3 col-sm-3">
                                    <figure class="agent-image"><img alt="" src="<?php echo base_url();?>application/public/assets/img/agent-01.jpg"></figure>
                                </div><!-- /.col-md-3 -->
                                
                                <div class="col-md-5 col-sm-5">
                                    <h3>Informacion de Contacto</h3>
                                    <dl>
                                        <dt>Telefono:</dt>
                                            <dd><?php echo $a["phone_1"];?></dd>
                                            <dt>Celular:</dt>
                                            <dd><?php echo $a["cell_phone"];?></dd>
                                            <dt>Correo:</dt>
                                            <dd><a href="mailto:#"><?php echo $a["email"];?></a></dd>
                                            <!--<dt>Skype:</dt>
                                            <dd>john.doe</dd>-->
                                    </dl>
                                </div><!-- /.col-md-5 -->
                                
                            </div><!-- /.row -->
                            <div class="row">
                                <div class="col-md-offset-3 col-md-5 col-sm-offset-3 col-sm-5">
                                    <h3>Agency</h3>
                                    <a href="agency-detail.html" class="agency-logo"><img alt="" src="<?php echo base_url();?>application/public/assets/img/agency-logo-01.png"></a>
                                </div><!-- /.col-md-5 -->
                                <?php endforeach;?>
                            </div><!-- /.row -->
                        </section><!-- /#agent-info -->
                        <hr class="thick">
                        <section id="agent-properties">
                            <header><h3>Mis Propiedades (<?php echo $a["total"];?>)</h3></header>
                            <div class="">
                                <div class="row">
                                <?php foreach($agente_propiedades as $propiedades):?>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="property">
                                            <a href="<?php echo base_url();?>index.php/propiedades/mostrar/<?php echo $propiedades['property_id']?>">
                                                <div class="property-image">
                                                    <img alt="" src="<?php echo base_url();?>application/public/assets/img/properties/<?php echo $propiedades["photo_path"];?>">
                                                </div>
                                                <div class="overlay">
                                                    <div class="info">
                                                        <div class="tag price"><?php echo $propiedades["sale_price"];?></div>
                                                        <h3><?php echo $propiedades["address"];?></h3>
                                                        <figure><?php echo $propiedades["province_name"];?></figure>
                                                    </div>
                                                    <ul class="additional-info">
                                                        <li>
                                                            <header>Area:</header>
                                                            <figure><?php echo $propiedades["plot_area"];?><sup>2</sup></figure>
                                                        </li>
                                                        <li>
                                                            <header>Beds:</header>
                                                            <figure><?php echo $propiedades["bedrooms"];?></figure>
                                                        </li>
                                                        <li>
                                                            <header>Baths:</header>
                                                            <figure><?php echo $propiedades["bathrooms"];?></figure>
                                                        </li>
                                                        <li>
                                                            <header>Garages:</header>
                                                            <figure><?php echo $propiedades["parking_slots"];?></figure>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </div><!-- /.property -->
                                    </div><!-- /.col-md-4 -->
                                    <?php endforeach;?>
                                    
                                    
                                    
                                </div><!-- /.row-->
                                
                                
                            </div>
                            
                        </section><!-- /#agent-properties -->
                        <hr class="thick">
                        <div class="row">
                   
                            <div class="col-md-7">
                                <h3>Enviar Mensaje</h3>
                                <div class="agent-form">
                                    <form role="form" id="form-contact-agent" method="post" action="" class="clearfix">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form-contact-agent-name">Nombre<em>*</em></label>
                                                    <input type="text" class="form-control" id="form-contact-agent-name" name="form-contact-agent-name" required>
                                                </div><!-- /.form-group -->
                                            </div><!-- /.col-md-6 -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form-contact-agent-email">Correo<em>*</em></label>
                                                    <input type="email" class="form-control" id="form-contact-agent-email" name="form-contact-agent-email" required>
                                                </div><!-- /.form-group -->
                                            </div><!-- /.col-md-6 -->
                                        </div><!-- /.row -->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="form-contact-agent-message">Mensaje<em>*</em></label>
                                                    <textarea class="form-control" id="form-contact-agent-message" rows="5" name="form-contact-agent-message" required></textarea>
                                                </div><!-- /.form-group -->
                                            </div><!-- /.col-md-12 -->
                                        </div><!-- /.row -->
                                        <div class="form-group clearfix">
                                            <button type="submit" class="btn pull-right btn-default" id="form-contact-agent-submit">Enviar Mensaje</button>
                                        </div><!-- /.form-group -->
                                        <div id="form-rating-status"></div>
                                    </form><!-- /#form-contact -->
                                </div><!-- /.rating-form -->
                            </div>
                        </div><!-- /.row -->
                    </section><!-- /#agent-detail -->
                </div><!-- /.col-md-9 -->
                <!-- end Agent Detail -->

                <!-- sidebar -->
                <div class="col-md-3 col-sm-3">
                    <section id="sidebar">
                        <aside id="edit-search">
                            <header><h3>Buscar Propiedades</h3></header>
                            <form role="form" id="form-sidebar" class="form-search" method="post" action="http://localhost/php/realstate/index.php/propiedades/">
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
                        </aside><!-- /#edit-search -->
                        
                    </section><!-- /#sidebar -->
                </div><!-- /.col-md-3 -->
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
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/icheck.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/jshashtable-2.1_src.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/jquery.numberformatter-1.2.3.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/tmpl.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/jquery.dependClass-0.1.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/draggable-0.1.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/jquery.slider.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/custom.js"></script>
<!--[if gt IE 8]>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/ie.js"></script>
<![endif]-->


</body>
</html>