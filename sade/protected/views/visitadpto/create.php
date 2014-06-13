<?php
/* @var $this VisitadptoController */
/* @var $model Visitadpto */

$this->breadcrumbs=array(
	'Visitadptos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Visitadpto', 'url'=>array('index')),
	array('label'=>'Manage Visitadpto', 'url'=>array('admin')),
);
?>

<h1>Create Visitadpto</h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'visita'=>$visita)); ?>