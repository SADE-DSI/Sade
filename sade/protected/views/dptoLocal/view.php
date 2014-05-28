<?php
/* @var $this DptolocalController */
/* @var $model Dptolocal */

$this->breadcrumbs=array(
	'Dpto/locals'=>array('index'),
	$model->dlDireccion,
);

$this->menu=array(
	array('label'=>'Listar Dptolocal', 'url'=>array('index')),
	array('label'=>'Crear Dptolocal', 'url'=>array('create')),
	array('label'=>'Actualizar Dptolocal', 'url'=>array('update', 'id'=>$model->dlDireccion)),
	array('label'=>'Administrar Dptolocal', 'url'=>array('admin')),
);
?>

<h1>Ver Dpto/Local <?php echo $model->dlDireccion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'dlDireccion',
		'dlMts2Construidos',
		'dlValorArriendo',
		'dlActivo',
	),
)); ?>
