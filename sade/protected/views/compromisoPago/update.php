<?php
/* @var $this CompromisopagoController */
/* @var $model Compromisopago */

$this->breadcrumbs=array(
	'Compromisopagos'=>array('index'),
	$model->cpId=>array('view','id'=>$model->cpId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Compromisopago', 'url'=>array('index')),
	array('label'=>'Create Compromisopago', 'url'=>array('create')),
	array('label'=>'View Compromisopago', 'url'=>array('view', 'id'=>$model->cpId)),
	array('label'=>'Manage Compromisopago', 'url'=>array('admin')),
);
?>

<h1>Update Compromisopago <?php echo $model->cpId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>