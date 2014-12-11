<!DOCTYPE html>

<html lang="en-US">
<head>
   <?php require_once 'header.php';?>

    <title>Contacto</title>

</head>

<body class="page-sub-page page-contact" id="page-top">
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
                <li class="active">Contacto</li>
            </ol>
        </div>
        <!-- end Breadcrumb -->

        <div class="container">
            <div class="row">
                <!-- Contact -->
                <div class="col-md-9 col-sm-9">
                    <section id="agent-detail">
                        <header><h1>Contactanos</h1></header>
                        <section id="contact-information">
                            <div class="row">
                                <div class="col-md-4 col-sm-5">
                                    <section id="address">
                                        <header><h3>Direccion</h3></header>
                                        <address>
                                            <strong>Compania</strong><br>
                                            Calle #<br>
                                            Ciudad
                                        </address>
                                        (809) 000-0000<br>
                                        <a href="#">correo@example.com</a><br>
                                        
                                    </section><!-- /#address -->
                                    <section id="social">
                                        <header><h3>Redes Sociales</h3></header>
                                        <div class="agent-social">
                                            <a href="#" class="fa fa-twitter btn btn-grey-dark"></a>
                                            <a href="#" class="fa fa-facebook btn btn-grey-dark"></a>
                                            <a href="#" class="fa fa-linkedin btn btn-grey-dark"></a>
                                        </div>
                                    </section><!-- /#social -->
                                </div><!-- /.col-md-4 -->
                                <!--
                                <div class="col-md-8 col-sm-7">
                                    <header><h3>Donde Estamos Ubicados</h3></header>
                                    <div id="contact-map"></div>
                                </div><!-- /.col-md-8 -->
                                
                            </div><!-- /.row -->
                        </section><!-- /#agent-info -->
                        <hr class="thick">
                        <section id="form">
                            <header><h3>Formulario de Contacto</h3></header>
                            <div class="agent-form">
                                <form role="form" id="form-contact-agent" method="post" action="http://localhost/php/realstate/index.php/contacto/enviar" class="clearfix">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form-contact-agent-name">Nombre<em>*</em></label>
                                                <input type="text" class="form-control" id="form-contact-agent-name" name="name" required>
                                            </div><!-- /.form-group -->
                                        </div><!-- /.col-md-6 -->
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form-contact-agent-email">Correo<em>*</em></label>
                                                <input type="email" class="form-control" id="form-contact-agent-email" name="email" required>
                                            </div><!-- /.form-group -->
                                            
                                        </div><!-- /.col-md-6 -->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form-contact-agent-name">Asunto<em>*</em></label>
                                                <input type="text" class="form-control" id="form-contact-agent-name" name="subject" required>
                                            </div><!-- /.form-group -->
                                        </div><!-- /.col-md-6 -->
                                    </div><!-- /.row -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="form-contact-agent-message">Mensaje<em>*</em></label>
                                                <textarea class="form-control" id="form-contact-agent-message" name="message" rows="8" name="form-contact-agent-message" required></textarea>
                                            </div><!-- /.form-group -->
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->
                                    <div class="form-group clearfix">
                                        <button type="submit" class="btn pull-right btn-default" id="form-contact-agent-submit">Send a Message</button>
                                    </div><!-- /.form-group -->
                                    <div id="form-rating-status"></div>
                                </form><!-- /#form-contact -->
                            </div><!-- /.rating-form -->
                        </section>
                    </section><!-- /#agent-detail -->
                </div><!-- /.col-md-9 -->
                <!-- end Contact -->

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
<script>
    _latitude = 48.87;
    _longitude = 2.29;
    google.maps.event.addDomListener(window, 'load', contactUsMap(_latitude,_longitude));
</script>
</body>
</html>