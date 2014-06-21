<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
 	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/tema_screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/tema_print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

 	 <!-- <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />  -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/tema_form.css" />  

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/tema.css"/>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<!-- <div class="contenedor" id="page"> -->
	<div class="container" id="page">

	<!-- <div class="cabecera"> -->
	<div id="header">
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo2_2.gif" width="90" height="50" style="margin-left: 20px;">
	</div><!-- header -->

	<!-- <div class="menu"> -->
		<div id="mainmenu">


		<?php
//Yii::app()->user->um->getFieldValue(Yi::app()->user->id,'nombre');  

		 $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				
				//array('label'=>'Inicio', 'url'=>array('/site/index')),
				
				//debora
    			array('label'=>'Avisos', 'url'=>array('/aviso/index')
					, 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Contrato Personal', 'url'=>array('/ContratoPersonal/index')
					, 'visible'=>Yii::app()->user->isSuperAdmin),
				array('label'=>'Sueldo Personal', 'url'=>array('/Sueldopersonal/index')
					, 'visible'=>Yii::app()->user->isSuperAdmin),
    			array('label'=>'Dpto/Locales', 'url'=>array('/Dptolocal/index')
					, 'visible'=>(Yii::app()->user->checkAccess('Residente') || Yii::app()->user->checkAccess('Conserje')) ),
    			array('label'=>'Visitas', 'url'=>array('/Visitadpto/index')
					, 'visible'=>(Yii::app()->user->isSuperAdmin ||Yii::app()->user->checkAccess('Conserje')) ),
    			array('label'=>'Datos Visitas', 'url'=>array('/Visita/index')
					, 'visible'=>(Yii::app()->user->isSuperAdmin ||Yii::app()->user->checkAccess('Conserje')) ),

    			//leonardo
						
				array('label'=>'Conserjes'
					, 'url'=>array('/conserjeAdministrador/index')
					, 'visible'=>Yii::app()->user->isSuperAdmin),
				array('label'=>'Usuario'
					, 'url'=>array('/arrendatarioDueno/index')
					, 'visible'=>Yii::app()->user->isSuperAdmin),	
				array('label'=>'Usuario'
					, 'url'=>array('/arrendatarioDuenoconserje/index')
					, 'visible'=>(Yii::app()->user->checkAccess('Conserje') && !Yii::app()->user->isSuperAdmin)),				
				array('label'=>'Inventarios'
					, 'url'=>array('/material/index')
					, 'visible'=>(Yii::app()->user->checkAccess('Conserje')  || Yii::app()->user->isSuperAdmin)),			

				//diego
				array('label'=>'Espacios Comunes', 'url'=>array('/espacioComun/index')
					, 'visible'=>(Yii::app()->user->isSuperAdmin || Yii::app()->user->checkAccess('Conserje')) ), 
				array('label'=>'Sugerencias', 'url'=>array('/sugerencias/index')
				    , 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Perfiles'
					, 'url'=>array('/permisos/index')
					, 'visible'=>Yii::app()->user->isSuperAdmin),


				//samuel
				

				array('label'=>'Gastos comunes'),//categoria principal
				array('label'=>'Ingresar', 'url'=>array('/compromisoPago/index')
				    , 'visible'=>Yii::app()->user->isSuperAdmin),
				array('label'=>'Gastos Comunes', 'url'=>array('/compromisoPago_otros/index')
				    , 'visible'=>(!Yii::app()->user->isSuperAdmin && !Yii::app()->user->isGuest)), 	
				array('label'=>'Pagos', 'url'=>array('/pagoMensual/index')
					, 'visible'=>!Yii::app()->user->isGuest), 
				array('label'=>'Espacios comunes'),//categoria principal
				array('label'=>'Reservar', 'url'=>array('/reservaespaciocomun/index')
					, 'visible'=>Yii::app()->user->isSuperAdmin), 
				array('label'=>'Reserva espacio común', 'url'=>array('/reservaespaciocomun_residente/index')
					, 'visible'=>(Yii::app()->user->checkAccess('Residente')&& !Yii::app()->user->isSuperAdmin) && !Yii::app()->user->isGuest ),				
	
				array('label'=>'Reserva espacio común', 'url'=>array('/reservaespaciocomun_conserje/index')
					, 'visible'=>(Yii::app()->user->checkAccess('Conserje') && !Yii::app()->user->isSuperAdmin)    ), 

				

				array('label'=>'Ingresar'
					, 'url'=>Yii::app()->user->ui->loginUrl
					, 'visible'=>Yii::app()->user->isGuest),

				array('label'=>'Salir ('.Yii::app()->user->name.')'	
					, 'url'=>Yii::app()->user->ui->logoutUrl
					, 'visible'=>!Yii::app()->user->isGuest),

				/*
				
				

				array('label'=>'Visitas', 'url'=>array('/Visitas/index')
					, 'visible'=>!Yii::app()->user->isGuest),
				
				array('label'=>'Acerca', 'url'=>array('/site/page', 'view'=>'about')),
				*/
				),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
	
	<div class="contenidos">
		<?php echo $content; ?>
	</div>
	
	
	
	
	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> por GRUPO 6.<br/>
		Todos los derechos reservados.<br/>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
