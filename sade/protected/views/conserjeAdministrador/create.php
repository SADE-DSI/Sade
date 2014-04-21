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

<h1>Create ConserjeAdministrador</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>