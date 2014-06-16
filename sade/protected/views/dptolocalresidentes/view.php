<?php
/* @var $this DptolocalController */
/* @var $model Dptolocal */

$this->breadcrumbs=array(
	'Dpto/Locales'=>array('index'),
	$model->dlDireccion,
);

$this->menu=array(
	array('label'=>'Listar Dpto/Local', 'url'=>array('index')),
	array('label'=>'Crear Dpto/Local', 'url'=>array('create')),
	array('label'=>'Actualizar Dpto/Local', 'url'=>array('update', 'id'=>$model->dlDireccion)),
	array('label'=>'Administrar Dpto/Local', 'url'=>array('admin')),
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
