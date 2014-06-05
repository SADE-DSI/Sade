<?php
/* @var $this SueldopersonalController */
/* @var $model Sueldopersonal */

$this->breadcrumbs=array(
	'Sueldopersonals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Sueldopersonal', 'url'=>array('index')),
	array('label'=>'Manage Sueldopersonal', 'url'=>array('admin')),
);
?>

<h1>Create Sueldopersonal</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>