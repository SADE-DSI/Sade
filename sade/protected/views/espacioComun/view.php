<?php
/* @var $this EspaciocomunController */
/* @var $model Espaciocomun */

$this->breadcrumbs=array(
	'Espaciocomuns'=>array('index'),
	$model->ecCodigo,
);

$this->menu=array(
	array('label'=>'List Espaciocomun', 'url'=>array('index')),
	array('label'=>'Create Espaciocomun', 'url'=>array('create')),
	array('label'=>'Update Espaciocomun', 'url'=>array('update', 'id'=>$model->ecCodigo)),
	array('label'=>'Delete Espaciocomun', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ecCodigo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Espaciocomun', 'url'=>array('admin')),
);
?>

<h1>View Espaciocomun #<?php echo $model->ecCodigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ecCodigo',
		'ecDescripcion',
	),
)); ?>
