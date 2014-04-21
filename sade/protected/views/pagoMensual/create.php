<?php
/* @var $this PagoMensualController */
/* @var $model PagoMensual */

$this->breadcrumbs=array(
	'Pago Mensuals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PagoMensual', 'url'=>array('index')),
	array('label'=>'Manage PagoMensual', 'url'=>array('admin')),
);
?>

<h1>Create PagoMensual</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>