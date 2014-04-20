<?php
/* @var $this DptoLocalController */
/* @var $model DptoLocal */

$this->breadcrumbs=array(
	'Dpto Locals'=>array('index'),
	$model->dlDireccion,
);

$this->menu=array(
	array('label'=>'List DptoLocal', 'url'=>array('index')),
	array('label'=>'Create DptoLocal', 'url'=>array('create')),
	array('label'=>'Update DptoLocal', 'url'=>array('update', 'id'=>$model->dlDireccion)),
	array('label'=>'Delete DptoLocal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->dlDireccion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DptoLocal', 'url'=>array('admin')),
);
?>

<h1>View DptoLocal #<?php echo $model->dlDireccion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'dlDireccion',
		'dlMts2Construidos',
		'dlValorArriendo',
	),
)); ?>
