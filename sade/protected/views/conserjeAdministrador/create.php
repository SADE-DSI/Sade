<?php
/* @var $this ConserjeadministradorController */
/* @var $model Conserjeadministrador */

$this->breadcrumbs=array(
	'Conserjeadministradors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Conserjeadministrador', 'url'=>array('index')),
	array('label'=>'Manage Conserjeadministrador', 'url'=>array('admin')),
);
?>

<h1>Create Conserjeadministrador</h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'persona'=>$persona)); ?>