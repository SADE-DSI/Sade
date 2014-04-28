<?php /* @var $this Controller */ ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="STYLESHEET" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/estiloGeneral.css">




</head>
<body>
<div class="contenedor">
	<div class="cabecera">
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo2_2.gif" width="90" height="50" style="margin-left: 20px;">
	

	</div>
	<div class="menu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Inicio', 'url'=>array('/site/index')),
				array('label'=>'Acerca', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contacto', 'url'=>array('/site/contact')),
				array('label'=>'Gestionar gasto comun', 'url'=>array('/compromisoPago/index')
				    , 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Espacios Comunes', 'url'=>array('/espacioComun/index')
					, 'visible'=>!Yii::app()->user->isGuest), 
				array('label'=>'Gestionar pagos', 'url'=>array('/pagoMensual/index')
					, 'visible'=>!Yii::app()->user->isGuest), 
				array('label'=>'Administrar Usuarios'
					, 'url'=>Yii::app()->user->ui->userManagementAdminUrl
					, 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Agregar Usuario'
					, 'url'=>array('/arrendatarioDueno/index')
					, 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Agregar conserje'
					, 'url'=>array('/conserjeAdministrador/index')
					, 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Sugerencias', 'url'=>array('/sugerencias/index')
				    , 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Login'
					, 'url'=>Yii::app()->user->ui->loginUrl
					, 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')'
					, 'url'=>Yii::app()->user->ui->logoutUrl
					, 'visible'=>!Yii::app()->user->isGuest),
			),
		)); ?>
	</div>
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
	<div class="contenidos">
	<?php echo $content; ?>
	<div class="span-5 last">
	<div id="sidebar">
	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operaciones',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
	?>
	</div><!-- sidebar -->
</div>
		
	</div>
	<div class="informacion">
		<h2>Información</h2>
	</div>
	<div class="pieDePagina">
	Copyright &copy; <?php echo date('Y'); ?> by SADE.<br/>
		</div>
</div>
</body>
</html>