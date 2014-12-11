<!DOCTYPE html>

<html lang="en-US">
<head>
    <?php require_once 'header.php';?>
   
    <title>TEST IMAGEN</title>

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
       
            <form role="form" name="latlong" id="form-submit" class="form-submit"  method="post" action="http://localhost/php/realstate/index.php/home/imagen" enctype="multipart/form-data">
                <div class="row">
                    <div class="block">
                        <div class="col-md-6 col-sm-6">
                            <section id="submit-form">
                                <section id="basic-information">
              
                                <section class="block" id="gallery">
                                    <header><h2>Cargar Fotos de Propiedad</h2></header>
                                    <div class="center">
                                        <div class="form-group">
                                        
                                            <input id="file-upload" name="imagenes[]" type="file" class="file" multiple="true" data-show-upload="false" data-show-caption="false" data-show-remove="false" accept="image/jpeg,image/png" data-browse-class="btn btn-default" data-browse-label="Cargar Imagenes">
                                            <figure class="note"><strong>Hint:</strong> Tu puedes cargar todas las images al mismo tiempo!</figure>
                                        </div>
                                    </div>
                                </section>
                                
                                 <section class="block" id="gallery">
                                    <header><h2>Cargar Fotos de Planos</h2></header>
                                    <div class="center">
                                        <div class="form-group">
                                        
                                            <input id="file-upload" name="planos[]" type="file" class="file" multiple="true" data-show-upload="false" data-show-caption="false" data-show-remove="false" accept="image/jpeg,image/png" data-browse-class="btn btn-default" data-browse-label="Cargar Imagenes">
                                            <figure class="note"><strong>Hint:</strong> Tu puedes cargar todas las images al mismo tiempo!</figure>
                                        </div>
                                    </div>
                                </section>
                              
                              
                                </section>
                                
                                <hr>
                            </section>
                        </div><!-- /.col-md-9 -->
                      
                    
                </div><!-- /.row -->
                <div class="row">
                    <div class="block">
                    
                    
                    
	</form>
	
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