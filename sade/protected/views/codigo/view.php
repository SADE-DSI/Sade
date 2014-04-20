<?php
/* @var $this CodigoController */
/* @var $model Codigo */

$this->breadcrumbs=array(
	'Codigos'=>array('index'),
	$model->coCodigo,
);

$this->menu=array(
	array('label'=>'List Codigo', 'url'=>array('index')),
	array('label'=>'Create Codigo', 'url'=>array('create')),
	array('label'=>'Update Codigo', 'url'=>array('update', 'id'=>$model->coCodigo)),
	array('label'=>'Delete Codigo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->coCodigo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Codigo', 'url'=>array('admin')),
);
?>

<h1>View Codigo #<?php echo $model->coCodigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'coCodigo',
		'coNombre',
	),
)); ?>
