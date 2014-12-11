<!DOCTYPE html>

<html lang="en-US">
<head>
<?php require_once 'header.php';?>

    <title>Iniciar Session</title>

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
                <li class="active">Iniciar Session</li>
            </ol>
        </div>
        <!-- end Breadcrumb -->

        <div class="container">
            <header><h1>Iniciar Session</h1></header>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                    <form role="form" id="form-create-account" method="post" action="http://localhost/php/realstate/index.php/usuarios/login_propiedad">
                        <div class="form-group">
                            <label for="form-create-account-email">Correo:</label>
                            <input type="email" class="form-control" name="email" id="form-create-account-email" required>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label for="form-create-account-password">Contrasena:</label>
                            <input type="password" class="form-control" name="password" id="form-create-account-password" required>
                        </div><!-- /.form-group -->
                        <div class="form-group clearfix">
                            <button type="submit" class="btn pull-right btn-default" id="account-submit">Entrar a mi cuenta</button>
                        </div><!-- /.form-group -->
                    </form>
                    <hr>
                    <div class="center"><a href="#">Olvidaste tu contrasena?</a></div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
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