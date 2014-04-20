<?php
/* @var $this DptoLocalController */
/* @var $model DptoLocal */

$this->breadcrumbs=array(
	'Dpto Locals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DptoLocal', 'url'=>array('index')),
	array('label'=>'Manage DptoLocal', 'url'=>array('admin')),
);
?>

<h1>Create DptoLocal</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>