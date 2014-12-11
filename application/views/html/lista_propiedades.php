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
                        <header><h1>Lista de Propiedades</h1></header>
                        <section id="search-filter">
                            <figure><h3><i class="fa fa-search"></i>Resultado de propiedades:</h3>
                                <span class="search-count">(<?php echo $total_propiedades;?>)</span>
                                <div class="sorting">
                                    <div class="form-group">
                                        <select name="sorting">
                                            <option value="">Ordenar Por</option>
                                            <option value="1">Precio Menor</option>
                                            <option value="2">Precio Mayor</option>
                                            <option value="3">Fecha Agregado</option>
                                        </select>
                                    </div><!-- /.form-group -->
                                </div>
                            </figure>
                        </section>
                        <section id="properties">
                        <div class="row">
                                    <?php foreach($propiedades as $propiedad):?>
                                            
                                            <div class="col-md-4 col-sm-4">
                                <div class="property equal-height">
                                                          <a href="<?php echo base_url();?>index.php/propiedades/mostrar/<?php echo $propiedad['property_id']?>">
                                        <div class="property-image">
                                            <img alt="" src="<?php echo base_url();?>uploads/<?php echo $propiedad['photo_path']?>">
                                        </div>
                                        <div class="overlay">
                                            <div class="info">
                                                <div class="tag price">RD$ <?php echo number_format($propiedad["sale_price"]);?></div>
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
                        

                        <!-- Pagination -->
                        <div class="center">
                            
                                <div><?php echo $pagination;?></div>
                                
                           
                        </div><!-- /.center-->

                        </section><!-- /#properties-->
                    </section><!-- /#results -->
                </div><!-- /.col-md-9 -->
                <!-- end Results -->

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


</body>
</html>