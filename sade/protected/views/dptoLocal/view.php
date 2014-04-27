<?php
/* @var $this DptolocalController */
/* @var $model Dptolocal */

$this->breadcrumbs=array(
	'Dpto/locals'=>array('index'),
	$model->dlDireccion,
);

$this->menu=array(
	array('label'=>'Listar Dpto/local', 'url'=>array('index')),
	array('label'=>'Crear Dpto/local', 'url'=>array('create')),
	array('label'=>'Modificar Dpto/local', 'url'=>array('update', 'id'=>$model->dlDireccion)),
	array('label'=>'Eliminar Dpto/local', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->dlDireccion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Dpto/local', 'url'=>array('admin')),
);
?>

<h1>Ver Dpto/local <?php echo $model->dlDireccion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'dlDireccion',
		'dlMts2Construidos',
		'dlValorArriendo',
	),
)); ?>
