<!DOCTYPE html>

<html lang="en-US">
<head>
    <?php require_once 'header.php';?>
    <title>Crear Cuenta</title>

</head>

<body class="page-sub-page page-create-account page-account" id="page-top">
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
                <li class="active">Crear Cuenta</li>
            </ol>
        </div>
        <!-- end Breadcrumb -->

        <div class="container">
            <header><h1>Crear Cuenta</h1></header>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                    <h3>Tipo de cuenta</h3>
                    <form role="form" id="form-create-account" method="post" action="http://localhost/php/realstate/index.php/usuarios/registrar">
                        <div class="radio" id="create-account-user">
                            <label>
                                <input type="radio" id="account-type-user" name="user_type" value = "Regular" required>Usuario Regular
                            </label>
                        </div>
                        <div class="radio" id="agent-switch" data-agent-state="">
                            <label>
                                <input type="radio" id="account-type-agent" name="user_type"  value = "Agente" required>Agente
                            </label>
                        </div>
                      <!-- 
                        <div id="agency" class="disabled">
                            <div class="form-group">
                                <label for="account-agency">Select your agency:</label>
                                <select name="account-agency" id="account-agency">
                                    <option value="">Agency</option>
                                    <option value="1">Estate+</option>
                                    <option value="2">Northfolk Eastate</option>
                                    <option value="3">Maximum Properties</option>
                                    <option value="4">Edd's Homes</option>
                                    <option value="5">Will & Scotch</option>
                                </select>
                            </div>
                          
                        </div>-->
                        <hr>
        
			<div class="form-group">
            <label for="email">Email:</label><input type="text" class="form-control" id="email" name="email" /><br /></div><!-- /.form-group -->
			<div class="form-group">
            <label for="username">Username:</label><input type="text" class="form-control" id="username" name="username" /><br /></div><!-- /.form-group -->
			<div class="form-group">
            <label for="password">Password:</label><input type="text" class="form-control" id="password" name="password" /><br /></div><!-- /.form-group -->
			<div class="form-group">
            <label for="address">Direccion:</label><input type="text" class="form-control" id="address" name="address" /><br /></div><!-- /.form-group -->
			<div class="form-group">
            <label for="sector_id">Sector:</label>
            </label><input type="text" class="form-control" id="sector_id" name="sector_id" /><br /></div><!-- /.form-group -->
             <!--
             <select class="form-control" id="sector_id" name="sector_id" />
            <?php //foreach($sectores as $sector):?>
            <option value="<?php echo $sector["sector_id"]?>"><?php echo $sector["sector_name"];?></option>
            <?php //endforeach;?>
            </select><br /><br />-->
			<div class="form-group">
            <label for="province_id">Provincia:</label>
             <select class="form-control" id="province_id" name="province_id" />
            <?php foreach($provincias as $provincia):?>
            <option value="<?php echo $provincia["province_id"]?>"><?php echo $provincia["province_name"];?></option>
            <?php endforeach;?>
            </select><br /><br />
			<div class="form-group">
            <label for="country_id">Pais:</label>
            <select class="form-control" id="country_id" name="country_id" />
            <?php foreach($paises as $pais):?>
            <option value="<?php echo $pais["country_id"]?>"><?php echo $pais["country_name"];?></option>
            <?php endforeach;?>
            </select><br /><br />
           <!--   <input type="text" class="form-control" id="country_id" name="country_id" /><br />-->
            </div><!-- /.form-group -->
			<div class="form-group">
            <label for="phone_1">Telefono 1:</label><input type="text" class="form-control" id="phone_1" name="phone_1" /><br /></div><!-- /.form-group -->
			<div class="form-group">
            <label for="phone_1ext">Telefono 1 ext:</label><input type="text" class="form-control" id="phone_1ext" name="phone_1ext" /><br /></div><!-- /.form-group -->
			<div class="form-group">
            <label for="phone_2">Telefono 2:</label><input type="text" class="form-control" id="phone_2" name="phone_2" /><br /></div><!-- /.form-group -->
			<div class="form-group">
            <label for="cell_phone">Celular:</label><input type="text" class="form-control" id="cell_phone" name="cell_phone" /><br /></div><!-- /.form-group -->
			<div class="form-group">
            <label for="fax">Fax:</label><input type="text" class="form-control" id="fax" name="fax" /><br /></div><!-- /.form-group -->
			<div class="form-group">
            <label for="company">Compania:</label><input type="text" class="form-control" id="company" name="company" /><br /></div><!-- /.form-group -->
			<div class="form-group">
            <label for="scontact1_name">Nombre de aplicacion 1:</label><input type="text" class="form-control" id="scontact1_name" name="scontact1_name" /><br /></div><!-- /.form-group -->
			<div class="form-group">
            <label for="scontact1_info">Informacion Aplicacion 1:</label><input type="text" class="form-control" id="scontact1_info" name="scontact1_info" /><br /></div><!-- /.form-group -->
			<div class="form-group">
            <label for="scontact2_name">Nombre de aplicacion 2:</label><input type="text" class="form-control" id="scontact2_name" name="scontact2_name" /><br /></div><!-- /.form-group -->
			<div class="form-group">
            <label for="scontact2_info">Informacio Aplicacion 2:</label><input type="text" class="form-control" id="scontact2_info" name="scontact2_info" /><br /></div><!-- /.form-group -->
			<div class="form-group">
            <label for="scontact3_name">Nombre de Aplicacion 3:</label><input type="text" class="form-control" id="scontact3_name" name="scontact3_name" /><br /></div><!-- /.form-group -->
			<div class="form-group">
            <label for="scontact3_info">Informacion aplicacion 3:</label><input type="text" class="form-control" id="scontact3_info" name="scontact3_info" /><br /></div><!-- /.form-group -->
			<div class="form-group">
            <label for="scontact4_name">Nombre de Aplicacion 4:</label><input type="text" class="form-control" id="scontact4_name" name="scontact4_name" /><br /></div><!-- /.form-group -->
			<div class="form-group">
            <label for="scontact4_info">Informacion aplicacion 4:</label><input type="text" class="form-control" id="scontact4_info" name="scontact4_info" /><br /></div><!-- /.form-group -->
		<div class="form-group clearfix">
        <button type="submit" class="btn pull-right btn-default" id="account-submit">Crear Cuenta</button>
        </div><!-- /.form-group -->
                        
                        
                    </form>
                    <hr>
                  
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    
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
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/icheck.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/custom.js"></script>
<!--[if gt IE 8]>
<script type="text/javascript" src="<?php echo base_url();?>application/public/assets/js/ie.js"></script>
<![endif]-->

</body>
</html>