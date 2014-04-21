<?php
/* @var $this ConserjeAdministradorController */
/* @var $model ConserjeAdministrador */

$this->breadcrumbs=array(
	'Conserje Administradors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ConserjeAdministrador', 'url'=>array('index')),
	array('label'=>'Manage ConserjeAdministrador', 'url'=>array('admin')),
);
?>

<h1>Crear Conserje</h1>

<?php $this->renderPartial('_form', array('persona'=>$persona,'model'=>$model)); ?>