<!DOCTYPE html>

<html lang="en-US">
<head>
    <?php require_once 'header.php';?>

    <title>Zoner | Lista de Propiedades</title>

</head>

<body class="page-sub-page page-listing page-grid page-search-results" id="page-top">
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
                <li class="active">Lista Propiedades</li>
            </ol>
        </div>
        <!-- end Breadcrumb -->

        <div class="container">
            <div class="row">
                <!-- Results -->
                <div class="col-md-9 col-sm-9">
                    <section id="results">
                        <header><h1>Agentes</h1></header>
                        
                        <section id="properties">
                        <div class="row">
        
                                            <?php foreach($agentes as $agente):?>
                                            
                                            <div class="col-md-4 col-sm-4">
                                <div class="property equal-height">
                                    <a href="#">
                                        <div class="property-image">
                                            <img alt="" src="<?php echo base_url();?>application/public/assets/img/users.png">
                                            <br />
                                            <p><?php echo $agente["full_name"];?></p>
                                        </div>
                               
                                    </a>
                                </div><!-- /.property -->
                            </div><!-- /.col-md-3 -->
                            
                            <?php endforeach;?>
                            
                        </div><!-- /.row-->
                        

                        <!-- Pagination -->
                        <div class="center">
                            <ul class="pagination">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                            </ul><!-- /.pagination-->
                        </div><!-- /.center-->

                        </section><!-- /#properties-->
                    </section><!-- /#results -->
                </div><!-- /.col-md-9 -->
                <!-- end Results -->

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