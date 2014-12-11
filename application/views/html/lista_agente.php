<!DOCTYPE html>

<html lang="en-US">
<head>
   <?php require_once 'header.php';?>

    <title>Zoner | Agents Listing</title>

</head>

<body class="page-sub-page page-agents-listing" id="page-top">
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
                <li><a href="#">Inicion</a></li>
                <li><a href="#">Agentes</a></li>
                <li class="active">Listado Agentes</li>
            </ol>
        </div>
        <!-- end Breadcrumb -->

        <div class="container">
            <div class="row">
                <!-- Agent Detail -->
                <div class="col-md-9 col-sm-9">
                    <section id="agents-listing">
                        <header><h1>Listado de Agentes</h1></header>
                        <div class="row">
                        <?php foreach($agentes as $agente):?>
                            <div class="col-md-12 col-lg-6">
                                <div class="agent">
                                    <a href="http://localhost/php/realstate/index.php/agentes/mostrar_agente/<?php echo $agente['user_id'];?>" class="agent-image"><img alt="" src="<?php echo base_url();?>application/public/assets/img/agent-01.jpg"></a>
                                    <div class="wrapper">
                                        <header><a href="http://localhost/php/realstate/index.php/agentes/mostrar_agente/<?php echo $agente['user_id'];?>"><h2><?php echo $agente["full_name"];?></h2></a></header>
                                        <aside># Propiedades</aside>
                                        <dl>
                                            <dt>Telefono:</dt>
                                            <dd><?php echo $agente["phone_1"];?></dd>
                                            <dt>Celular:</dt>
                                            <dd><?php echo $agente["cell_phone"];?></dd>
                                            <dt>Correo:</dt>
                                            <dd><a href="mailto:#"><?php echo $agente["email"];?></a></dd>
                                            <!--<dt>Skype:</dt>
                                            <dd>john.doe</dd>-->
                                        </dl>
                                    </div>
                                </div><!-- /.agent -->
                            </div><!-- /.col-md-12 -->
                            <?php endforeach;?>
               
                        </div><!-- /.row -->
                    </section><!-- /#agents-listing -->
                    <!-- Pagination -->
                    <div class="center">
                         <div><?php echo $pagination;?></div>
                    </div><!-- /.center-->
                </div><!-- /.col-md-9 -->
                <!-- end Agent Detail -->

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