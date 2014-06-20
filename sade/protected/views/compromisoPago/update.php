<?php
/* @var $this CompromisopagoController */
/* @var $model Compromisopago */

$this->breadcrumbs=array(
	'Compromisopagos'=>array('index'),
	$model->cpId=>array('view','id'=>$model->cpId),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->cpId)),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Actualizar gasto común <?php echo $model->cpId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>