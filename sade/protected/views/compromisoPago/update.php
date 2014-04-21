<?php
/* @var $this CompromisoPagoController */
/* @var $model CompromisoPago */

$this->breadcrumbs=array(
	'Compromiso Pagos'=>array('index'),
	$model->cpId=>array('view','id'=>$model->cpId),
	'Update',
);

$this->menu=array(
	array('label'=>'List CompromisoPago', 'url'=>array('index')),
	array('label'=>'Create CompromisoPago', 'url'=>array('create')),
	array('label'=>'View CompromisoPago', 'url'=>array('view', 'id'=>$model->cpId)),
	array('label'=>'Manage CompromisoPago', 'url'=>array('admin')),
);
?>

<h1>Update CompromisoPago <?php echo $model->cpId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>