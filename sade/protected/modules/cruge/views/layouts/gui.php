<?php /* @var $this Controller */ ?>
<?php	
	if(Yii::app()->user->isSuperAdmin)
		echo Yii::app()->user->ui->superAdminNote();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="STYLESHEET" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/estiloGeneral.css">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

</head>
<body>
<div class="contenedor">
	<div class="cabecera">
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo2_2.gif" width="90" height="50" style="margin-left: 20px;">
	

	</div>
	

	<div class="menu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Administrar Usuarios'
					, 'url'=>Yii::app()->user->ui->userManagementAdminUrl
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
	
	<div class="contenidos">
		
<?php echo $content; ?>
		
	</div>
	<div class="informacion">
<?php if(Yii::app()->user->checkAccess('admin')) { ?>	
		<?php
			$this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>ucfirst(CrugeTranslator::t("administracion de usuarios")),
			));
			$this->widget('zii.widgets.CMenu', array(
				'items'=>Yii::app()->user->ui->adminItems,
				'htmlOptions'=>array('class'=>'operations'),
			));
			$this->endWidget();
		?>
		<?php } ?>
	</div>
	<div class="pieDePagina">
	Copyright &copy; <?php echo date('Y'); ?> by SADE.<br/>
		</div>
</div>
</body>
</html>
