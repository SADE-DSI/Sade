<?php
/* @var $this MaterialController */
/* @var $model Material */

$this->breadcrumbs=array(
	'Materials'=>array('index'),
	$model->maCodigo,
);

$this->menu=array(
	array('label'=>'List Material', 'url'=>array('index')),
	array('label'=>'Create Material', 'url'=>array('create')),
	array('label'=>'Update Material', 'url'=>array('update', 'id'=>$model->maCodigo)),
	array('label'=>'Delete Material', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->maCodigo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Material', 'url'=>array('admin')),
);
?>

<h1>View Material #<?php echo $model->maCodigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'maCodigo',
		'maNombre',
		'maDescripcion',
		'maEstado',
	),
)); ?>
