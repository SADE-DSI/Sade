<?php
/* @var $this Pagomensual_resController */
/* @var $model Pagomensual_res */

$this->breadcrumbs=array(
	'Pagomensual Res'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pagomensual_res', 'url'=>array('index')),
	array('label'=>'Manage Pagomensual_res', 'url'=>array('admin')),
);
?>

<h1>Create Pagomensual_res</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>