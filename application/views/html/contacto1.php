<!DOCTYPE html>

<html lang="en-US">
<head>
<?php require_once 'header.php';?>

    <title>Zoner | Contacto</title>

</head>

<body class="page-sub-page page-sign-in page-account" id="page-top">
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
            <header><h1>Formulario de Contacto</h1></header>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                    <form role="form" id="form-submit" class="form-submit"  method="post" action="http://localhost/php/realstate/index.php/contacto/enviar" enctype="multipart/form-data">
                <div class="row">
                    <div class="block">
                        <div class="col-md-9 col-sm-3">
                            <section id="submit-form">
                                <section id="basic-information">
                  <?php if(isset($enviado)){?>	     
		<div class="form-group">
            <h3 style="color: green;"><?php echo $enviado; ?></h3>
          
            </div><!-- /.form-group -->	
<?php }?>
			
            <div class="form-group">
            <label for="country_id">Nombre:</label>
            <input type="text" class="form-control" id="name" name="name" /><br />
          
            </div><!-- /.form-group -->
            
             <div class="form-group">
            <label for="country_id">Correo:</label>
            <input type="text" class="form-control" id="email" name="email" /><br />
          
            </div><!-- /.form-group -->
			 <div class="form-group">
            <label for="country_id">Asunto:</label>
            <input type="text" class="form-control" id="subject" name="subject" /><br />
          
            </div><!-- /.form-group -->
            
            <div class="form-group">
            <label for="general_description">Comentario:</label><textarea id="message" name="message" cols="50" rows="5"></textarea><br /></div><!-- /.form-group -->
			
                      
                    </div>
                </div><!-- /.row -->
                <div class="row">
                    <div class="block">
                        <div class="col-md-9 col-sm-9">
                            <div class="center">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default large">Enviar</button>
                                </div><!-- /.form-group -->
                                
                            </div>
                        </div>
                       
                    </div>
                </div>
            </form><!-- /#form-submit -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    </div>
    <!-- end Page Content -->
    <!-- Page Footer -->
    <?php require_once 'footer.php';?>
    </footer>
    <!-- end Page Footer -->
</div>

<script type="text/javascript" src="assets/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/smoothscroll.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="assets/js/icheck.min.js"></script>
<script type="text/javascript" src="assets/js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="assets/js/custom.js"></script>
<!--[if gt IE 8]>
<script type="text/javascript" src="assets/js/ie.js"></script>
<![endif]-->


</body>
</html>