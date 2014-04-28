<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->
<div class="menu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Inicio', 'url'=>array('/site/index')),
				array('label'=>'Acerca', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contacto', 'url'=>array('/site/contact')),
				array('label'=>'Agregar gasto comun', 'url'=>array('/compromisoPago/index')
				    , 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Espacios Comunes', 'url'=>array('/espacioComun/index')
					, 'visible'=>!Yii::app()->user->isGuest), 
				array('label'=>'Gestionar pagos', 'url'=>array('/pagoMensual/index')
					, 'visible'=>!Yii::app()->user->isGuest), 
				// array('label'=>'Gestionar Usuarios'
				// 	, 'url'=>Yii::app()->user->ui->userManagementAdminUrl
				// 	, 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Gestionar Usuario'
					, 'url'=>array('/arrendatarioDueno/index')
					, 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Gestionar conserje'
					, 'url'=>array('/conserjeAdministrador/index')
					, 'visible'=>!Yii::app()->user->isGuest),
				
				array('label'=>'Gestionar Dpto/locales', 'url'=>array('/dptoLocal/index')
					, 'visible'=>!Yii::app()->user->isGuest), 
				array('label'=>'Gestionar avisos', 'url'=>array('/aviso/index')
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
	<!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
	<div class="contenidos">

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
