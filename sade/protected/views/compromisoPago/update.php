<?php
/* @var $this CompromisopagoController */
/* @var $model Compromisopago */

$this->breadcrumbs=array(
	'Compromisopagos'=>array('index'),
	$model->cpId=>array('view','id'=>$model->cpId),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar compromisos de pago', 'url'=>array('index')),
	array('label'=>'Crear compromiso de pago', 'url'=>array('create')),
	array('label'=>'Ver Compromisos de pago', 'url'=>array('view', 'id'=>$model->cpId)),
	array('label'=>'Administrar compromisos de pago', 'url'=>array('admin')),
);
?>

<h1>Actualizar compromiso de pago <?php echo $model->cpId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>