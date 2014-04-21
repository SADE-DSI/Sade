<?php
/* @var $this CompromisoPagoController */
/* @var $model CompromisoPago */

$this->breadcrumbs=array(
	'Compromiso Pagos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CompromisoPago', 'url'=>array('index')),
	array('label'=>'Manage CompromisoPago', 'url'=>array('admin')),
);
?>

<h1>Create CompromisoPago</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>